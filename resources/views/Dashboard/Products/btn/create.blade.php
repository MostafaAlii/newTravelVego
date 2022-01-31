@extends('Dashboard.layouts.master')
@section('css')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" integrity="sha512-uyGg6dZr3cE1PxtKOCGqKGTiZybe5iSq3LsqOolABqAWlIRLo/HKyrMMD8drX+gls3twJdpYX0gDKEdtf2dpmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js" type="text/javascript"></script>
<link href="{{URL::asset('assets/Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{ trans('dashboard/product.add_new_product') }}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
        </div>

    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')
    @include('Dashboard.MessageAlert.message_alert')
        <!-- row opened -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Start Card -->
                <div class="card">
                    <!-- Start Card Header -->
                    <div class="card-header">
                        <h3 class="card-title">{{ trans('dashboard/product.add_new_product_info') }}</h3>
                    </div>
                    <!-- End Card Header -->
                    <!-- Start Card Body -->
                    <div class="card-body">
                        <!-- Start Form -->
                        <form action="{{ route('Products.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- Start Accordion -->
                            <div id="accordion" class="w-100 br-2 overflow-hidden">
                                <!-- Start Product Main Info Collapse --> 
                                <div class="">
                                    <!-- Start headingOne1 -->
                                    <div class="accor bg-primary" id="headingOne1">
                                        <h4 class="m-0">
                                            <a href="#productMainInfoCollapse" class="" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="si si-cursor-move ml-2"></i>
                                                {{ trans('dashboard/product.product_main_info') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- End headingOne1 -->
                                    <!-- Start productMainInfoCollapse -->
                                    <div id="productMainInfoCollapse" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <!-- Start border p-3 -->
                                        <div class="border p-3">
                                            <!-- Start First Row -->
                                            <div class="row justify-content-md-start">
                                                <!-- Start Product Name -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-field form-group">
                                                        <label for="product_name" class="label">{{ trans('dashboard/product.product_name') }}</label>
                                                        <input id="product_name" class="input-text form-control" value="{{ old('product_name') }}" autofocus type="text" name="product_name" placeholder="{{ trans('dashboard/product.typing_product_name') }}">
                                                        @error("product_name")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Start Main Price -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-field form-group">
                                                        <label for="main_price">{{trans('dashboard/product.product_main_price')}}</label>
                                                        <input type="number" id="main_price" class="form-control" placeholder="{{trans('dashboard/product.typing_product_main_price')}}" value="{{old('main_price')}}" name="main_price">
                                                        @error("main_price")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Main Price -->
                                                <!-- Start Price Before Descount -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-field form-group">
                                                        <label for="price_before_decs">{{trans('dashboard/product.product_price_before_decs')}}</label>
                                                        <input type="number" id="price_before_decs" class="form-control" placeholder="{{trans('dashboard/product.product_price_before_decs')}}" value="{{old('price_before_decs')}}" name="price_before_decs">
                                                        @error("price_before_decs")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Price Before Descount -->
                                            </div>
                                            <!-- End First Row -->
                                            <!-- Start Second Row Product Section & Product Servprice -->
                                            <div class="row justify-content-md-start">
                                                <!-- Start Product Section -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{trans('dashboard/product.product_section')}}</label>
                                                        <select name="sections[]" class="select2 form-control" multiple>
                                                            <optgroup label="{{trans('dashboard/product.product_section')}}">
                                                                @if($sections && $sections->count() > 0)
                                                                    @foreach($sections as $section)
                                                                        <option
                                                                            value="{{$section->id }}">{{$section->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Product Section -->
                                                <!-- Start Product Servprice -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{trans('dashboard/product.product_servprice')}}</label>
                                                        <select name="categories" class="select2 form-control">
                                                            <optgroup label="{{trans('dashboard/product.product_servprice')}}">
                                                                @if($servprices && $servprices->count() > 0)
                                                                    @foreach($servprices as $servprice)
                                                                        <option
                                                                            value="{{$servprice->id }}">{{$servprice->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Product Servprice -->
                                                <!-- Start Select Supplier -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{trans('dashboard/product.product_supplier_select')}}</label>
                                                        <select name="supplier_id" class="select2 form-control">
                                                            <optgroup label="{{trans('dashboard/product.product_supplier_select')}}">
                                                                @if($suppliers && $suppliers->count() > 0)
                                                                    @foreach($suppliers as $supplier)
                                                                        <option
                                                                            value="{{$supplier->id }}">{{$supplier->company_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Select Supplier -->
                                            </div>
                                            <!-- End Second Row Product Section & Product Servprice -->
                                            <!-- Start Thired Row VIP & Status -->
                                            <div class="row justify-content-md-start">
                                                <!-- Start Vip Switch -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="vip"
                                                                id="switcheryColor4"
                                                                class="js-switchery" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_vip')}}
                                                        </label>
                                                        @error("vip")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Vip Switch -->
                                                <!-- Start Status Switch -->
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="status"
                                                                id="switcheryColor3"
                                                                class="js-switchery1" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor3" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_status')}}
                                                        </label>
                                                        @error("status")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Status Switch -->
                                            </div>
                                            <!-- End Third Row VIP & Status -->
                                            <!-- Start Fourth Row Product Service Hourly -->
                                            <div class="row justify-content-md-start">
                                                <div class="col-6 col-md-4">
                                                    <div class="form-field form-group">
                                                        <label for="product_service_hourly" class="label">{{ trans('dashboard/product.product_service_hourly') }}</label>
                                                        <input id="product_service_hourly" class="input-text form-control" value="{{ old('product_service_hourly') }}" type="number" name="product_service_hourly" placeholder="{{ trans('dashboard/product.typing_product_service_hourly') }}">
                                                        @error("product_service_hourly")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start Fourth Row Product Service Hourly -->
                                        </div>
                                        <!-- End border p-3 -->
                                    </div>
                                    <!-- End productMainInfoCollapse -->
                                </div>
                                <!-- End Product Main Info Collapse -->
                                <br>
                                <!-- Start Product Decsription & Avaliable Language -->
                                <div class="">
                                    <!-- Start headingTwo2 -->
                                    <div class="accor bg-primary" id="headingTwo2">
                                        <h4 class="m-0">
                                            <a href="#productDescriptionAvaliableLanguageInfoCollapse" class="" data-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                <i class="si si-cursor-move ml-2"></i>
                                                {{ trans('dashboard/product.product_description_lang_info') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- End headingTwo2 -->
                                    <div id="productDescriptionAvaliableLanguageInfoCollapse" class="collapse b-b0 bg-white" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="border p-3">
                                            <div class="row justify-content-md-start">
                                                <!-- Start Product Description -->
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">{{ trans('dashboard/product.product_description') }}</label>
                                                        <textarea name="description" id="description"></textarea>
                                                    </div>
                                                </div>
                                                <!-- End Product Description -->
                                                <!-- Start Product Avaliable Language -->
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">{{ trans('dashboard/product.product_avaliable_lang') }}</label>
                                                        <textarea name="avaliable_lang" id="avaliableLanguage"></textarea>
                                                    </div>
                                                </div>
                                                <!-- End Product Avaliable Language -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Decsription & Avaliable Language -->
                                <br>
                                <!-- Start Product Appointment -->
                                <div class="">
                                    <!-- Start headingThree3 -->
                                    <div class="accor bg-primary" id="headingThree3">
                                        <h4 class="m-0">
                                            <a href="#productServiceAppointmentCollapse" class="" data-toggle="collapse" aria-expanded="true" aria-controls="collapseThree">
                                                <i class="si si-cursor-move ml-2"></i>
                                                {{ trans('dashboard/product.product_appointment') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- End headingThree3 -->
                                    <div id="productServiceAppointmentCollapse" class="collapse b-b0 bg-white" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="border p-3">
                                            <div class="row justify-content-md-start">
                                                <!-- Start allDay Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="allDay"
                                                                id="switcheryColor4"
                                                                class="js-switchery_allDay" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_allDay')}}
                                                        </label>
                                                        @error("allDay")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End allDay Switch -->
                                                <!-- Start Saturday Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="saturday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_saturday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_saturday')}}
                                                        </label>
                                                        @error("saturday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Saturday Switch -->
                                                <!-- Start Sunday Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="sunday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_sunday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_sunday')}}
                                                        </label>
                                                        @error("saturday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Sunday Switch -->
                                                <!-- Start Monday Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="monday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_monday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_monday')}}
                                                        </label>
                                                        @error("monday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Sunday Switch -->
                                            </div>
                                            <div class="row justify-content-md-start">
                                                <!-- Start allDay Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="tuesday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_tuesday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_tuesday')}}
                                                        </label>
                                                        @error("tuesday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End allDay Switch -->
                                                <!-- Start Saturday Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="wednesday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_wednesday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_wednesday')}}
                                                        </label>
                                                        @error("wednesday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Saturday Switch -->
                                                <!-- Start Sunday Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="thursday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_thursday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_thursday')}}
                                                        </label>
                                                        @error("thursday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Sunday Switch -->
                                                <!-- Start Monday Switch -->
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="friday"
                                                                id="switcheryColor4"
                                                                class="js-switchery_friday" data-color="success"
                                                                checked/>
                                                        <label for="switcheryColor4" class="card-title ml-1">
                                                            {{trans('dashboard/product.product_friday')}}
                                                        </label>
                                                        @error("friday")
                                                        <span class="text-danger">{{$message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- End Sunday Switch -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Appointment -->
                            </div>
                            <!-- End Accordion -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Card Body -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col-xl-12 -->
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/Dashboard/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/Dashboard/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('assets/Dashboard/plugins/notify/js/notifIt-custom.js')}}"></script>
<script src="{{URL::asset('assets/Dashboard/js/form-layouts.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2({
            search: true,allowClear: true,
            searchText: {{ trans('dashboard/supplier.please_select_with_list') }},
            placeholder: {
                text: {{ trans('dashboard/supplier.please_select_with_list') }},
            },
        });
    });
</script>
<script>
    tinymce.init({
        selector: '#description',
        directionality : 'rtl',
        language: 'ar'
    });
    tinymce.init({
    selector: '#avaliableLanguage',
    directionality : 'rtl',
        language: 'ar'
  });
</script>
<script type="text/javascript">
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery1');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_allDay');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_saturday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_sunday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_monday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_tuesday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_wednesday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_thursday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
    $(function (){
        // Switchery Check Box ::
        var elem = document.querySelector('.js-switchery_friday');
        var init = new Switchery(elem,{
            color             : '#64bd63',
            secondaryColor    : '#ccc',
            jackColor         : '#fff',
            jackSecondaryColor: null,
            className         : 'switchery',
            disabled          : false,
            disabledOpacity   : 0.5,
            speed             : '1s',
            size              : 'small',
        });
    });
</script>
@endsection