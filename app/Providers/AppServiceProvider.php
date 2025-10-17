<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Seeting;
use App\Models\Service;
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
            $seeting = Seeting::first();
            $about = About::first();
            $contacts =  Contact::take('4')->get();
            $contact_count=Contact::count();
            $latest_projects=Project::with(['service','client'])->take('3')->latest()->get();
            $projects_count = Project::count();
            $clients_count = Client::count();
            $services_count = Service::count();

            $view->with([
                'seeting' => $seeting,
                'about' => $about,
                'contacts'=>$contacts,
                'contact_count'=>$contact_count,
                'latest_projects'=>$latest_projects,
                'projects_count'=>$projects_count,
                'clients_count'=>$clients_count,
                'services_count'=>$services_count

            ]);
        });
    }
}
