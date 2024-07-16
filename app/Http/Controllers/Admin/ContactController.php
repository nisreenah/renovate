<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Contact::all()->sortByDesc('id');
        return view('admin.contactUs.index', compact('messages'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contactUs.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        $notification = array(
            'message' => 'Message deleted successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.contacts.index')->with($notification);
    }
}
