# 🧩 استخدم صورة PHP 8.3 مع FPM (تشغل Laravel)
FROM php:8.3-fpm

# 📂 تحديد مجلد العمل داخل الحاوية
WORKDIR /var/www/html

# 🧰 تثبيت المتطلبات (PHP extensions + system tools)
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 📦 تثبيت Composer (آخر إصدار)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ⚙️ نسخ ملفات المشروع
COPY . .

# 🧹 تثبيت الاعتماديات بدون dev
RUN composer install --no-dev --optimize-autoloader

# 🗝️ إعداد التصاريح للـ storage و cache
RUN chown -R www-data:www-data storage bootstrap/cache

# ⚡ تحسين الأداء (الكاش)
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache || true

# 🌐 Laravel سيعمل على المنفذ 8000 (Render سيضبط PORT تلقائيًا)
EXPOSE 8000

# 🚀 تشغيل Laravel باستخدام built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
