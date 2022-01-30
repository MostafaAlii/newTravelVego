<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CanceltermTranslation extends Model {
    use HasFactory;
    protected $table = "cancelterm_translations";
    protected $fillable = ['name'];
    public $timestamps = false;
}
