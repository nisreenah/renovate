<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/services'), $filename);
            $inputs['image'] = $filename;
        }

        Service::create($inputs);

        $notification = array(
            'message' => 'Service created successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.services.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/services'), $filename);
            $inputs['image'] = $filename;
        }

        $service->update($inputs);
        $notification = array(
            'message' => 'Service updated successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.services.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $image_path = '/upload/services/' . $service->image;
        unlink(public_path() . $image_path);

        $service->delete();
        $notification = array(
            'message' => 'Service deleted successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.services.index')->with($notification);
    }
}
