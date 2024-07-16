<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhotoGalleryRequest;
use App\Models\PhotoGallery;

class GalleryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoGalleryRequest $request)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects/gallery'), $filename);
            $inputs['image'] = $filename;
        }

        PhotoGallery::create($inputs);
        $notification = array(
            'message' => 'Photo gallery Added successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($photoGalleryId)
    {
        $photoGallery = PhotoGallery::findOrFail($photoGalleryId);
        $image_path = '/upload/projects/gallery/' . $photoGallery->image;
        unlink(public_path() . $image_path);

        $photoGallery->delete();
        $notification = array(
            'message' => 'Photo gallery deleted successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
