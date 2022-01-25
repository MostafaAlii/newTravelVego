<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
class AlbumController extends Controller
{
    public function __invoke() {
        $current_user_id = auth()->user();
        Album::create([
            $title = 
        ]);
    }

}
