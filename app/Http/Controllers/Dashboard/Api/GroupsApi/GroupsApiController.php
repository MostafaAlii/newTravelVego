<?php
namespace App\Http\Controllers\Dashboard\Api\GroupsApi;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Illuminate\Http\Request;
class GroupsApiController extends Controller {
    use GeneralApiTrait;
    public function index(){
        $groups = Group::get();
        if(! $groups)
            return $this->returnErrorMessage('001', __('api/errors_msg.this_group_not_found'));
        return $this->returnData('groups', $groups, __('api/errors_msg.get_groups_details_successfully'));
    }

    public function getGroupById(Request $request) {
        $group = Group::findOrFail($request->id);
        if(! $group)
            return $this->returnErrorMessage('001', __('api/errors_msg.this_group_not_found'));
        return $this->returnData('group', $group, __('api/errors_msg.get_group_details_successfully'));
        //return response()->json($group);
    }
}
