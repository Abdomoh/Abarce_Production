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
                            <i class="bi bi-star-fill"></i> شركة رائدة في الإنتاج الإعلامي
                        </div>
                        <h1 class="hero-title">abarce Production </h1>
                        <p class="hero-subtitle">
                            لانو للكل طريقة حكاية ,نحن هنــــــــــــا
                        </p>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-hero"> اطلب الان</a>
                            <a href="#portfolio" class="btn btn-secondary-hero">شاهد أعمالنا</a>

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
                    <img src="{{ $about->image ? asset('/storage/'.$about->image) : asset('website/image/abarce/about.jpg') }}"
                        alt="من نحن" class="img-fluid rounded-3 shadow" />
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
                                    <h5>جودة عالية</h5>
                                    <p>معايير احترافية في كل مشروع</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="service-icon">
                                    <i class="bi bi-lightbulb-fill"></i>
                                </div>
                                <div>
                                    <h5>إبداع لا حدود له</h5>
                                    <p>أفكار مبتكرة تناسب احتياجاتك</p>
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
                              <img src="{{  '/storage/'.$service->image }}"
                              style="width: 50px; height: 50px; margin-top: 10px; margin-bottom: 25px;" alt="">

                                <h4 class="service-title"> {{$service->title }}</h4>
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
                <h2 class="section-title">كيف نعمل</h2>
                <p class="section-subtitle">استراتيجيتنا الرقمية لتحقيق أهدافك</p>
            </div>
            <div class="strategy-section">
                <div class="strategy-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="strategy-number">1</div>
                    <div class="strategy-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">بحث السوق واستراتيجية التسويق</h4>
                        <p class="strategy-description">
                            نقوم بتحليل السوق والمنافسين لوضع استراتيجية تسويقية فعالة تناسب
                            أهدافك وتصل إلى جمهورك المستهدف.
                        </p>
                    </div>
                </div>

                <div class="strategy-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="strategy-number">2</div>
                    <div class="strategy-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">خطة المحتوى</h4>
                        <p class="strategy-description">
                            نصمم خطة محتوى متكاملة تشمل جميع القنوات والمنصات لضمان وصول
                            رسالتك بشكل احترافي ومؤثر.
                        </p>
                    </div>
                </div>

                <div class="strategy-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="strategy-number">3</div>
                    <div class="strategy-icon">
                        <i class="bi bi-share"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">وسائل التواصل الاجتماعي والاتصال</h4>
                        <p class="strategy-description">
                            ندير حساباتك على منصات التواصل الاجتماعي ونواصل مع جمهورك
                            بفعالية لبناء علاقات قوية.
                        </p>
                    </div>
                </div>

                <div class="strategy-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="strategy-number">4</div>
                    <div class="strategy-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">إدارة المجتمع</h4>
                        <p class="strategy-description">
                            نبني مجتمعًا نشطًا حول علامتك التجارية من خلال التفاعل المستمر
                            والاستجابة لجمهورنا.
                        </p>
                    </div>
                </div>

                <div class="strategy-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="strategy-number">5</div>
                    <div class="strategy-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">المشاركة والعملاء المحتملين</h4>
                        <p class="strategy-description">
                            نزيد من تفاعل الجمهور ونحولهم إلى عملاء محتملين من خلال حملات
                            تسويقية مبتكرة.
                        </p>
                    </div>
                </div>

                <div class="strategy-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="strategy-number">6</div>
                    <div class="strategy-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">استراتيجية المحتوى الرقمي</h4>
                        <p class="strategy-description">
                            نطور استراتيجية محتوى رقمية شاملة تضمن لك التميز في السوق وتحقيق
                            أهدافك التسويقية.
                        </p>
                    </div>
                </div>
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
                                      <img src="{{  '/storage/'.$client->logo }}"
                              style="width: 50px; height: 50px; margin-top: 10px; margin-bottom: 25px;" alt="">
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
                        <h3 class="text-center mb-4">{{ __('main.tallck_client') }}  </h3>
                        <div class="row">
                           @foreach ($testimonials as $testimonial )
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
                                            <h5>              {{ $testimonial->name }}</h5>
                                            <p>               {{ $testimonial->postion }}</p>
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
                <h2 class="section-title">أعمالنا</h2>
                <p class="section-subtitle">نماذج من إبداعاتنا السابقة</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100">
                        <img src="image/profile/1.jpg" alt="مشروع 1" class="portfolio-img" />
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">فيلم وثائقي</h4>
                                <p>إنتاج فيلم وثائقي عن التراث الثقافي</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="image/profile/2.jpg" alt="مشروع 2" class="portfolio-img" />
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">حملة إعلانية</h4>
                                <p>حملة إعلانية لمنتج تجاري جديد</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="image/profile/3.jpg" alt="مشروع 3" class="portfolio-img" />
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">برنامج تلفزيوني</h4>
                                <p>برنامج حواري أسبوعي ناجح</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="image/profile/4.jpg" alt="مشروع 4" class="portfolio-img" />
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">فيديو كليب</h4>
                                <p>إنتاج فيديو كليب لفنان مشهور</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="500">
                        <img src="image/profile/5.jpg" alt="مشروع 5" class="portfolio-img" />
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">تغطية مؤتمر</h4>
                                <p>تغطية شاملة لمؤتمر دولي</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="600">
                        <img src="image/profile/6.jpg" alt="مشروع 6" class="portfolio-img" />
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">فيلم روائي</h4>
                                <p>إنتاج فيلم روائي قصير</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">اتصل بنا</h2>
                <p class="section-subtitle">نحن هنا لخدمتك والإجابة على استفساراتك</p>
            </div>
            <div class="row">

                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm" data-aos="fade-left">
                        <div class="card-body p-4">
                            <h4 class="mb-4">أرسل لنا رسالة</h4>
                            <form action="{{ route('store.contact-form') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="full_name" class="form-control" placeholder="الاسم الكامل" required />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email"  name="email" class="form-control" placeholder="البريد الإلكتروني"
                                            required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="tel" name="phone" class="form-control" placeholder="رقم الهاتف" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select name="service_id" class="form-control">
                                            @foreach ($services as $service)
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
                                    إرسال الرسالة
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <div class="contact-info" data-aos="fade-right">
                        <h4 class="mb-4">معلومات التواصل</h4>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h5>العنوان</h5>
                                <p>شارع الملك فهد، الرياض، المملكة العربية السعودية</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h5>الهاتف</h5>
                                <p dir="ltr">+249 911 390 896</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h5>البريد الإلكتروني</h5>
                                <p>AbarceProduction@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <h5>ساعات العمل</h5>
                                <p>الأحد - الخميس: 9:00 ص - 6:00 م</p>
                                <p>الجمعة - السبت: مغلق</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5>تابعنا على</h5>
                            <div class="social-icons">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-youtube"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
