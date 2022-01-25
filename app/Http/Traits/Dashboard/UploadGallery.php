<?php
namespace App\Http\Traits\Dashboard;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
trait UploadGallery {
    

    /*public function storeMultiImage(Request $request, $inputname, $foldername, $disk, $imageable_id, $imageable_type) {
        if($request->hasFile($inputname)) {
            // Check Img
            $inputname = [];
            if(!$request->file($inputname)->isValid()) {
                flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }
            foreach ($request->file($inputname) as $photo) {
                // you can also use the original name
                $filename = Str::slug($request->first_name . $request->last_name) . time() . '.' .$photo->getClientOriginalName();
                $inputname[] = $filename;
            }
            // Store MultiImage
            $Gallery = new Gallery();
            $Gallery->filename = $filename;
            $Gallery->imageable_id = $imageable_id;
            $Gallery->imageable_type = $imageable_type;
            $Gallery->save();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
         }
         return null;
    }*/
    public function uploadImage($request, $data, $name, $inputName = 'image')
    {
        $requestFile = $request->file($inputName);
        try {
            $dir = 'public/image/suppliers/gallery/'.$name;
            $fixName = $data->id.'-'.$name.'.'.$requestFile->extension();

            if ($requestFile) {
                Storage::putFileAs($dir, $requestFile, $fixName);
                $request->image = $fixName;

                $data->update([
                    $inputName => $request->image,
                ]);
            }

            return true;
        } catch (\Throwable $th) {
            report($th);

            return $th->getMessage();
        }
    }
}
