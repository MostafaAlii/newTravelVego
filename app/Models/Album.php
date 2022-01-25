<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
class Album extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia;
    protected $table = 'albums';
    protected $guarded = [];
}
