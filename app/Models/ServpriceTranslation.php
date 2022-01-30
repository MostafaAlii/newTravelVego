<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ServpriceTranslation extends Model {
    use HasFactory;
    protected $table = "servprice_translations";
    protected $fillable = ['name'];
    public $timestamps = false;
}
