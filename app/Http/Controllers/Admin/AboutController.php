<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('admin.aboutUs.index', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        $about = About::first();
        return view('admin.aboutUs.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $inputs = $request->all();

        if ($request->hasFile('logo')) {
            $image_path = '/upload/aboutUs/' . $about->logo;
            unlink(public_path() . $image_path);

            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/aboutUs'), $filename);
            $inputs['logo'] = $filename;
        }

        if ($request->hasFile('header_image')) {
            $image_path = '/upload/aboutUs/' . $about->header_image;
            unlink(public_path() . $image_path);

            $file = $request->file('header_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/aboutUs'), $filename);
            $inputs['header_image'] = $filename;
        }

        if ($request->hasFile('image_one')) {
            $image_path = '/upload/aboutUs/' . $about->image_one;
            unlink(public_path() . $image_path);

            $file = $request->file('image_one');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/aboutUs'), $filename);
            $inputs['image_one'] = $filename;
        }

        if ($request->hasFile('image_two')) {
            $image_path = '/upload/aboutUs/' . $about->image_two;
            unlink(public_path() . $image_path);

            $file = $request->file('image_two');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/aboutUs'), $filename);
            $inputs['image_two'] = $filename;
        }

        $about = About::first();
        $about->update($inputs);

        $notification = array(
            'message' => 'Updated successfully.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
