@extends('layouts.site')
@section('content')
    <!-- Breadcrumb -->

    <section class="project-hero">
        <div class="project-hero-bg"
            style="background-image: url('{{ asset('storage/' . $project->images->first()->image) }}')"></div>></div>
        <div class="project-hero-content">
            <div class="project-badge">
                <i class="bi bi-star-fill"></i> {{ $project->service->title }}
            </div>
            <h1 class="project-title" data-aos="fade-up"> {{ $project->title }}</h1>
            <p class="project-category" data-aos="fade-up" data-aos-delay="100"> {{ Str::limit($project->description, 20) }}
            </p>
        </div>
    </section>
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <a href="{{ route('landingpage') }}#portfolio" class="back-btn d-inline-flex align-items-center mb-4" data-aos="fade-right">
                    <i class="bi bi-arrow-right me-2"></i>
                    {{ __('main.back_to_works') }}
                </a>

                <div class="project-details mb-4" data-aos="fade-up">
                    <h2 class="section-title">{{ __('main.about_project') }}</h2>
                    <p>{{ $project->description }}</p>
                </div>


                <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-6">
                        <div class="detail-item d-flex align-items-center mb-3">
                            <div class="detail-icon me-3">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="detail-content">
                                <h5>{{ __('main.date_production') }}</h5>
                                <p>{{ $project->created_at->format('Y-m-d') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item d-flex align-items-center mb-3">
                            <div class="detail-icon me-3">
                                <i class="bi bi-building"></i>
                            </div>
                            <div class="detail-content">
                                <h5>{{ __('main.client') }}</h5>
                                <p>{{ $project->client->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="gallery-section" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="section-title mb-4">{{ __('main.gallery') }}</h2>

                    <div class="row g-3">
                        @foreach ($project->images as $imag)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="gallery-item position-relative overflow-hidden rounded shadow-sm">
                                    <img src="{{ asset('storage/' . $imag->image) }}"
                                         alt="{{ $project->title }}"
                                         class="gallery-img img-fluid w-100" />
                                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in gallery-icon"
                                           data-bs-toggle="modal"
                                           data-bs-target="#imageModal"
                                           data-image="{{ asset('storage/' . $imag->image) }}"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="info-card mb-4" data-aos="fade-left">
                    <h4 class="info-title">{{ __('main.type_project') }}</h4>
                    <p class="info-content">{{ $project->service->title }}</p>
                </div>
            </div>

        </div>


        <div class="cta-section text-center my-5" data-aos="fade-up">
            <h2 class="cta-title">{{ __('main.Do_you_have_similar_project') }}</h2>
            <p class="cta-subtitle">{{ __('main.get_hie') }}</p>
            <a href="{{ route('landingpage') }}#contact" class="btn btn-cta">{{ __('main.contact_you') }}</a>
        </div>


        @php
            $url = urlencode(route('project.show', $project->id));
            $title = urlencode($project->title);
        @endphp

        <div class="share-section text-center" data-aos="fade-up" data-aos-delay="100">
            <h3 class="share-title mb-3">{{ __('main.share') }}</h3>
            <div class="share-buttons d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" class="share-btn facebook" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}" class="share-btn twitter" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}" class="share-btn linkedin" target="_blank">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}" class="share-btn whatsapp" target="_blank">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0 shadow-none">
                <div class="modal-body text-center p-0">
                    <img id="modalImage" src="" class="img-fluid rounded" alt="صورة المشروع">
                </div>
            </div>
        </div>
    </div>


    <script>

        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        imageModal.addEventListener('show.bs.modal', function(event) {
            const icon = event.relatedTarget;
            const imageSrc = icon.getAttribute('data-image');
            modalImage.src = imageSrc;
        });
    </script>
@endsection
