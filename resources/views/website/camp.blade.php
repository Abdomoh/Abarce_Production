@extends('layouts.site')
@section('content')
    <!-- Campaigns Section - New -->
    <section id="campaigns" class="campaigns-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">حملاتنا التسويقية</h2>
                <p class="section-subtitle">نماذج من حملاتنا الناجحة التي حققت نتائج مبهرة</p>
            </div>


            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="campaign-card">
                        <div class="campaign-badge">حملة إعلانية</div>
                        <img src="asset('image/abarce/1.jpg')" alt="حملة كنزا" class="campaign-img">
                        <div class="campaign-content">
                            <h3 class="campaign-title">حملة كنزا الرمضانية</h3>
                            <p class="campaign-description">حملة تسويقية متكاملة لمنتجات كنزا خلال شهر رمضان، شملت إعلانات تلفزيونية ومحتوى رقمي مبتكر.</p>

                            <div class="campaign-client">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="كنزا" class="client-avatar">
                                <div>
                                    <div class="client-name">كنزا</div>
                                    <div class="client-industry">تجارة تجزئة</div>
                                </div>
                            </div>


                            <div class="campaign-results">
                                <div class="results-title">
                                    <i class="bi bi-graph-up"></i> النتائج المحققة
                                </div>
                                <ul class="results-list">
                                    <li>زيادة المبيعات بنسبة 45%</li>
                                    <li>وصول لـ 2.5 مليون مستخدم</li>
                                    <li>معدل تفاعل 8.2%</li>
                                </ul>
                            </div>

                            <div class="campaign-stats">
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">15</span>
                                    <span class="campaign-stat-label">إعلان</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">30</span>
                                    <span class="campaign-stat-label">يوم</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">5</span>
                                    <span class="campaign-stat-label">منصات</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="campaign-card">
                        <div class="campaign-badge">حملة رقمية</div>
                        <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="حملة بنك السودان الإسلامي" class="campaign-img">
                        <div class="campaign-content">
                            <h3 class="campaign-title">حملة التمويل العقاري</h3>
                            <p class="campaign-description">حملة رقمية شاملة لمنتج التمويل العقاري من بنك السودان الإسلامي، ركزت على التوعية والتعليم المالي.</p>

                            <div class="campaign-client">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="بنك السودان الإسلامي" class="client-avatar">
                                <div>
                                    <div class="client-name">بنك السودان الإسلامي</div>
                                    <div class="client-industry">قطاع البنوك</div>
                                </div>
                            </div>

                            <div class="campaign-results">
                                <div class="results-title">
                                    <i class="bi bi-graph-up"></i> النتائج المحققة
                                </div>
                                <ul class="results-list">
                                    <li>زيادة الطلبات بنسبة 60%</li>
                                    <li>وصول لـ 1.8 مليون مستخدم</li>
                                    <li>معدل تحويل 12%</li>
                                </ul>
                            </div>

                            <div class="campaign-stats">
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">25</span>
                                    <span class="campaign-stat-label">فيديو</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">45</span>
                                    <span class="campaign-stat-label">يوم</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">8</span>
                                    <span class="campaign-stat-label">منصات</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="campaign-card">
                        <div class="campaign-badge">حملة إعلامية</div>
                        <img src="https://images.unsplash.com/photo-1603796846097-bee99e4a601f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="حملة بي كولا" class="campaign-img">
                        <div class="campaign-content">
                            <h3 class="campaign-title">حملة صيف بي كولا</h3>
                            <p class="campaign-description">حملة إعلامية ضخمة لمنتج بي كولا الجديد، شملت إعلانات تلفزيونية وإعلانات خارجية وتغطية إعلامية.</p>

                            <div class="campaign-client">
                                <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="بي كولا" class="client-avatar">
                                <div>
                                    <div class="client-name">بي كولا</div>
                                    <div class="client-industry">مشروبات</div>
                                </div>
                            </div>

                            <div class="campaign-results">
                                <div class="results-title">
                                    <i class="bi bi-graph-up"></i> النتائج المحققة
                                </div>
                                <ul class="results-list">
                                    <li>زيادة المبيعات بنسبة 70%</li>
                                    <li>وصول لـ 3.2 مليون مستخدم</li>
                                    <li>معدل تفاعل 15%</li>
                                </ul>
                            </div>

                            <div class="campaign-stats">
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">20</span>
                                    <span class="campaign-stat-label">إعلان</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">60</span>
                                    <span class="campaign-stat-label">يوم</span>
                                </div>
                                <div class="campaign-stat">
                                    <span class="campaign-stat-number">10</span>
                                    <span class="campaign-stat-label">منصات</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection