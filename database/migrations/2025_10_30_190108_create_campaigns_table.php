<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان الحملة
    $table->string('type')->nullable(); // نوع الحملة (إعلانية، رقمية، إعلامية...)
    $table->text('description')->nullable(); // وصف مختصر
    $table->string('image')->nullable(); // صورة رئيسية للحملة

    // بيانات العميل
    $table->string('client_name')->nullable();
    $table->string('client_logo')->nullable(); // صورة العميل أو شعاره
    $table->string('client_industry')->nullable(); // قطاع العميل (تجزئة، بنوك، مشروبات...)

    // النتائج (لأنها متعددة، نخزنها في JSON)
    $table->json('results')->nullable();
    // مثال: ["زيادة المبيعات بنسبة 45%", "وصول لـ 2.5 مليون مستخدم", "معدل تفاعل 8.2%"]

    // الإحصائيات العامة
    $table->integer('ads_count')->nullable(); // عدد الإعلانات أو الفيديوهات
    $table->integer('duration_days')->nullable(); // عدد الأيام
    $table->integer('platforms_count')->nullable(); // عدد المنصات
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
