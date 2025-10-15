<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WorkMechanism;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $services = Service::select('id', 'title', 'image', 'description', 'created_at')->get();
        $clients = Client::select('id', 'name', 'logo', 'created_at')->get();
        $testimonials = Testimonial::select('id', 'name', 'postion', 'message', 'created_at')->get();
        $projects = Project::with(['service', 'client'])->get();
        $mechanisms = WorkMechanism::select('id', 'title', 'image','description', 'created_at')->orderBy('id')->get();
        $clients_count = Client::count();
        $services_count = Service::count();
        $projects_count = Project::count();
        return view('website.landingpage', compact('services', 'clients', 'testimonials', 'projects','mechanisms', 'clients_count', 'services_count', 'projects_count'));
    }

    public function storeContactForm(StoreContactRequest $request)
    {
        $validator = $request->validated();
        $data = $request->all();
        Contact::create($data);
        toastr()->AddSuccess('تم ارسال رسالتك    بنجاح!');
        return back();
    }

    public function showProject($id)
    {
        $project = Project::with(['service', 'client'])->find($id);
        return view('website.projects.detels-project',compact('project'));
    }
}
