<?php

namespace App\Http\Controllers\WebSite;

use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class LandingPageController extends Controller
{
    public function index()
    {
        $services = Service::select('id', 'title', 'image', 'description', 'created_at')->get();
        $clients = Client::select('id', 'name', 'logo', 'created_at')->get();
        $testimonials = Testimonial::select('id', 'name', 'postion', 'message', 'created_at')->get();
        $clients_count=Client::count();
        $services_count=Client::count();
        $projects_count=Project::count();
        return view('website.landingpage',compact('services','clients','clients_count','services_count','projects_count','testimonials'));
    }

    public function storeContactForm(StoreContactRequest $request){
        $validator = $request->validated();
        $data = $request->all();
            Contact::create($data);
            toastr()->AddSuccess('تم ارسال رسالتك    بنجاح!');
            return back();
    }
}
