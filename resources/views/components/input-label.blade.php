@props(['value'])

<label class="form-label fw-medium" style="font-size:.88rem;">
 php artisan lang:publish   {{ $value ?? $slot }}
</label>
