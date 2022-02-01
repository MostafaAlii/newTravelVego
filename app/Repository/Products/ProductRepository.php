<?php
namespace App\Repository\Products;
use App\Interfaces\Products\ProductRepositoryInterface;
use App\Models\Section;
use App\Models\Supplier;
use App\Models\Servprice;
use App\Models\Appointment;
use App\Models\Privacyterm;
use App\Models\Cancelterm;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductRepository implements ProductRepositoryInterface {
    public function  index() {
        //$data['suppliers'] = Supplier::activeStatus()->select('id')->get();
        //$data['sections'] = Section::get();
        //$data['products'] = Product::all();
        //$products = Product::select('id','created_at','status', 'vip')->getWithSectionAppointmentServicePrice()->get();
        $products = Product::with('ProductSections','productAppointments', 'productServicePrices')->get();
        return view('Dashboard.Products.index', compact('products'));
    }

    public function create() {
        $data = [];
        $data['suppliers'] = Supplier::activeStatus()->select('id')->get();
        $data['sections'] = Section::get();
        $data['appointments'] = Appointment::get();
        $data['privacyTerms'] = Privacyterm::get();
        $data['cancelTerms'] = Cancelterm::get();
        $data['servprices'] = Servprice::activeStatus()->select('id')->get();
        return view('Dashboard.Products.btn.create', $data);
    }

    public function store($request) {
        //return $request;
        try {
            DB::beginTransaction();
            if (!$request->has('vip')) {
                $request->request->add(['vip' => 0]);
            } else {
                $request->request->add(['vip' => 1]);
            }
            if (!$request->has('status')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }
            $product = Product::create([
                'supplier_id' => $request->supplier_id,
                'main_price' => $request->main_price,
                'price_before_decs' => $request->price_before_decs,
                'product_service_hourly' => $request->product_service_hourly,
                'supplier_product_terms_ex'=>$request->supplier_product_terms_ex,
                'vip' => $request->vip,
                'status' => $request->status,
            ]);
            // Save Translation
            $product->product_name = $request->product_name;
            $product->description = $request->description;
            $product->avaliable_lang = $request->avaliable_lang;
            $product->save();
            // Save Product Sections
            $product->ProductSections()->attach($request->sections);
            // Save Product ServPrices
            $product->productServicePrices()->attach($request->servprice);
            // Save Product Appointments
            $product->productAppointments()->attach($request->appointments);
            // Save Product PrivacyTerms
            $product->productPrivacyTerms()->attach($request->privacyTerms);
            // Save Product CancelTerms
            $product->productCancelTerms()->attach($request->cancelTerms);
            DB::commit();
            session()->flash('add');
            return redirect()->route('Products.index');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('Products.index')->withErrors(['error'=> $ex->getMessage()]);
        }
    }
}
