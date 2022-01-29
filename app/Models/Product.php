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

    public function sections() {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    public function suppliers() {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function getStatus(){
        return  $this ->status  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }
}
