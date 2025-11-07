<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\{Campaign, Client, Contact, Project, Service, Testimonial, WorkMechanism};



class LandingPageController extends Controller
{


    public function index()
    {
        $cacheDuration = now()->addHours(1);
        // ✅ استخدم caching لتقليل الاستعلامات المتكررة
        $services = cache()->remember('landing_services',$cacheDuration, function () {
            return Service::with('projects:id,service_id,title,description')
                ->select('id', 'title', 'image', 'description', 'created_at')
                ->latest()
                ->take(10)
                ->get();
        });

        $clients = cache()->remember('landing_clients', $cacheDuration, function () {
            return Client::select('id', 'name', 'logo', 'created_at')
                ->orderBy('id', 'desc')
                ->get();
        });

        $testimonials = cache()->remember('landing_testimonials', $cacheDuration, function () {
            return Testimonial::select('id', 'name', 'postion', 'message', 'created_at')
                ->latest()
                ->get();
        });

        $projects =
            cache()->remember('landing_projects', $cacheDuration, function () {
                return Project::with(['service:id,title', 'client:id,name', 'images' => function ($q) {
                    $q->select('id', 'project_id', 'image');
                }])
                    ->select('id', 'title', 'description', 'service_id', 'client_id', 'created_at')
                    ->latest()
                    ->take(8)
                    ->get();
            });

        $mechanisms = cache()->remember('landing_mechanisms', $cacheDuration, function () {
            return WorkMechanism::select('id', 'title', 'image', 'description', 'created_at')
                ->orderBy('id')
                ->get();
        });

        // ✅ استخدم count من الكاش بدل 3 استعلامات منفصلة
        $stats = cache()->remember('landing_stats', $cacheDuration, function () {
            return [
                'clients' => Client::count(),
                'services' => Service::count(),
                'projects' => Project::count(),
            ];
        });

        $campaigns = cache()->remember('landing_campaigns', $cacheDuration, function () {
            return Campaign::with(['images' => function ($q) {
                $q->select('id', 'campaign_id', 'image');
            }])
                ->select('id', 'title', 'description','client_name','client_industry', 'type','results','ads_count','duration_days','platforms_count', 'created_at')
                ->latest()
                ->take(value: 12)
                ->get();
        });

        return view('website.landingpage', [
            'services' => $services,
            'clients' => $clients,
            'testimonials' => $testimonials,
            'projects' => $projects,
            'mechanisms' => $mechanisms,
            'clients_count' => $stats['clients'],
            'services_count' => $stats['services'],
            'projects_count' => $stats['projects'],
            'campaigns' => $campaigns,
        ]);
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
        return view('website.projects.detels-project', compact('project'));
    }
}
