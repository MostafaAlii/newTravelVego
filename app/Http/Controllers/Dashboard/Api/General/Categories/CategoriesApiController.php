<?php
namespace App\Http\Controllers\Dashboard\Api\General\Categories;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Resources\General\CategoryResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Illuminate\Http\Request;
class CategoriesApiController extends Controller {
    use GeneralApiTrait;
    public function get_categories() {
        $category = Category::get();
        if ($category->count() > 0) {
            $categoryResource = CategoryResource::collection($category);
            return $this->returnData('categories', $categoryResource, __('api/errors_msg.get_categories_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.this_category_not_found'));
        }
    }
}
