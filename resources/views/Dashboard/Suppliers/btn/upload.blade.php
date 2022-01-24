<!-- Modal -->
<div class="modal fade" id="upload{{$userProfile->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/supplier.supplier_image') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="{{ route('supplier_gallery_image_store', $userProfile->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <br><br>
                    <input type="hidden" name="id" class="form-control" value="{{ $userProfile->id }}" />
                    <div id="dpz-multiple-files" class="dropzone dropzone-area">
                        <div class="dz-message" style="margin-top: -150px;">يمكنك رفع اكثر من صوره هنا</div>
                    </div>
                    <br><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">{{ trans('dashboard/general.upload') }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('dashboard/general.cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>