@extends('Dashboard.layouts.master')
@section('css')
<link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" rel="stylesheet">
<!-- Dropzone MultiUplode JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{ trans('dashboard/product.product_gallery') }}</h4>
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
                        <h3 class="card-title">{{ trans('dashboard/product.add_new_product_image') }}</h3>
                    </div>
                    <!-- End Card Header -->
                    <!-- Start Card Body -->
                    <div class="card-body">
                        <!-- Start Form -->
                        <form id="dropzoneUploadFile" action="{{ route('storeProductImageToDB') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- Start Accordion -->
                            <!-- Start Row Justify-content-md-start -->
                            <input type="hidden" name="product_id" value="{{$id}}">
                            <div class="row justify-content-md-start">
                                <div class="col-12 col-md-12">
                                    <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                        <div class="dz-message text-center text-danger">{{ trans('dashboard/product.product_multiUpload_indexing_alert') }}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row Justify-content-md-start -->
                            <!-- End Accordion -->
                            <hr>
                            <div class="text-center m-t-15">
                                <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                                    <i class="fas fa-save">
                                        {{ trans('dashboard/general.upload') }}
                                    </i>
                                </button>
                            </div>
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
<script>
    var uploadedDocumentMap = {}
   Dropzone.options.dpzMultipleFiles = {
       paramName: "dzfile", // The name that will be used to transfer the file
       //autoProcessQueue: false,
       maxFilesize: 5, // MB
       clickable: true,
       addRemoveLinks: true,
       acceptedFiles: 'image/*',
       dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
       dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
       dictCancelUpload: "الغاء الرفع ",
       dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
       dictRemoveFile: "حذف الصوره",
       dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
       headers: {
           'X-CSRF-TOKEN':
               "{{ csrf_token() }}"
       }
       ,
       url: "{{ route('saveProductImage') }}", // Set the url
       success:
           function (file, response) {
               $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
               uploadedDocumentMap[file.name] = response.name
           }
       ,
       removedfile: function (file) {
           file.previewElement.remove()
           var name = ''
           if (typeof file.file_name !== 'undefined') {
               name = file.file_name
           } else {
               name = uploadedDocumentMap[file.name]
           }
           $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
       }
       ,
       // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
       init: function () {
               @if(isset($event) && $event->document)
           var files =
           {!! json_encode($event->document) !!}
               for (var i in files) {
               var file = files[i]
               this.options.addedfile.call(this, file)
               file.previewElement.classList.add('dz-complete')
               $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
           }
           @endif
       }
   }
</script>
@endsection