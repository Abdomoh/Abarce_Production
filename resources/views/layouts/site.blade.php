<!DOCTYPE html>
<html lang="ar" dir="rtl">
{{--
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Abarace Production| الرئيسية</title>
    <meta name="description" content="شركة {{ $seeting->name }} تقدم خدمات {{ __('main.services') }} و {{ __('main.portfolio') }} بتميز وجودة عالية. تواصل معنا الآن.">
    <meta name="keywords" content="Abarce, {{ $seeting->name }}, إنتاج, تصوير, مونتاج, خدمات إعلانية, تصميم, تسويق">
    <meta name="author" content="{{ $seeting->name }}">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="رمز_التحقق_من_GSC" />

    <link rel="icon" href="{{ URL::asset('/storage/'.$seeting->logo) }}" type="image/x-icon">
<!-- =======================
     Favicon & Logo Schema
======================= -->
<!-- Favicon (icon in browser tab) -->
<link rel="icon" href="{{ asset('storage/'.$seeting->logo) }}" sizes="32x32" type="image/png">
<link rel="shortcut icon" href="{{ asset('storage/'.$seeting->logo) }}" type="image/x-icon">


    <!-- Open Graph (Facebook) -->
    <meta property="og:title" content="Abarce Production | الرئيسية">
    <meta property="og:description" content="تعرف على خدمات {{ $seeting->name }} في مجال الإنتاج والتسويق.">
    <meta property="og:image" content="{{ URL::asset('/storage/'.$seeting->logo) }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Abarce Production">
    <meta name="twitter:description" content="خدمات {{ __('main.services') }} و {{ __('main.portfolio') }} من {{ $seeting->name }}">
    <meta name="twitter:image" content="{{ URL::asset('/storage/'.$seeting->logo) }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Fonts & Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Logo structured data for Google -->
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('storage/'.$seeting->logo) }}"
    }
