<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Attribute extends Model {
    use HasFactory , Translatable;
    protected $table = "attributes";
    protected $guarded  = [];
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];
    public $timestamps = true;

    // Get ServPrice Section For This Attribute :: Inverse One To Many
    public function servprice() {
        return $this->belongsTo(Servprice::class, 'servprice_id');
    }
}