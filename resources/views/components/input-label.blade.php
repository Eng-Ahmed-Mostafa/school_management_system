@props(['value'])

<label class="form-label fw-medium" style="font-size:.88rem;">
    {{ $value ?? $slot }}
</label>
