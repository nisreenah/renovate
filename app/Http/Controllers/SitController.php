<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaveCommentRequest;
use App\Http\Requests\SendMessageRequest;
use App\Models\About;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use Throwable;

class SitController extends Controller
{
    public function home()
    {
        $projects = Project::latest()->take(6)->get();
        return view('site.index', compact('projects'));
    }

    public function about()
    {
        $about = About::first();
        $teams = Team::all();
        return view('site.about', compact('about', 'teams'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('site.projects', compact('projects'));
    }

    public function services()
    {
        $services = Service::all();
        return view('site.services', compact('services'));
    }

    public function teams()
    {
        $teams = Team::all();
        return view('site.teams', compact('teams'));
    }

    public function projectDetails($slug)
    {
        $services = Service::all();
        $recentProjects = Project::latest()->take(3)->get();
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('site.project-details', compact('project', 'recentProjects', 'services'));
    }

    public function serviceDetails($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $services = Service::all();
        return view('site.service-details', compact('service', 'services'));
    }

    public function sendMessage(SendMessageRequest $request): \Illuminate\Http\JsonResponse
    {
        $sent = Contact::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Message sent successfully, we will get back to you soon.',
            'sent-message' => $sent
        ], 200);
    }

    public function leaveComment(LeaveCommentRequest $request): \Illuminate\Http\JsonResponse
    {
        $sent = Comment::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Thank you, Comment sent successfully, your comment will be published soon.',
            'sent-message' => $sent
        ], 200);
    }
}
