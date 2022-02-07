<?php
namespace App\Http\Controllers\Dashboard\Api\General\Categories;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Resources\General\CategoryResource;
use App\Http\Resources\General\SubCategoryResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class CategoriesApiController extends Controller {
    use GeneralApiTrait;
    public function get_categories() {
        $category = Category::parent()->orderBy('id','ASC')->get();
        if ($category->count() > 0) {
            $categoryResource = CategoryResource::collection($category);
            return $this->returnData('categories', $categoryResource, __('api/errors_msg.get_categories_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.categories_not_found'));
        }
    }

    public function get_subcategories() {
        $subCategory = Category::child()->orderBy('id','ASC')->get();
        if ($subCategory->count() > 0) {
            $subCategoryResource = SubCategoryResource::collection($subCategory);
            return $this->returnData('subCategories', $subCategoryResource, __('api/errors_msg.get_subCategories_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.categories_not_found'));
        }
    }
}
