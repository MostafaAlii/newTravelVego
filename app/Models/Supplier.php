<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Supplier extends Authenticatable {
    use HasFactory, Notifiable, HasApiTokens, Translatable;
    protected $table = 'suppliers';
    protected $guarded = [];
    public $translatedAttributes = ['first_name', 'last_name', 'company_name', 'description', 'address_primary', 'address_secondry'];
    protected $appends = ['barcode_path'];
    public $timestamps = true;

    public function getBarcodePathAttribute() {
        return asset('uploads/supplierBarCode/' . $this->code);
    }
    // Get Supplier Image ::
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
    
    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function provience() {
        return $this->belongsTo(Provience::class, 'provience_id');
    }
    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function area() {
        return $this->belongsTo(Area::class, 'area_id');
    }
    public function currency() {
        return $this->belongsTo(Currency::class, 'currency_id');
    }
    public function group() {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // One To Many , Morph Many , Sypplier HasMany Images in Own Gallery
    public function gallery() {
        return $this->morphMany(Gallery::class, 'galleriable');
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
