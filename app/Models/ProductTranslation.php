<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductTranslation extends Model {
    use HasFactory;
    protected $table = 'product_translations';
    protected $fillable = ['product_name', 'avaliable_lang', 'description'];
    public $timestamps = false;
}
