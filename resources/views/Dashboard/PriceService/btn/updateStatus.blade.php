<!-- Modal -->
<div class="modal fade" id="status{{$ServicePrice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/servicePriceSections.edit_ServPriceStatus') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('servPriceUpdateStatus') }}" method="post" autocomplete="off">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="{{ $ServicePrice->id }}" />
                        <input type="text" name="name" readonly class="form-control" value="{{ $ServicePrice->name }}" />
                        <br>
                        <label>{{ trans('dashboard/servicePriceSections.ServPriceStatus') }}</label>
                        <br>
                        <!-- Start Status Switch -->
                        <div class="col-6 col-md-4">
                            <div class="form-group mt-1">
                                <input type="checkbox" value="1"
                                        name="status"
                                        id="switcheryColor3"
                                        class="js-switchery1" data-color="success"
                                        checked/>
                                <label for="switcheryColor3" class="card-title ml-1">
                                    {{--trans('dashboard/servicePriceSections.servicePriceSections_status_edit')--}}
                                </label>
                                @error("status")
                                <span class="text-danger">{{$message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Status Switch -->
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ trans('dashboard/general.save') }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('dashboard/general.cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