</script>
</head>



 --}}



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 🔹 عنوان الصفحة (يظهر في نتائج البحث والتبويب) -->
    <title>Abarce Production | شركة أبرسي للإنتاج الإعلامي</title>

    <!-- 🔹 وسم وصف الصفحة لمحركات البحث -->
    <meta name="description"
        content="Abarce Production هي شركة إنتاج إعلامي تقدم خدمات التصوير، المونتاج، التصميم، والتسويق الإبداعي بجودة عالية. تواصل معنا الآن لتنفيذ مشروعك القادم.">

    <!-- 🔹 الكلمات المفتاحية (ليست ضرورية جداً الآن، لكنها مفيدة بشكل خفيف) -->
    <meta name="keywords" content="Abarce Production, إنتاج إعلامي, تصوير, مونتاج, تصميم, تسويق, أبرسي, abarceproduction">

    <!-- 🔹 صاحب الموقع -->
    <meta name="author" content="Abarce Production">

    <!-- 🔹 إشارة لمحركات البحث بفهرسة الصفحة -->
    <meta name="robots" content="index, follow">

    <!-- 🔹 تأكيد ملكية الموقع في Google Search Console -->
    <meta name="google-site-verification" content="رمز_التحقق_من_GSC" />

    <!-- 🔹 أيقونة الموقع (favicon) -->
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $seeting->logo) }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('storage/' . $seeting->logo) }}">
    <link rel="shortcut icon" href="{{ asset('storage/' . $seeting->logo) }}" type="image/x-icon">

    <!-- 🔹 Open Graph (للمشاركة على فيسبوك وواتساب) -->
    <meta property="og:site_name" content="Abarce Production">
    <meta property="og:title" content="Abarce Production | شركة أبرسي للإنتاج الإعلامي">
    <meta property="og:description" content="تعرف على خدماتنا في مجالات الإنتاج والتسويق والتصميم.">
    <meta property="og:image" content="{{ asset('storage/' . $seeting->logo) }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">

    <!-- 🔹 Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Abarce Production">
    <meta name="twitter:description" content="خدمات إنتاج وتصميم وتسويق متكاملة من Abarce Production.">
    <meta name="twitter:image" content="{{ asset('storage/' . $seeting->logo) }}">

    <!-- 🔹 Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- 🔹 Structured Data (Google Rich Results) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Abarce Production",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('storage/'.$seeting->logo) }}"
    }
    </script>

    <!-- 🔹 CSS & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<body>
    @yield('content')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation" aria-label="Main Navigation">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}#home" title="{{ $seeting->name }}">
                @if ($seeting->logo)
                    <img src="{{ asset('/storage/'.$seeting->logo) }}" alt="{{ $seeting->name }} Logo"
                        title="{{ $seeting->name }}" width="40" height="40" loading="lazy">
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active"
                            href="{{ url('/') }}#home">{{ __('main.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">{{ __('main.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">{{ __('main.services') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#campaigns">{{ __('main.campaigns') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#clients">{{ __('main.clients') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">{{ __('main.portfolio') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">{{ __('main.contact') }}</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- WhatsApp Icon -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/249911390896?text=مرحباً، أود الاستفسار عن خدماتكم" class="whatsapp-link" target="_blank"
            aria-label="تواصل عبر واتساب">
            <div class="whatsapp-icon"><i class="bi bi-whatsapp"></i></div>
        </a>
        <div class="whatsapp-tooltip">{{ __('main.whatsapp') }}</div>
    </div>

    <!-- Footer -->



    <!-- Footer - Improved with Latest Projects -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="footer-logo">
                        <img src="{{ URL::asset('/storage/' . $seeting->logo) }}" alt="{{ $seeting->name }} Logo"
                            title="{{ $seeting->name }}" width="40" height="40"
                            loading="lazy">{{ $seeting->name }}
                    </div>
                    <p>{{ $seeting->title }}</p>
                    </p>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-3"> {{ __('main.quick_link') }}</h5>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link active"
                                href="{{ url('/') }}#home">{{ __('main.home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">{{ __('main.about') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">{{ __('main.services') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#clients">{{ __('main.clients') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">{{ __('main.portfolio') }}</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#contact">{{ __('main.contact') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-3">{{ __('main.publisher') }} </h5>
                    <p> {{ __('main.subscrip') }}.</p>
                    <form class="newsletter-form mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="بريدك الإلكتروني">
                            <button class="btn" type="button">اشترك</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="footer-projects">
                        <h5 class="footer-projects-title">
                            <i class="bi bi-star-fill"></i> {{ __('main.last_project') }}
                        </h5>
                        @foreach ($latest_projects as $project)
                            <div class="footer-project-item">
                                <img src="{{asset('/storage/'. optional($project->images->first())->image) }}" alt="مشروع 3"
                                    class="footer-project-img">
                                <div class="footer-project-content">
                                    <h6 class="footer-project-title"> {{ $project->title }}</h6>
                                    <p class="footer-project-date">{{ $project->created_at->format('y-m-d') }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="copyright">
                <p><a href="https://wa.link/yietrv" target="_blank" rel="nofollow">Abdalmjed   </a> تم التطوير بواسطة  &copy; 2025
                    {{ $seeting->name }}. جميع الحقوق محفوظة.</p>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap JS -->

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
        <script src="{{ asset('website/js/app.js') }}" defer></script>
    </footer>
</body>

</html>


{{--
    <footer>
        <div class="container">
            <div class="row">
                <!-- ... نفس الأقسام ولكن أضف alt للصور في المشاريع -->
                @foreach ($latest_projects as $project)
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{ route('project.show',$project->id) }}">
                                <img src="{{ '/storage/'.$project->images->first()->image }}"
                                     alt="مشروع {{ $project->title }}"
                                     title="{{ $project->title }}"
                                     loading="lazy">
                            </a>
                        </div>
                        <div class="project-info">
                            <h6>{{ $project->title }}</h6>
                            <p>{{ Str::limit($project->description, 20) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="copyright">
            <p><a href="https://abdosh.softteech.com/" target="_blank" rel="nofollow">Abdalmjed</a> &copy; 2025 {{ $seeting->name }}. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="{{ asset('website/js/app.js') }}" defer></script>
</body>

</html> --}}
