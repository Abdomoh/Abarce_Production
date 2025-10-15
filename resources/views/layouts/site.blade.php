<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $seeting->name }}</title>
<link rel="icon" href="{{ URL::asset('/storage/'.$seeting->logo) }}" type="image/x-icon" >

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />


</head>



<body>
    @yield('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}#home">
                <!-- <i class="bi bi-camera-reels-fill"></i>--> <img
                    src="{{ URL::asset('/storage/'.$seeting->logo) }}" style="width: 40px;height: 40px;"
                    alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}#home">{{ __('main.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">{{ __('main.about') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">{{ __('main.services') }}</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="#how-we-work">كيف نعمل</a>
          </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">{{ __('main.clients') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">{{ __('main.portfolio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">{{ __('main.contact') }} </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Footer - NEW DESIGN -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <i class="bi bi-camera-reels-fill"></i> {{ $seeting->name }}
                        </div>
                        <p>

                        </p>
                        <div class="social-icons">
                            <a href="{{ $seeting->facebbok }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $seeting->twitter }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ $seeting->instagram }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ $seeting->whatsapp }}"><i class="bi bi-whatsapp"></i></a>
                            <a href="{{ $seeting->facebbok }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5><i class="bi bi-link-45deg"></i> {{ __('main.quick_link') }} </h5>
                        <ul class="footer-links">
                            <li><a href="{{ url('/') }}#home">{{ __('main.home') }}</a></li>
                            <li><a href="#about">{{ __('main.about') }} </a></li>
                            <li><a  href="#services">{{ __('main.services') }}</a></li>
                            <li><a href="#clients">{{ __('main.clients') }}</a></li>
                            <li><a href="#contact">{{ __('main.contact') }} </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5><i class="bi bi-geo-alt"></i>  {{ __('main.information_social') }}</h5>
                        <div class="footer-contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>   {{ $seeting->address }}</span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <span dir="ltr">+{{ $seeting->phone }}</span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <span>{{ $seeting->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-projects">
                        <h5><i class="bi bi-collection-play"></i> {{ __('main.last_project') }} </h5>
                        @foreach ($projects as $project)
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ '/storage/'.$project->images->first()->image }}"
                                  loading="lazy"  alt="{{ $project->title }}" />
                            </div>
                            <div class="project-info">
                                <h6>{{ $project->title }} </h6>
                                <p> {{ Str::limit($project->description,20) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-widget newsletter-widget">
                        <h5><i class="bi bi-envelope"></i>  {{ __('main.publisher') }}</h5>
                        <p>{{ __('main.subscrip') }}</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="بريدك الإلكتروني" />
                            <button type="button"><i class="bi bi-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p> <a href="https://abdosh.softteech.com/" target="_blank">Abdalmjed</a> &copy; 2025 Abarce Production. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('website/js/app.js') }}"></script>

</body>

</html>
