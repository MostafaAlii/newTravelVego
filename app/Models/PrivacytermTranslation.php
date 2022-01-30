<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PrivacytermTranslation extends Model {
    use HasFactory;
    protected $table = "privacyterm_translations";
    protected $fillable = ['name'];
    public $timestamps = false;
}
