<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abarce Production - شركة أباريس للإنتاج</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: rgba(165, 40, 36, 0.9);
            --secondary-color: rgba(10, 9, 7, 0.85);
            --light-color: #f8f5f2;
            --dark-color: #212529;
            --primary-solid: #a52824;
            --secondary-solid: #0a0907;
            --primary-hover: #83221d;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            color: var(--dark-color);
        }

        /* Navbar Styles */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-solid) !important;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-solid) !important;
        }

        .nav-link.active {
            color: var(--primary-solid) !important;
            font-weight: 700;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-solid), var(--primary-hover));
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
        }

        .btn-hero {
            background-color: white;
            color: var(--primary-solid);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.4s;
            animation-fill-mode: both;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            color: var(--primary-solid);
        }

        /* Section Styles */
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--secondary-solid);
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 60px;
            height: 4px;
            background-color: var(--primary-solid);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 50px;
        }

        /* Service Cards */
        .service-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--primary-solid);
            margin-bottom: 20px;
        }

        .service-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* How We Work Section - Updated */
        .strategy-section {
            background: linear-gradient(135deg, #fff, var(--light-color));
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .strategy-item {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .strategy-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .strategy-number {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 40px;
            height: 40px;
            background: var(--primary-solid);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            z-index: 2;
        }

        .strategy-icon {
            width: 80px;
            height: 80px;
            background: rgba(165, 40, 36, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 25px;
            flex-shrink: 0;
        }

        .strategy-icon i {
            font-size: 2.5rem;
            color: var(--primary-solid);
        }

        .strategy-content {
            flex-grow: 1;
        }

        .strategy-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary-solid);
        }

        .strategy-description {
            color: #6c757d;
            margin-bottom: 0;
        }

        .strategy-item::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(165, 40, 36, 0.05), transparent);
            border-radius: 0 0 15px 0;
        }

        /* Clients Section - New */
        .clients-section {
            background: linear-gradient(135deg, var(--primary-solid), var(--primary-hover));
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .clients-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></svg>');
            opacity: 0.3;
        }

        .clients-content {
            position: relative;
            z-index: 2;
        }

        .clients-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .clients-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 60px;
            height: 4px;
            background-color: white;
        }

        .clients-subtitle {
            font-size: 1.1rem;
            margin-bottom: 50px;
            opacity: 0.9;
        }

        .clients-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .client-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .client-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .client-logo {
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .client-logo i {
            font-size: 3rem;
            color: white;
        }

        .client-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .client-type {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .special-logo {
            position: relative;
        }

        .special-logo::after {
            content: '✈️';
            position: absolute;
            top: -10px;
            left: -10px;
            font-size: 1.2rem;
        }

        /* Client Stats Section - New */
        .stats-section {
            background-color: var(--light-color);
            padding: 60px 0;
            position: relative;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-solid), var(--primary-hover));
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary-solid);
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-solid);
            margin-bottom: 10px;
        }

        .stat-title {
            font-size: 1.1rem;
            color: #6c757d;
        }

        /* Testimonials Section - New */
        .testimonials-section {
            padding: 80px 0;
            background: white;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .testimonial-quote {
            position: absolute;
            top: -15px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: var(--primary-solid);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .testimonial-text {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
            font-style: italic;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 15px;
            border: 3px solid var(--light-color);
        }

        .author-info h5 {
            margin-bottom: 5px;
            font-size: 1.1rem;
            color: var(--secondary-solid);
        }

        .author-info p {
            margin-bottom: 0;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .testimonial-rating {
            color: #ffc107;
            margin-bottom: 15px;
        }

        /* Portfolio */
        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .portfolio-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(165, 40, 36, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        .portfolio-info {
            color: white;
            text-align: center;
            padding: 20px;
        }

        .portfolio-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Contact Section */
        .contact-info {
            background-color: var(--light-color);
            border-radius: 15px;
            padding: 30px;
            height: 100%;
        }

        .contact-item {
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary-solid);
            margin-left: 15px;
            width: 40px;
            text-align: center;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-solid);
            border-color: var(--primary-solid);
            color: white;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(165, 40, 36, 0.3);
            color: white;
        }

        .btn-outline-primary {
            color: var(--primary-solid);
            border-color: var(--primary-solid);
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-solid);
            border-color: var(--primary-solid);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(165, 40, 36, 0.3);
        }

        /* Footer - Improved */
        footer {
            background: linear-gradient(135deg, var(--secondary-solid), #1a1815);
            color: white;
            padding: 70px 0 20px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-solid), var(--primary-hover));
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
            display: flex;
            align-items: center;
        }

        .footer-logo i {
            color: var(--primary-solid);
            margin-left: 10px;
        }

        .social-icons a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.2rem;
            margin-left: 15px;
            transition: all 0.3s ease;
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .social-icons a:hover {
            color: white;
            background-color: var(--primary-solid);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(165, 40, 36, 0.3);
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-solid);
            transition: width 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
            padding-right: 5px;
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        .newsletter-form {
            position: relative;
        }

        .newsletter-form .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding-right: 45px;
            border-radius: 50px;
        }

        .newsletter-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .newsletter-form .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border-color: var(--primary-solid);
            box-shadow: 0 0 0 0.25rem rgba(165, 40, 36, 0.25);
            color: white;
        }

        .newsletter-form .btn {
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            background-color: var(--primary-solid);
            border-color: var(--primary-solid);
            border-radius: 50px;
            padding: 6px 15px;
            transition: all 0.3s ease;
        }

        .newsletter-form .btn:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-50%) scale(1.05);
        }

        /* Latest Projects in Footer */
        .footer-projects {
            margin-top: 20px;
        }

        .footer-project-item {
            display: flex;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 8px;
        }

        .footer-project-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(-5px);
        }

        .footer-project-img {
            width: 60px;
            height: 60px;
            border-radius: 6px;
            object-fit: cover;
            margin-left: 12px;
            flex-shrink: 0;
        }

        .footer-project-content {
            flex-grow: 1;
        }

        .footer-project-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 4px;
            color: white;
            transition: color 0.3s ease;
        }

        .footer-project-item:hover .footer-project-title {
            color: var(--primary-solid);
        }

        .footer-project-date {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .footer-projects-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: white;
            display: flex;
            align-items: center;
        }

        .footer-projects-title i {
            color: var(--primary-solid);
            margin-left: 8px;
        }

        .copyright {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .clients-title {
                font-size: 2rem;
            }

            .portfolio-img {
                height: 200px;
            }

            .strategy-item {
                flex-direction: column;
                text-align: center;
            }

            .strategy-icon {
                margin-left: 0;
                margin-bottom: 20px;
            }

            .strategy-number {
                top: 10px;
                left: 10px;
                width: 30px;
                height: 30px;
                font-size: 1rem;
            }

            .clients-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }

            .footer-logo {
                font-size: 1.5rem;
            }

            .social-icons a {
                width: 35px;
                height: 35px;
                line-height: 35px;
                font-size: 1rem;
                margin-left: 10px;
            }

            .footer-project-img {
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-camera-reels-fill"></i> Abarce Production
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-we-work">كيف نعمل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">عملاؤنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">اتصل بنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">شركة أباريس للإنتاج</h1>
                        <p class="hero-subtitle">نحول أفكارك إلى واقع ملموس بإبداع واحترافية</p>
                        <a href="#services" class="btn btn-hero">اكتشف خدماتنا</a>
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
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="من نحن" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">من نحن</h2>
                    <p class="section-subtitle">شركة رائدة في مجال الإنتاج الإعلامي والفني</p>
                    <p>تأسست شركة أباريس للإنتاج لتكون شريكًا موثوقًا في رحلتك الإبداعية. نقدم حلولاً متكاملة في مجال الإنتاج التلفزيوني، السينمائي، والإعلاني بجودة عالية وإبداع لا حدود له.</p>
                    <p>فريقنا من المحترفين يمتلك خبرة واسعة في تحويل الرؤى إلى منتجات إعلامية مؤثرة تلامس قلوب الجمهور وتحقق أهداف عملائنا.</p>
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

    <!-- How We Work Section - Updated -->
    <section id="how-we-work" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">كيف نعمل</h2>
                <p class="section-subtitle">استراتيجيتنا الرقمية لتحقيق أهدافك</p>
            </div>
            <div class="strategy-section">
                <div class="strategy-item">
                    <div class="strategy-number">1</div>
                    <div class="strategy-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">بحث السوق واستراتيجية التسويق</h4>
                        <p class="strategy-description">نقوم بتحليل السوق والمنافسين لوضع استراتيجية تسويقية فعالة تناسب أهدافك وتصل إلى جمهورك المستهدف.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-number">2</div>
                    <div class="strategy-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">خطة المحتوى</h4>
                        <p class="strategy-description">نصمم خطة محتوى متكاملة تشمل جميع القنوات والمنصات لضمان وصول رسالتك بشكل احترافي ومؤثر.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-number">3</div>
                    <div class="strategy-icon">
                        <i class="bi bi-share"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">وسائل التواصل الاجتماعي والاتصال</h4>
                        <p class="strategy-description">ندير حساباتك على منصات التواصل الاجتماعي ونواصل مع جمهورك بفعالية لبناء علاقات قوية.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-number">4</div>
                    <div class="strategy-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">إدارة المجتمع</h4>
                        <p class="strategy-description">نبني مجتمعًا نشطًا حول علامتك التجارية من خلال التفاعل المستمر والاستجابة لجمهورك.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-number">5</div>
                    <div class="strategy-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">المشاركة والعملاء المحتملين</h4>
                        <p class="strategy-description">نزيد من تفاعل الجمهور ونحولهم إلى عملاء محتملين من خلال حملات تسويقية مبتكرة.</p>
                    </div>
                </div>

                <div class="strategy-item">
                    <div class="strategy-number">6</div>
                    <div class="strategy-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="strategy-content">
                        <h4 class="strategy-title">استراتيجية المحتوى الرقمي</h4>
                        <p class="strategy-description">نطور استراتيجية محتوى رقمية شاملة تضمن لك التميز في السوق وتحقيق أهدافك التسويقية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section - New -->
    <section id="clients" class="clients-section">
        <div class="container">
            <div class="clients-content">
                <div class="text-center mb-5">
                    <h2 class="clients-title">عملاؤنا</h2>
                    <p class="clients-subtitle">نفتخر بالشراكة مع هذه الشركات الرائدة</p>
                    <p class="clients-subtitle">شركاؤنا الذين يعمل معنا</p>
                </div>

                <div class="clients-grid">
                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h4 class="client-name">Sudanese Islamic Bank</h4>
                        <p class="client-type">قطاع البنوك</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h4 class="client-name">kinza</h4>
                        <p class="client-type">تجارة تجزئة</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h4 class="client-name">Ijiis kinza</h4>
                        <p class="client-type">تجارة إلكترونية</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4 class="client-name">Omdurman National Bank</h4>
                        <p class="client-type">قطاع البنوك</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <h4 class="client-name">Bcola</h4>
                        <p class="client-type">مشروبات</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo special-logo">
                            <i class="bi bi-airplane"></i>
                        </div>
                        <h4 class="client-name">el c</h4>
                        <p class="client-type">سفر وسياحة</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-tv"></i>
                        </div>
                        <h4 class="client-name">MEDIA CENTER</h4>
                        <p class="client-type">إعلام</p>
                    </div>

                    <div class="client-item">
                        <div class="client-logo">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <h4 class="client-name">SR TV</h4>
                        <p class="client-type">تلفزيون</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Stats Section - New -->
    <section id="client-stats" class="stats-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">إنجازاتنا</h2>
                <p class="section-subtitle">أرقام تعكس نجاحنا مع عملائنا</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-number" data-target="150">0</div>
                        <h4 class="stat-title">عميل سعيد</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-camera-reels-fill"></i>
                        </div>
                        <div class="stat-number" data-target="320">0</div>
                        <h4 class="stat-title">مشروع مكتمل</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="stat-number" data-target="25">0</div>
                        <h4 class="stat-title">جائزة</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <div class="stat-number" data-target="8">0</div>
                        <h4 class="stat-title">سنوات خبرة</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section - New -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">آراء العملاء</h2>
                <p class="section-subtitle">ماذا يقول عملاؤنا عنا</p>
            </div>
            <div class="row">
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
                        <p class="testimonial-text">"تعاملنا مع شركة أباريس للإنتاج كان تجربة رائعة، فريق محترف ومبدع قدم لنا حلولاً إبداعية تفوقت على توقعاتنا."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="عميل" class="author-img">
                            <div class="author-info">
                                <h5>أحمد محمد</h5>
                                <p>مدير التسويق - بنك السودان الإسلامي</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <p class="testimonial-text">"الجودة والإحترافية اللتان تميزان شركة أباريس جعلتاها شريكنا المفضل في جميع حملاتنا الإعلانية."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="عميل" class="author-img">
                            <div class="author-info">
                                <h5>فاطمة عبدالله</h5>
                                <p>المديرة التنفيذية - كنزا</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <p class="testimonial-text">"أباريس للإنتاج حولت فكرتنا إلى فيلم وثائقي مؤثر حاز على إعجاب الجمهور والنقاد، نحن سعداء جداً بالتعاون معهم."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="عميل" class="author-img">
                            <div class="author-info">
                                <h5>خالد سالم</h5>
                                <p>منتج أفلام - مركز الإعلام</p>
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
                <h2 class="section-title">خدماتنا</h2>
                <p class="section-subtitle">نقدم حلولاً متكاملة لجميع احتياجاتك الإنتاجية</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body p-4">
                            <div class="service-icon">
                                <i class="bi bi-camera-video-fill"></i>
                            </div>
                            <h4 class="service-title">الإنتاج التلفزيوني</h4>
                            <p>تقديم حلول متكاملة للإنتاج التلفزيوني بما في ذلك البرامج، المسلسلات، والوثائقيات بجودة عالية.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body p-4">
                            <div class="service-icon">
                                <i class="bi bi-film"></i>
                            </div>
                            <h4 class="service-title">الإنتاج السينمائي</h4>
                            <p>إنتاج أفلام روائية وقصيرة بأحدث التقنيات وفرق عمل محترفة لتحقيق رؤيتك الفنية.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body p-4">
                            <div class="service-icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </div>
                            <h4 class="service-title">الإعلانات التجارية</h4>
                            <p>تصميم وإنتاج إعلانات تجارية مؤثرة تساعد في تعزيز علامتك التجارية وزيادة مبيعاتك.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body p-4">
                            <div class="service-icon">
                                <i class="bi bi-music-note-beamed"></i>
                            </div>
                            <h4 class="service-title">الإنتاج الموسيقي</h4>
                            <p>تسجيل وإنتاج الأعمال الموسيقية بأحدث الاستوديوهات وفريق من أفضل المهندسين الصوتيين.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body p-4">
                            <div class="service-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <h4 class="service-title">تغطية الفعاليات</h4>
                            <p>تغطية شاملة للفعاليات والمؤتمرات والمناسبات بجودة احترافية وفريق عمل متخصص.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body p-4">
                            <div class="service-icon">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h4 class="service-title">الكتابة والإبداع</h4>
                            <p>فريق من الكتاب والمبدعين لتقديم محتوى أصيل وجذاب يناسب جميع المنصات الإعلامية.</p>
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
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="مشروع 1" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">فيلم وثائقي</h4>
                                <p>إنتاج فيلم وثائقي عن التراث الثقافي</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="مشروع 2" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">حملة إعلانية</h4>
                                <p>حملة إعلانية لمنتج تجاري جديد</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="مشروع 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">برنامج تلفزيوني</h4>
                                <p>برنامج حواري أسبوعي ناجح</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="مشروع 4" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">فيديو كليب</h4>
                                <p>إنتاج فيديو كليب لفنان مشهور</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="مشروع 5" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 class="portfolio-title">تغطية مؤتمر</h4>
                                <p>تغطية شاملة لمؤتمر دولي</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1536240478700-b869070f9279?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="مشروع 6" class="portfolio-img">
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
                <div class="col-lg-5 mb-4">
                    <div class="contact-info">
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
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">أرسل لنا رسالة</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="الاسم الكامل" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" placeholder="البريد الإلكتروني" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="tel" class="form-control" placeholder="رقم الهاتف">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select class="form-control">
                                            <option>نوع الخدمة</option>
                                            <option>الإنتاج التلفزيوني</option>
                                            <option>الإنتاج السينمائي</option>
                                            <option>الإعلانات التجارية</option>
                                            <option>الإنتاج الموسيقي</option>
                                            <option>تغطية الفعاليات</option>
                                            <option>أخرى</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="اكتب رسالتك هنا"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">إرسال الرسالة</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer - Improved with Latest Projects -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="footer-logo">
                        <i class="bi bi-camera-reels-fill"></i> Abarce Production
                    </div>
                    <p>شركة رائدة في مجال الإنتاج الإعلامي والفني، نقدم حلولاً إبداعية تلامس قلوب الجمهور وتحقق أهداف عملائنا.</p>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-3">روابط سريعة</h5>
                    <ul class="footer-links">
                        <li><a href="#home">الرئيسية</a></li>
                        <li><a href="#about">من نحن</a></li>
                        <li><a href="#how-we-work">كيف نعمل</a></li>
                        <li><a href="#clients">عملاؤنا</a></li>
                        <li><a href="#services">خدماتنا</a></li>
                        <li><a href="#portfolio">أعمالنا</a></li>
                        <li><a href="#contact">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-3">النشرة البريدية</h5>
                    <p>اشترك في نشرتنا البريدية للحصول على آخر أخبارنا وعروضنا.</p>
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
                            <i class="bi bi-star-fill"></i> آخر المشاريع
                        </h5>
                        <div class="footer-project-item">
                            <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="مشروع 1" class="footer-project-img">
                            <div class="footer-project-content">
                                <h6 class="footer-project-title">فيلم وثائقي عن التراث</h6>
                                <p class="footer-project-date">15 أكتوبر 2023</p>
                            </div>
                        </div>
                        <div class="footer-project-item">
                            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="مشروع 2" class="footer-project-img">
                            <div class="footer-project-content">
                                <h6 class="footer-project-title">حملة إعلانية جديدة</h6>
                                <p class="footer-project-date">3 أكتوبر 2023</p>
                            </div>
                        </div>
                        <div class="footer-project-item">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="مشروع 3" class="footer-project-img">
                            <div class="footer-project-content">
                                <h6 class="footer-project-title">برنامج تلفزيوني ناجح</h6>
                                <p class="footer-project-date">20 سبتمبر 2023</p>
                            </div>
                        </div>
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

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '10px 0';
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
            } else {
                navbar.style.padding = '15px 0';
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            }
        });

        // Active navigation link
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Counter Animation
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const countUp = () => {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(countUp, 10);
                } else {
                    counter.innerText = target;
                }
            });
        };

        // Trigger counter animation when stats section is in view
        const statsSection = document.querySelector('#client-stats');
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };

        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp();
                    observer.unobserve(entry.target);
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);
        observer.observe(statsSection);
    </script>
</body>
</html>