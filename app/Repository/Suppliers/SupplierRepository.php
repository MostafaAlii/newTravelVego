<?php
namespace App\Repository\Suppliers;
use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Group;
use App\Models\Provience;
use App\Models\Supplier;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\Suppliers\SupplierRepositoryInterface;
use App\Http\Traits\Dashboard\Upload;
use App\Http\Traits\Dashboard\UploadGallery;
class SupplierRepository implements SupplierRepositoryInterface {
    use Upload;
    public function index() {
        $suppliers = Supplier::all();
        $supplier = Supplier::all();
        $groups = Group::all();
        $categories = Category::where('parent_id', null)->get();
        $subCategories = Category::where('parent_id', 1)->get();
        $countries = Country::all();
        $proviences = Provience::all();
        $cities = City::all();
        $areas = Area::all();
        $currencies = Currency::all();
        return view('Dashboard.Suppliers.index', compact([
            'supplier','groups', 'categories', 'suppliers', 'subCategories', 'countries',
            'proviences', 'cities', 'areas', 'currencies'
        ]));
    }

    public function show($id) {
        $userProfile = Supplier::find($id);
        $userGallery = $userProfile->getMedia(); 
        //dd($userGallery);
        return view('Dashboard.Suppliers.show', compact('userProfile', 'userGallery'));
    }
    public function create() {
        $groups = Group::all();
        $categories = Category::where('parent_id', null)->get();
        $subCategories = Category::where('parent_id', 1)->get();
        $countries = Country::all();
        $proviences = Provience::all();
        $cities = City::all();
        $areas = Area::all();
        $currencies = Currency::all();
        return view('Dashboard.Suppliers.add', compact([
            'groups', 'categories', 'subCategories', 'countries',
            'proviences', 'cities', 'areas', 'currencies'
        ]));
    }

    public function store($request) {
        DB::beginTransaction();
        try {
            $supplier = new Supplier();
            $supplier->email = $request->email;
            $supplier->phone = $request->phone;
            $supplier->discount = $request->discount;
            $supplier->password = Hash::make($request->password);
            $supplier->status = $request->status;
            $supplier->created_by    =  auth()->user()->name;
            $supplier->group_id = $request->group_id;
            $supplier->country_id = $request->country_id;
            $supplier->provience_id = $request->provience_id;
            $supplier->city_id = $request->city_id;
            $supplier->area_id = $request->area_id;
            $supplier->category_id = $request->category_id;
            $supplier->subCategory_id = $request->subCategory_id;
            $supplier->currency_id = $request->currency_id;
            $supplier->save();
            // Store Translation
            $supplier->first_name = $request->first_name;
            $supplier->last_name = $request->last_name;
            $supplier->company_name = $request->company_name;
            $supplier->address_primary = $request->address_primary;
            $supplier->address_secondry = $request->address_secondry;
            $supplier->description = $request->description;
            $supplier->save();
            // Upload Supplier Avatar ::
            $this->verifyAndStoreImage($request, 'photo', 'suppliers', 'upload_image', $supplier->id, 'App\Models\Supplier');
            DB::commit();
            session()->flash('add');
            return redirect()->route('Suppliers.index');
        } catch (\Exception $ex) {
            DB::rollback();
            session()->flash('wrong');
            return redirect()->route('Suppliers.index')->withErrors(['error'=> $ex->getMessage()]);
        }
    }

    public function update($request) {
        DB::beginTransaction();
        try {
            $supplier = Supplier::findOrFail($request->id);
            $supplier->email = $request->email;
            $supplier->phone = $request->phone;
            $supplier->discount = $request->discount;
            $supplier->password = Hash::make($request->password);
            $supplier->status = $request->status;
            $supplier->created_by    =  auth()->user()->name;
            $supplier->group_id = $request->group_id;
            $supplier->country_id = $request->country_id;
            $supplier->provience_id = $request->provience_id;
            $supplier->city_id = $request->city_id;
            $supplier->area_id = $request->area_id;
            $supplier->category_id = $request->category_id;
            $supplier->subCategory_id = $request->subCategory_id;
            $supplier->currency_id = $request->currency_id;
            $supplier->save();
            // Update Translation
            $supplier->first_name = $request->first_name;
            $supplier->last_name = $request->last_name;
            $supplier->company_name = $request->company_name;
            $supplier->address_primary = $request->address_primary;
            $supplier->address_secondry = $request->address_secondry;
            $supplier->description = $request->description;
            $supplier->save();
            // Updating Supplier Photo
            if($request->has('photo')) {
                if($supplier->image) {
                    $old_photo = $supplier->image->filename;
                    $this->delete_attachment('upload_image', 'suppliers/', $old_photo, $request->id);
                }
                $this->verifyAndStoreImage($request, 'photo', 'suppliers', 'upload_image', $supplier->id, 'App\Models\Supplier');
            }
            DB::commit();
            session()->flash('edit');
            return redirect()->route('Suppliers.index');
        } catch (\Exception $ex) {
            DB::rollback();
            session()->flash('wrong');
            return redirect()->route('Suppliers.index')->withErrors(['error'=> $ex->getMessage()]);
        }
    }

    public function destroy($request) {
        if($request->page_id == 1) {
            // Check Specific Supplier Have Img or Not
            if($request->filename) {
                $this->delete_attachment('upload_image', 'suppliers/' . $request->filename, 'App\Models\Supplier', $request->id, $request->filename);
            }
            Supplier::destroy($request->id);
            session()->flash('delete');
            return redirect()->route('Suppliers.index');
        } else{

        }
    }

    public function upload(Supplier $supplier) {

    }
}