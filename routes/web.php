<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CampingController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SeetingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WorkMechanismController;
use App\Http\Controllers\WebSite\LandingPageController;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Service;
use App\Models\Client;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\WorkMechanism;

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        // ✅ الصفحات الثابتة
        ->add(Url::create('/'))
        ->add(Url::create('/abouts'))
        ->add(Url::create('/services'))
        ->add(Url::create('/projects'))
        ->add(Url::create('/clients'))
        ->add(Url::create('/testimonials'))
        ->add(Url::create('/contact'));

    // ✅ الخدمات
    foreach (Service::all() as $service) {
        $sitemap->add(
            Url::create('/services/' . $service->id)
                ->setLastModificationDate($service->updated_at)
        );
    }

    // ✅ المشاريع
    foreach (Project::all() as $project) {
        $sitemap->add(
            Url::create(route('project.show', $project->id))
                ->setLastModificationDate($project->updated_at)
        );
    }

    // ✅ العملاء
    foreach (Client::all() as $client) {
        $sitemap->add(
            Url::create('/clients/' . $client->id)
                ->setLastModificationDate($client->updated_at)
        );
    }

    // ✅ آراء العملاء (Testimonials)
    foreach (Testimonial::all() as $testimonial) {
        $sitemap->add(
            Url::create('/testimonials/' . $testimonial->id)
                ->setLastModificationDate($testimonial->updated_at)
        );
    }

    // ✅ آلية العمل (Work Mechanisms)
    foreach (WorkMechanism::all() as $mechanism) {
        $sitemap->add(
            Url::create('/mechanisms/' . $mechanism->id)
                ->setLastModificationDate($mechanism->updated_at)
        );
    }

    // ✅ حفظ الملف داخل مجلد public
    $sitemap->writeToFile(public_path('sitemap.xml'));

    return $sitemap->toResponse(request());
});

Route::get('/camp', function () {
    return view('website.camp');
});


 Route::get('/', [LandingPageController::class,'index'])->name('landingpage');
 Route::post('/', action: [LandingPageController::class,'storeContactForm'])->name('store.contact-form');
Route::get('poroject/show/{id}', action: [LandingPageController::class,'showProject'])->name('project.show');

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('seetings/edit', [SeetingController::class, 'editSeeting'])->name('seetings.edit');
    Route::post('seetings/update', [SeetingController::class, 'updateSeeting'])->name('seetings.update');
    Route::get('abouts/edit', [AboutController::class, 'editAbout'])->name('abouts.edit');
    Route::post('abouts/update', [AboutController::class, 'updateAbout'])->name('abouts.update');
    Route::resource('services',ServiceController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('testimonials',TestimonialController::class);
    Route::resource('contacts',ContactController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('mechanisms',WorkMechanismController::class);
    Route::resource('campaigns',CampingController::class);


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
