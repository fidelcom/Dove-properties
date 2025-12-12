<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectMultiImage;
use App\Models\ServiceMulitImage;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ServiceMultiImageController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->file('multiImage') as $img)
        {
//                $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $manager->read($img)->resize(533, 299)->toPng()->save('upload/services/icon/'.$image_name);
            $filename = 'upload/services/icon/'.$image_name;

            ServiceMulitImage::create([
                'service_id' => $request->service_id,
                'image' => $filename
            ]);
        }

        return redirect()->back()->with([
            'message' => 'Multi Image added successfully!',
            'alert-type' => 'success'
        ]);
    }

    public function destroy(string $id)
    {
        $data = ServiceMulitImage::findOrFail($id);

        if ($data->image)
        {
            unlink($data->image);
        }
        $data->delete();

        return redirect()->back()->with([
            'message' => 'Multi Image created successfully!',
            'alert-type' => 'success'
        ]);
    }
}
