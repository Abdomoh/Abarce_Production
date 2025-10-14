<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abarce Production - شركة أباريس للإنتاج</title>

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
            <a class="navbar-brand" href="#">
                <!-- <i class="bi bi-camera-reels-fill"></i>--> <img
                    src="{{ URL::asset('website/image/abarce/logo/5.jpg') }}" style="width: 30px;height: 30px;"
                    alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">{{ __('main.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">خدماتنا</a>
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
                            <i class="bi bi-camera-reels-fill"></i> Abarce Production
                        </div>
                        <p>
                            شركة رائدة في مجال الإنتاج الإعلامي والفني، نقدم حلولاً إبداعية
                            تلامس قلوب الجمهور وتحقق أهداف عملائنا.
                        </p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5><i class="bi bi-link-45deg"></i> روابط سريعة</h5>
                        <ul class="footer-links">
                            <li><a href="#home">الرئيسية</a></li>
                            <li><a href="#about">من نحن</a></li>
                            <li><a href="#services">خدماتنا</a></li>
                            <li><a href="#portfolio">أعمالنا</a></li>
                            <li><a href="#contact">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5><i class="bi bi-geo-alt"></i> معلومات التواصل</h5>
                        <div class="footer-contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>شارع الملك فهد، الرياض، المملكة العربية السعودية</span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <span dir="ltr">+249 911 390 896</span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <span>AbarceProduction@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-projects">
                        <h5><i class="bi bi-collection-play"></i> آخر المشاريع</h5>
                        <div class="project-item">
                            <div class="project-img">
                                <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                                    alt="مشروع" />
                            </div>
                            <div class="project-info">
                                <h6>فيلم وثائقي</h6>
                                <p>التراث الثقافي</p>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                                    alt="مشروع" />
                            </div>
                            <div class="project-info">
                                <h6>حملة إعلانية</h6>
                                <p>منتج جديد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-widget newsletter-widget">
                        <h5><i class="bi bi-envelope"></i> النشرة البريدية</h5>
                        <p>اشترك في نشرتنا البريدية للحصول على آخر أخبارنا وعروضنا.</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="بريدك الإلكتروني" />
                            <button type="button"><i class="bi bi-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 Abarce Production. جميع الحقوق محفوظة.</p>
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
