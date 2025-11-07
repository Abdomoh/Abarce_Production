@extends('layouts.site')
@section('content')
    <!-- Hero Section with Background Image -->
    <section id="home" class="hero-section">
        <!-- Background Image -->
        <div class="hero-bg-image"></div>

        <!-- Overlay for better text readability -->
        <div class="hero-overlay"></div>

        <!-- Background Elements -->
        <div class="hero-bg-elements"></div>

        <!-- Geometric Shapes -->
        <div class="geometric-shape shape-1"></div>
        <div class="geometric-shape shape-2"></div>
        <div class="geometric-shape shape-3"></div>

        <!-- Film Reel -->
        <div class="film-reel"></div>

        <!-- Camera Icon -->
        <div class="camera-icon"></div>

        <!-- Clapperboard -->
        <div class="clapperboard"></div>

        <!-- Floating Particles -->
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <!-- Hero Content -->
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"> {{ $seeting->name }} </h1>
                <p class="hero-subtitle"> {{ $about->description }}
                    <!-- Two Beautiful Buttons -->
                <div class="hero-buttons">
                    <a href="#portfolio" class="btn-hero btn-primary-custom">
                        {{ __('main.witch_work') }}
                        <i class="bi bi-play-circle"></i>
                    </a>
                    <a href="#contact" class="btn-hero btn-accent-custom">
                        {{ __('main.delivery') }}
                        <i class="bi bi-calendar-check"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    {{-- <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">  {{ $seeting->name }}</h1>
                        <p class="hero-subtitle">     {{ __('main.logo_abarce') }}</p>
                        <a href="#portfolio" class="btn btn-hero"> {{ __('main.witch_work') }}
                            <i class="bi bi-play-circle"></i>
                        </a>
                        <a href="#contact" class="btn btn-hero"> {{ __('main.delivery') }}
                            <i class="bi bi-calendar-check"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section> --}}

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('/storage/' . $about->image) }}" alt="من نحن - {{ $seeting->name }}"
                        title="{{ $about->title }}" loading="lazy" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">{{ __('main.about') }} </h2>
                    <p class="section-subtitle"> {{ $about->title }} </p>
                    <p> {{ $about->sub_title }}</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="service-icon">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <div>
                                    <h5> {{ __('main.higth_qulity') }}</h5>
                                    <p>{{ __('main.qulit_text') }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="service-icon">
                                    <i class="bi bi-lightbulb-fill"></i>
                                </div>
                                <div>
                                    <h5> {{ __('main.amizing') }}</h5>
                                    <p> {{ __('main.amizing_text') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Services Section -->

    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">{{ __('main.services') }}</h2>
                <p class="section-subtitle">
                    {{ __('main.services_text') }}
                </p>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card service-card">
                            <div class="card-body p-4">
                                <div class="service-icon">
                                    <img src="{{ '/storage/' . $service->image }}" alt="خدمة {{ $service->title }}"
                                        title="{{ $service->title }}" width="60" height="60" loading="lazy"
                                        class="mb-3" style="margin-top: 10px; margin-bottom: 25px;">
                                </div>
                                <h4 class="service-title"> {{ $service->title }}</h4>
                                <p> {{ $service->description }} .</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- How We Work Section - Updated -->

    <section id="how-we-work" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title"> {{ __('main.how_to_work') }}</h2>
                <p class="section-subtitle">{{ __('main.how_to_work_text') }}</p>
            </div>
            <div class="strategy-section">

                @foreach ($mechanisms as $mechanism)
                    <div class="strategy-item">
                        <div class="strategy-number">{{ $mechanism->id }}</div>
                        <div class="strategy-icon">
                            <img src="{{ '/storage/' . $mechanism->image }}" alt="{{ $mechanism->title }}"
                                title="{{ $mechanism->title }}" width="60" height="60" loading="lazy"
                                style="margin-top: 10px; margin-bottom: 25px;">
                        </div>
                        <div class="strategy-content">
                            <h4 class="strategy-title"> {{ $mechanism->title }}</h4>
                            <p class="strategy-description"> {{ $mechanism->description }}.</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- Clients Section - New -->

    <section id="clients" class="clients-section">
        <div class="container">
            <div class="clients-content">
                <div class="text-center mb-5">
                    <h2 class="clients-title">{{ __('main.clients') }}</h2>
                    <p class="clients-subtitle"> {{ __('main.clients_text') }}</p>
                    <p class="clients-subtitle"> {{ __('main.subsbcrib_client') }} </p>
                </div>

                <div class="clients-grid">

                    @foreach ($clients as $client)
                        <div class="client-item">
                            <div class="client-logo">
                                <img src="{{ '/storage/' . $client->logo }}" loading="lazy"
                                    style="width: 50px; height: 50px; margin-top: 10px; margin-bottom: 25px;"
                                    alt="">
                            </div>
                            <h4 class="client-name">{{ $client->name }}</h4>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- Client Stats Section - New -->
    <section id="client-stats" class="stats-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">إنجازاتنا</h2>

            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-number" data-target="{{ $clients_count }}">0</div>
                        <h4 class="stat-title"> {{ __('main.client_count') }}</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-camera-reels-fill"></i>
                        </div>
                        <div class="stat-number" data-target="{{ $projects_count }}">0</div>
                        <h4 class="stat-title"> {{ __('main.project_count') }}</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="stat-number" data-target="{{ $services_count }}">0</div>
                        <h4 class="stat-title">{{ __('main.service_count') }}</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Testimonials Section - New -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title"> {{ __('main.tallck_client') }} </h2>

            </div>
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-quote">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="testimonial-text">".{{ $testimonial->message }}"</p>
                            <div class="testimonial-author">
                                {{-- <img src="{{ asset('website/image/admin.png') }}" alt="عميل" class="author-img"> --}}
                                <div class="author-info">
                                    <h5> {{ $testimonial->name }}</h5>
                                    <p> {{ $testimonial->postion }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Campaigns Section - New -->

    <section id="campaigns" class="campaigns-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title"> {{ __('main.camapign_title') }}</h2>
                {{-- <p class="section-subtitle">نماذج من حملاتنا الناجحة التي حققت نتائج مبهرة</p> --}}
            </div>
            <div class="row">
                @foreach ($campaigns as $campaign)
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="campaign-card">

                            <div class="campaign-badge"> {{ $campaign->type }}</div>
                            <a href="#">
                                <img src="{{ asset('/storage/' . optional($campaign->images->first())->image) }}"
                                    alt="{{ $campaign->title }} " loading="lazy" class="campaign-img">
                            </a>
                            <div class="campaign-content">
                                <h3 class="campaign-title"> {{ $campaign->title }}</h3>
                                <p class="campaign-description">{{ Str::limit($campaign->description, 40) }}.</p>

                                <div class="campaign-client">

                                    <div>
                                        <div class="client-name">{{ $campaign->client_name }}</div>
                                        <div class="client-industry"> {{ $campaign->client_industry }}</div>
                                    </div>
                                </div>

                            </div>
                            @if ($campaign->results)
                                <div class="campaign-results">
                                    <div class="results-title">
                                        <i class="bi bi-graph-up"></i> النتائج المحققة
                                    </div>
                                    <ul class="results-list">
                                        @foreach ($campaign->results as $result)
                                            <li> {{ $result }}</li>
                                        @endforeach


                                    </ul>
                                </div>
                            @endif
                            <div class="campaign-stats">
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">{{ $campaign->ads_count }}</span>
                                    <span class="campaign-stat-label">إعلان</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">{{ $campaign->duration_days }}</span>
                                    <span class="campaign-stat-label">يوم</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">{{ $campaign->platforms_count }}</span>
                                    <span class="campaign-stat-label">منصات</span>
                                </div>
                            </div>

                        </div>



                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">{{ __('main.portfolio') }}</h2>
                <p class="section-subtitle"> {{ __('main.example_work') }}</p>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="{{ route('project.show', $project->id) }}">
                                <img src="{{ '/storage/' . $project->images->first()->image ?? '' }}"
                                    alt="مشروع {{ $project->title }}" title="{{ $project->title }}" loading="lazy"
                                    class="portfolio-img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info">
                                        <h4 class="portfolio-title"> {{ $project->title }}</h4>
                                        <p> {{ Str::limit($project->description, 20) }} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



    <!-- Tabs Navigation - Improved for Mobile -->




    <section id="portfolio" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">{{ __('main.portfolio') }}</h2>
                <p class="section-subtitle">{{ __('main.example_work') }}</p>
            </div>

            <!-- Tabs Navigation -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="portfolio-tabs-container">
                        <ul class="nav nav-pills justify-content-center" id="portfolioTabs" role="tablist">
                            <!-- تبويب الكل -->
                            <li class="nav-item">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="pill"
                                    data-bs-target="#all" type="button" role="tab">الكل</button>
                            </li>

                            <!-- تبويبات الخدمات -->
                            @foreach ($services as $service)
                                <li class="nav-item">
                                    <button class="nav-link" id="service-{{ $service->id }}-tab" data-bs-toggle="pill"
                                        data-bs-target="#service-{{ $service->id }}" type="button" role="tab">
                                        {{ $service->title }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tabs Content -->
            <div class="tab-content" id="portfolioTabsContent">

                {{-- تبويب الكل --}}
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 portfolio-item">
                                <a href="{{ route('project.show', $project->id) }}">
                                    <img src="{{ asset('storage/' . optional($project->images->first())->image) }}"
                                        alt="{{ $project->title }}" class="portfolio-img">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h4>{{ $project->title }}</h4>
                                            <p>{{ Str::limit($project->description, 40) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- تبويبات الخدمات --}}
                @foreach ($services as $service)
                    <div class="tab-pane fade" id="service-{{ $service->id }}" role="tabpanel"
                        aria-labelledby="service-{{ $service->id }}-tab">
                        <div class="row">
                            @forelse ($service->projects as $project)
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <a href="{{ route('project.show', $project->id) }}">
                                        <img src="{{ asset('storage/' . optional($project->images->first())->image) }}"
                                            alt="{{ $project->title }}" class="portfolio-img">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h4>{{ $project->title }}</h4>
                                                <p>{{ Str::limit($project->description, 40) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="text-center py-4">
                                    <p>لا توجد مشاريع لهذه الخدمة حالياً.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>








    <!-- Contact Section -->

    <section id="contact" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title"> {{ __('main.contact') }}</h2>
                <p class="section-subtitle"> {{ __('main.here_anwser') }} </p>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="contact-info">
                        <h4 class="mb-4"> {{ __('main.information_social') }}</h4>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h5>{{ __('main.address') }}</h5>
                                <p>{{ $seeting->address }}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h5>{{ __('main.phone') }}</h5>
                                <p dir="ltr">{{ $seeting->phone }}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h5> {{ __('main.Email') }}</h5>
                                <p>{{ $seeting->email }}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <h5>ساعات العمل</h5>
                                <p>{{ __('main.from_to') }}</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5> {{ __('main.fllow') }}</h5>
                            {{-- <div class="social-icons">
                                <a href="{{ $seeting->facebbok }}"><i class="bi bi-facebook"></i></a>
                                <a href="{{ $seeting->twitter }}"><i class="bi bi-twitter"></i></a>
                                <a href="{{ $seeting->instagram }}"><i class="bi bi-instagram"></i></a>
                                <a href="{{ $seeting->whatsapp }}"><i class="bi bi-whatsapp"></i></a>
                                <a href="{{ $seeting->facebbok }}"><i class="bi bi-linkedin"></i></a>






                            </div> --}}

                            <div class="contact-buttons d-flex justify-content-center gap-3 flex-wrap">
                                <a href="{{ $seeting->facebook }}" class="contact-btn facebook" target="_blank">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="{{ $seeting->tweeter }}" class="contact-btn twitter" target="_blank">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="{{ $seeting->linkedin }}" class="contact-btn linkedin" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="{{ $seeting->whatsapp }}" class="contact-btn whatsapp" target="_blank">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="{{ $seeting->instagram }}" class="contact-btn instagram" target="_blank">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4"> {{ __('main.send_me') }}</h4>
                            <form action="{{ route('store.contact-form') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="full_name" class="form-control"
                                            placeholder="الاسم الكامل" required />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="البريد الإلكتروني" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="رقم الهاتف" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select name="service_id" class="form-control">
                                            @foreach ($services as $service)
                                                <option value="">اختر الخدمة </option>
                                                <option value="{{ $service->id }}">

                                                    {{ $service->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="اكتب رسالتك هنا"></textarea>
                                </div>
                                <!-- Using custom button class -->

                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('main.send_message') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section id="portfolio" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">{{ __('main.portfolio') }}</h2>
                <p class="section-subtitle"> {{ __('main.example_work') }}</p>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <a href="{{ route('project.show', $project->id) }}">
                            <img src="{{ '/storage/' . ($project->images->first())?->image }}"
                                alt="مشروع {{ $project->title }}" title="{{ $project->title }}" loading="lazy"
                                class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title"> {{ $project->title }}</h4>
                                <p> {{ Str::limit($project->description, 20) }} </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section> --}}
@endsection
