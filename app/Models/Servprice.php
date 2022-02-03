<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Servprice extends Model {
    use HasFactory, Translatable, SoftDeletes;
    protected $table = "servprices";
    protected $guarded  = [];
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];
    protected $casts = [
        'status' => 'boolean'
    ];
    protected $dates = ['deleted_at'];

    public function getStatus(){
        return  $this ->status  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }

    // Active Status Scope
    public function scopeActiveStatus($query) {
        return $query->where('status', 1);
    }

    /******************************************** One To Many ************************************************************/
    // Get Attributes For ServPrise Section
    public function attributes() {
        return $this->hasMany(Attribute::class, 'servprice_id');
    }
}