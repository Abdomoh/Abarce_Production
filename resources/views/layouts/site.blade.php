

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $seeting->name }} | الرئيسية</title>
    <meta name="description" content="شركة {{ $seeting->name }} تقدم خدمات {{ __('main.services') }} و {{ __('main.portfolio') }} بتميز وجودة عالية. تواصل معنا الآن.">
    <meta name="keywords" content="Abarce, {{ $seeting->name }}, إنتاج, تصوير, مونتاج, خدمات إعلانية, تصميم, تسويق">
    <meta name="author" content="{{ $seeting->name }}">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="{{ URL::asset('/storage/'.$seeting->logo) }}" type="image/x-icon">

    <!-- Open Graph (Facebook) -->
    <meta property="og:title" content="{{ $seeting->name }} | الرئيسية">
    <meta property="og:description" content="تعرف على خدمات {{ $seeting->name }} في مجال الإنتاج والتسويق.">
    <meta property="og:image" content="{{ URL::asset('/storage/'.$seeting->logo) }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seeting->name }}">
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
</head>

<body>
    @yield('content')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation" aria-label="Main Navigation">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}#home" title="{{ $seeting->name }}">
                <img src="{{ URL::asset('/storage/'.$seeting->logo) }}"
                     alt="{{ $seeting->name }} Logo"
                     title="{{ $seeting->name }}"
                     width="40" height="40" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}#home">{{ __('main.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">{{ __('main.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">{{ __('main.services') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#clients">{{ __('main.clients') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">{{ __('main.portfolio') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">{{ __('main.contact') }}</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- WhatsApp Icon -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/249911390896?text=مرحباً، أود الاستفسار عن خدماتكم" class="whatsapp-link" target="_blank" aria-label="تواصل عبر واتساب">
            <div class="whatsapp-icon"><i class="bi bi-whatsapp"></i></div>
        </a>
        <div class="whatsapp-tooltip">{{ __('main.whatsapp') }}</div>
    </div>

    <!-- Footer -->
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

</html>
