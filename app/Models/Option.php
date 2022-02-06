<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Option extends Model {
    use HasFactory , Translatable;
    protected $table = "options";
    protected $guarded  = [];
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];
    public $timestamps = true;

    // Get Attribute Section For This Option :: Inverse One To Many
    public function attribute() {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    // Scopes ::
    public function scopeGetOptionsAttrAndProduct($query) {
        return $query->with(['product' => function($product) {
            $product->select('id');
        }
        ,'attribute' => function($atrribute) {
            $atrribute->select('id');
        }])->select('id', 'attribute_id', 'product_id', 'option_price', 'created_at');
    }
}