<header class="topbar">
    <div class="search"><i class="bi bi-search text-muted"></i><input
            placeholder="Search students, staff, or records..." /></div>
    <div class="topbar-right">
        <ul>
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
        <button class="notif-btn"><i class="bi bi-bell"></i></button>
        <div class="user-pill">
            <div>
                <div class="name">Dr. Sarah Jenkins</div>
                <div class="role">Principal</div>
            </div>
            <div class="avatar">SJ</div>
        </div>
    </div>
</header>
