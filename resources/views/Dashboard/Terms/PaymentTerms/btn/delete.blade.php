<!-- Modal -->
<div class="modal fade" id="delete{{$paymentTerm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/terms.delete_term_details') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('PaymentTerms.destroy', 'test') }}" method="post" autocomplete="off">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="{{ $paymentTerm->id }}" />
                        <h5>{{ trans('dashboard/general.warning') }}</h5> <br>
                        <input type="text" name="name" readonly class="form-control" value="{{ $paymentTerm->name }}" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">{{ trans('dashboard/general.delete') }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('dashboard/general.cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
