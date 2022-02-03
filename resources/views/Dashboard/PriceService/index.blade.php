@extends('Dashboard.layouts.master')
@section('css')
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Dashboard//plugins/notify/css/notifIt.css')}}" rel="stylesheet">
    <!-- Switchery IOS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" integrity="sha512-uyGg6dZr3cE1PxtKOCGqKGTiZybe5iSq3LsqOolABqAWlIRLo/HKyrMMD8drX+gls3twJdpYX0gDKEdtf2dpmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js" type="text/javascript"></script>
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('dashboard/servicePriceSections.servicePriceSections') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
            </div>

        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                    {{ trans('dashboard/servicePriceSections.add_new_servicePriceSections') }}
                </button>
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
                            <h4 class="card-title mg-b-0">{{ trans('dashboard/servicePriceSections.show_all_priceServiceSections_in_sidebar') }}</h4>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-2"></p>
                    </div>
                    <div class="card-body">
                        <table class="table-responsive">
                            <table id="example" class="table key-buttons text-md-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_name') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_created_by') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_updated_by') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_created_at') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_status') }}</th>
                                    <th class="border-bottom-0">{{ trans('dashboard/servicePriceSections.servicePriceSections_actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ServicePrices as $ServicePrice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a class="modal-effect" style="color: black;" data-effect="effect-scale" data-toggle="modal" href="#show{{$ServicePrice->id}}">
                                                {{ $ServicePrice->name }}
                                            </a>
                                        </td>
                                        <td>{{ $ServicePrice->created_by }}</td>
                                        <td>{{ $ServicePrice->updated_by }}</td>
                                        <td>{{ $ServicePrice->created_at->diffForHumans() }}</td>
                                        <td>
                                            <span class="font-weight-bold badge badge-pill badge-{{ $ServicePrice->status == 1 ? 'success' : 'danger'  }}">
                                                {{ $ServicePrice->status == 1 ? trans('dashboard/supplier.supplier_active') : trans('dashboard/supplier.supplier_disActive') }}
                                            </span>
                                        </td>
                                        <td>
                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale" data-toggle="modal" href="#edit{{$ServicePrice->id}}">
                                                <i class="las la-pen"></i>
                                            </a>
                                            <a class="modal-effect btn btn-sm btn-warning" data-effect="effect-scale" data-toggle="modal" href="#show{{$ServicePrice->id}}">
                                                <i class="las la-eye"></i>
                                            </a>
                                            <a class="modal-effect btn btn-sm btn-success" data-effect="effect-scale" data-toggle="modal" href="#status{{$ServicePrice->id}}">
                                                <i class="las la-bell"></i>
                                            </a>
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-toggle="modal" href="#delete{{$ServicePrice->id}}">
                                                <i class="las la-trash"></i>
                                            </a>
                                            <a class="modal-effect btn btn-sm btn-primary" data-effect="effect-scale" data-toggle="modal" href="#archive{{$ServicePrice->id}}">
                                                <i class="las la-redo-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('Dashboard.PriceService.btn.edit')
                                    @include('Dashboard.PriceService.btn.delete')
                                    @include('Dashboard.PriceService.btn.updateStatus')
                                    @include('Dashboard.PriceService.btn.show')
                                @endforeach()
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('Dashboard.PriceService.btn.add')
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
    <script>
        $(document).ready(function () {
            $('.SlectBox').select2({
                search: true,allowClear: true,
                searchText: {{ trans('dashboard/supplier.please_select_with_list') }},
                placeholder: {
                    id: '-1',
                    text: {{ trans('dashboard/supplier.please_select_with_list') }},
                },
            });
        });
    </script>
    <script type="text/javascript">
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
    </script>
@endsection