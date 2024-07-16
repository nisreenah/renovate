<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/teams'), $filename);
            $inputs['image'] = $filename;
        }

        Team::create($inputs);
        $notification = array(
            'message' => 'Member team added successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.teams.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/teams'), $filename);
            $inputs['image'] = $filename;
        }

        $team->update($inputs);
        $notification = array(
            'message' => 'Member team updated successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.teams.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $image_path = '/upload/teams/' . $team->image;
        unlink(public_path() . $image_path);

        $team->delete();
        $notification = array(
            'message' => 'Member team deleted successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.teams.index')->with($notification);
    }
}
