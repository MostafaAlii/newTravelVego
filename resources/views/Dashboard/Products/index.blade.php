@extends('Dashboard.layouts.master')
@section('css')
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard//plugins/notify/css/notifIt.css')}}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('dashboard/product.product_title_in_sidebar') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
            </div>

        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a type="button" href="{{route('Products.create')}}" class="btn btn-primary">
                    {{ trans('dashboard/product.add_new_product') }}
                </a>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
        @include('Dashboard.MessageAlert.message_alert')
        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">{{ trans('dashboard/product.show_all_product_in_sidebar') }}</h4>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-2"></p>
                    </div>
                    <div class="card-body">
                        <table class="table-responsive">
                            <table id="example" class="table key-buttons text-md-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_name') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_section') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_explainment_price') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_appointment') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_supplier') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_vip') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/product.product_status') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_created_at') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @isset($products)
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>
                                                    @foreach ($product->ProductSections as $section)
                                                        {{$section->name}}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($product->productServicePrices as $explainmentPrice)
                                                        {{$explainmentPrice->name}}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($product->productAppointments as $appointment)
                                                        {{$appointment->name}}
                                                    @endforeach
                                                </td>
                                                <td>{{-- $product->suppliers->company_name --}}</td>
                                                <td>{{ $product->getVip() }}</td>
                                                <td>{{ $product->getStatus() }}</td>
                                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale" data-toggle="modal" href="#edit{{$product->id}}">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    <a class="modal-effect btn btn-sm btn-success" href="{{route('addProductsImages',$product->id)}}">
                                                        <i class="las la-images"></i>
                                                    </a>
                                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-toggle="modal" href="#delete{{$product->id}}">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @include('Dashboard.Products.btn.delete')
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

@section('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/Dashboard/js/table-data.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard//plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/Dashboard//plugins/notify/js/notifIt-custom.js')}}"></script>
@endsection