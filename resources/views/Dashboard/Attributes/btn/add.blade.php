<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/attribute.add_new_attribute') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
            <form action="{{ route('Attributes.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="projectinput2">{{ trans('dashboard/attribute.related_servPriceSection') }}</label>
                        <select name="servprice_id" class="select2 js-example-basic-single form-control">
                            <optgroup label="{{ trans('dashboard/attribute.related_servPriceSection') }}">
                                @if($Servprises && $Servprises -> count() > 0)
                                    @foreach($Servprises as $Servprise)
                                        <option value="{{$Servprise->id }}">
                                            {{$Servprise->name}}
                                        </option>
                                    @endforeach
                                @endif
                            </optgroup>
                        </select>
                        @error('servprice_id')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ trans('dashboard/attribute.attribute_name') }}</label>
                        <input type="text" name="name" class="form-control" placeholder="{{ trans('dashboard/attribute.enter_attribute_name_placeholder') }}" />
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