<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        $services = Service::select('id', 'title')->get();

        return view('admin.contacts.index', compact('contacts','services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {


    return view('admin.contacts.show', compact('contact'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request,  Contact $contact)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service= Contact::find($id);
        $service->delete();
        toastr()->addError('تم حزف  الرسالة بنجاح!');

        return redirect()->route('contacts.index');
    }
}
