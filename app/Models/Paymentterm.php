<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Paymentterm extends Model {
    use HasFactory , Translatable;
    protected $table = "paymentterms";
    protected $guarded  = [];
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];
}
