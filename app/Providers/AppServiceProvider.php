<?php

namespace App\Providers;

use App\Models\{Seeting, About, Contact, Project, Client, Service};
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            // استخدم الكاش لتقليل عدد الاستعلامات المتكررة
            $seeting = Cache::rememberForever('global_seeting', fn() => Seeting::first());
            $about = Cache::rememberForever('global_about', fn() => About::first());

            // بيانات تتغير كثيراً؟ استخدم كاش قصير الأجل
            $contacts = Cache::remember('global_contacts', 60 * 5, fn() => Contact::take(4)->get());
            $contact_count = Cache::remember('global_contact_count', 60 * 5, fn() => Contact::count());

            $latest_projects = Cache::remember('global_latest_projects', 60 * 10, fn() =>
                Project::with(['service:id,title', 'client:id,name', 'images:id,project_id,image'])
                    ->latest()
                    ->take(3)
                    ->get());

            $projects_count = Cache::remember('global_projects_count', 60 * 10, fn() => Project::count());
            $clients_count = Cache::remember('global_clients_count', 60 * 10, fn() => Client::count());
            $services_count = Cache::remember('global_services_count', 60 * 10, fn() => Service::count());

            $view->with(compact(
                'seeting',
                'about',
                'contacts',
                'contact_count',
                'latest_projects',
                'projects_count',
                'clients_count',
                'services_count'
            ));
        });
    }

    //     public function boot(): void
    //     {
    //         View::composer('*', function ($view) {
    //             $seeting = Seeting::first();
    //             $about = About::first();
    //             $contacts =  Contact::take('4')->get();
    //             $contact_count=Contact::count();
    //             $latest_projects=Project::with(['service','client','images'])->take('3')->latest()->get();
    //             $projects_count = Project::count();
    //             $clients_count = Client::count();
    //             $services_count = Service::count();

    //             $view->with([
    //                 'seeting' => $seeting,
    //                 'about' => $about,
    //                 'contacts'=>$contacts,
    //                 'contact_count'=>$contact_count,
    //                 'latest_projects'=>$latest_projects,
    //                 'projects_count'=>$projects_count,
    //                 'clients_count'=>$clients_count,
    //                 'services_count'=>$services_count

    //             ]);
    //         });
    //     }
    // }
}
