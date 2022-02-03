<!-- Modal -->
<div class="modal fade" id="show{{$ServicePrice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/servicePriceSections.show_servicePriceSection_details') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('ServicePrices.show', 'test') }}" method="post" autocomplete="off">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label>{{ trans('dashboard/servicePriceSections.show_servicePriceSection_data_details') }}</label>
                        <input type="hidden" name="id" class="form-control" value="{{ $ServicePrice->id }}" />
                        <input type="text" name="name" class="form-control" value="{{ $ServicePrice->name }}" />
                        @foreach ($ServicePrice->attributes as $attribute)
                            {{$attribute->name}}
                        @endforeach
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('dashboard/general.cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
