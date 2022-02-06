<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/attributeOption.add_new_attributeOption') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
            <form action="{{ route('AttributeOptions.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <!-- Start Product Selected -->
                    <div class="form-group">
                        <label for="projectinput2">{{ trans('dashboard/attributeOption.related_product') }}</label>
                        <select name="product_id" class="select2 js-example-basic-single form-control">
                            <optgroup label="{{ trans('dashboard/attributeOption.related_product') }}">
                                @if($products && $products->count() > 0)
                                    @foreach($products as $product)
                                        <option
                                            value="{{$product->id }}">{{$product->product_name}}</option>
                                    @endforeach
                                @endif
                            </optgroup>
                        </select>
                        @error('product_id')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <!-- End Product Selected -->
                    <!-- Start Attribute -->
                    <div class="form-group">
                        <label for="projectinput2">{{ trans('dashboard/attributeOption.related_attribute') }}</label>
                        <select name="attribute_id" class="select2 js-example-basic-single form-control">
                            <optgroup label="{{ trans('dashboard/attributeOption.related_attribute') }}">
                                @if($attributes && $attributes->count() > 0)
                                    @foreach($attributes as $attribute)
                                        <option
                                            value="{{$attribute->id }}">{{$attribute->name}}</option>
                                    @endforeach
                                @endif
                            </optgroup>
                        </select>
                        @error('attribute_id')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <!-- End Attribute -->
                    <!-- Start Option Price -->
                    <div class="form-group">
                        <label>{{ trans('dashboard/attributeOption.attributeOption_name') }}</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="{{ trans('dashboard/attributeOption.attributeOption_name') }}" />
                        @error("name")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <!-- End Option Price -->
                    <!-- Start Option Price -->
                    <div class="form-group">
                        <label>{{ trans('dashboard/attributeOption.attributeOption_price') }}</label>
                        <input type="number" name="option_price" value="{{old('')}}" class="form-control" placeholder="{{ trans('dashboard/attributeOption.enter_attributeOption_price_placeholder') }}" />
                        @error("option_price")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <!-- End Option Price -->
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ trans('dashboard/general.save') }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('dashboard/general.cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>