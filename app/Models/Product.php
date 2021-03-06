<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model {
    use HasFactory, Translatable, SoftDeletes;
    protected $table = "products";
    protected $guarded  = [];
    protected $with = ['translations'];
    protected $translatedAttributes = ['product_name', 'avaliable_lang', 'description'];
    protected $casts = [
        'status' => 'boolean',
        'vip' => 'boolean',
    ];
    protected $dates = ['deleted_at'];
    public function getStatus(){
        return  $this ->status  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }
    public function getVip(){
        return  $this ->vip  == 0 ?  'لا'   : 'نعم' ;
    }
    /**************************************** One To One Relations **********************************/
    public function suppliers() {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
    /**************************************** Many To Many Relations ********************************/
    public function ProductSections() {
        return $this->belongsToMany(Section::class, 'product_section');
    }

    public function productAppointments() {
        return $this->belongsToMany(Appointment::class, 'product_appointment');
    }

    public function productServicePrices() {
        return $this->belongsToMany(Servprice::class, 'product_servprice');
    }

    public function productCancelTerms() {
        return $this->belongsToMany(Cancelterm::class, 'product_cancelterm');
    }

    public function productPrivacyTerms() {
        return $this->belongsToMany(Privacyterm::class, 'product_privacyterm');
    }
    /************************************* HasMany Relations *****************************************/
    public function attrOptions() {
        return $this->hasMany(Option::class, 'product_id');
    }
    /************************************* Scopes *****************************************/
    public function scopeActiveStatus($query) {
        return $query->where('status', 1);
    }
    public function scopeGetWithSectionAppointmentServicePrice($query) {
        return $query->with('ProductSections','productAppointments', 'productServicePrices');
    }
}