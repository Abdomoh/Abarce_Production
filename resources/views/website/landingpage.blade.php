@extends('layouts.site')
@section('content')
    <!-- Hero Section - Image as Background -->
    <section id="home" class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        <div class="hero-shape"></div>
        <div class="hero-shape-2"></div>

        <div class="container">
            <div class="hero-content">
                <!-- Single column for text content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-badge">
                            <i class="bi bi-star-fill"></i> {{ __('main.fovirt_word') }}
                        </div>
                        <h1 class="hero-title">{{ $seeting->name }} </h1>
                        <p class="hero-subtitle">
                            {{ __('main.logo_abarce') }}
                        </p>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-hero"> {{ __('main.delivery') }}</a>
                            <a href="#portfolio" class="btn btn-secondary-hero"> {{ __('main.witch_work') }}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img src="{{ $about->image ? asset('/storage/' . $about->image) : asset('website/image/abarce/about.jpg') }}"
                        alt="من نحن - {{ $seeting->name }}" title="{{ $about->title }}" loading="lazy"
                        class="img-fluid rounded-3 shadow" />
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">{{ __('main.about') }} </h2>
                    <p class="section-subtitle">
                        {{ $about->title }}
                    </p>
                    <p>
                        {{ $about->sub_title }}
                    </p>

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
                        <div class="card service-card" data-aos="fade-up" data-aos-delay="600">
                            <div class="card-body p-4">
                                <img src="{{ '/storage/' . $service->image }}" alt="خدمة {{ $service->title }}"
                                    title="{{ $service->title }}" width="60" height="60" loading="lazy"
                                    class="mb-3" style="margin-top: 10px; margin-bottom: 25px;">

                                <h4 class="service-title"> {{ $service->title }}</h4>
                                <p>
                                    {{ $service->description }}
                                </p>
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
                    <div class="strategy-item" data-aos="fade-up" data-aos-delay="500">


                        <div class="strategy-number">{{ $mechanism->id }}</div>
                        <div class="strategy-icon">


                            <img src="{{ '/storage/' . $mechanism->image }}" alt="{{ $mechanism->title }}"
                                title="{{ $mechanism->title }}" width="60" height="60" loading="lazy"
                                style="margin-top: 10px; margin-bottom: 25px;">
                        </div>
                        <div class="strategy-content">
                            <h4 class="strategy-title"> {{ $mechanism->title }}</h4>
                            <p class="strategy-description">
                                {{ $mechanism->description }}.
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Clients Section - Enhanced -->
    <section id="clients" class="clients-section">
        <div class="container">
            <div class="clients-content">
                <div class="text-center mb-5">
                    <h2 class="clients-title" data-aos="fade-up">{{ __('main.clients') }}</h2>
                    <p class="clients-subtitle" data-aos="fade-up" data-aos-delay="100">
                        {{ __('main.clients_text') }}
                    </p>
                    <p class="clients-subtitle" data-aos="fade-up" data-aos-delay="200">
                        {{ __('main.subsbcrib_client') }}
                    </p>
                </div>

                <div class="clients-container">
                    <div class="clients-grid">

                        @foreach ($clients as $client)
                            <div class="client-item" data-aos="zoom-in" data-aos-delay="800">
                                <div class="client-logo">
                                    <div class="client-logo-inner">
                                        <img src="{{ '/storage/' . $client->logo }}" loading="lazy"
                                            style="width: 50px; height: 50px; margin-top: 10px; margin-bottom: 25px;"
                                            alt="">
                                    </div>
                                </div>
                                <h4 class="client-name">{{ $client->name }}</h4>

                            </div>
                        @endforeach
                    </div>

                    <!-- Client Stats -->
                    <div class="client-stats" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-item">
                            <div class="stat-number" data-count="{{ $clients_count }}">0</div>
                            <div class="stat-label"> {{ __('main.client_count') }}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="{{ $projects_count }}">0</div>
                            <div class="stat-label">{{ __('main.project_count') }}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="{{ $services_count }}">0</div>
                            <div class="stat-label">{{ __('main.service_count') }}</div>
                        </div>

                    </div>

                    <!-- Testimonials -->
                    <div class="testimonials-section" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="text-center mb-4">{{ __('main.tallck_client') }} </h3>
                        <div class="row">
                            @foreach ($testimonials as $testimonial)
                                <div class="col-lg-6 mb-4">
                                    <div class="testimonial-item">
                                        <div class="testimonial-quote">
                                            <i class="bi bi-quote"></i>
                                        </div>
                                        <p class="testimonial-text">
                                            {{ $testimonial->message }}
                                        </p>
                                        <div class="testimonial-author">
                                            <div class="author-avatar">
                                                <i class="bi bi-person"></i>
                                            </div>
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
                </div>
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
                        <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="600">
                            <a href="{{ route('project.show', $project->id) }}">
                                <img src="{{ '/storage/' . $project->images->first()->image }}"
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

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title"> {{ __('main.contact') }}</h2>
                <p class="section-subtitle"> {{ __('main.here_anwser') }} </p>
            </div>
            <div class="row">

                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm" data-aos="fade-left">
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
                                <button type="submit" class="btn btn-custom-accent w-100">
                                    {{ __('main.send_message') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <div class="contact-info" data-aos="fade-right">
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
                                <h5> </h5>
                                <p>{{ __('main.from_to') }}</p>

                            </div>
                        </div>
                        <div class="mt-4">
                            <h5> {{ __('main.fllow') }}</h5>
                            <div class="social-icons">
                                <a href="{{ $seeting->facebbok }}"><i class="bi bi-facebook"></i></a>
                                <a href="{{ $seeting->twitter }}"><i class="bi bi-twitter"></i></a>
                                <a href="{{ $seeting->instagram }}"><i class="bi bi-instagram"></i></a>
                                <a href="{{ $seeting->whatsapp }}"><i class="bi bi-whatsapp"></i></a>
                                <a href="{{ $seeting->facebbok }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
