@props(['status'])

@if ($status)
    <div>
        <div style="font-weight:600;font-size:.75rem;">{{ $status }}</div>
        <div style="color:#6b7280;font-size:.72rem;">AES-256 Encrypted</div>
    </div>
@endif
