<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>EduNexus – Executive Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <style>
        .announce-row {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .announce-row:last-child {
            border-bottom: none;
        }

        .announce-date {
            text-align: center;
            min-width: 36px;
        }

        .announce-date .month {
            font-size: .68rem;
            color: #6b7280;
            text-transform: uppercase;
        }

        .announce-date .day {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111;
            line-height: 1;
        }

        .announce-tag {
            font-size: .7rem;
            font-weight: 600;
            border-radius: 4px;
            padding: 2px 8px;
        }

        .tag-academic {
            background: #dbeafe;
            color: var(--blue);
        }

        .tag-extra {
            background: #fef9c3;
            color: #ca8a04;
        }

        .tag-facility {
            background: #f3e8ff;
            color: #7c3aed;
        }

        .tag-important {
            background: #fee2e2;
            color: #dc2626;
        }

        .event-item {
            padding: 10px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .event-item:last-child {
            border-bottom: none;
        }

        .event-date-label {
            font-size: .75rem;
            font-weight: 700;
            color: var(--blue);
        }

        .event-title {
            font-weight: 600;
            font-size: .875rem;
            color: #111;
        }

        .event-loc {
            font-size: .78rem;
            color: #6b7280;
        }

        .portal-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            transition: box-shadow .2s;
        }

        .portal-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, .08);
        }

        .portal-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .bar-chart-wrap {
            display: flex;
            align-items: flex-end;
            gap: 16px;
            height: 100px;
            padding-top: 8px;
        }

        .bar-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
        }

        .bar-current {
            background: var(--blue);
            border-radius: 4px 4px 0 0;
            width: 28px;
        }

        .bar-prev {
            background: #e5e7eb;
            border-radius: 4px 4px 0 0;
            width: 28px;
        }

        .bar-label {
            font-size: .72rem;
            color: #6b7280;
        }

        .gpa-card {
            background: var(--blue);
            border-radius: 12px;
            padding: 20px;
            color: #fff;
        }

        .progress-bar-custom {
            height: 6px;
            background: rgba(255, 255, 255, .25);
            border-radius: 3px;
        }

        .progress-fill {
            height: 6px;
            background: #fff;
            border-radius: 3px;
        }
    </style>
</head>

<body >
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Topbar -->
    @include('layouts.topbar')

    <main class="main-content">
        {{ $slot }}
    </main>
</body>

</html>
