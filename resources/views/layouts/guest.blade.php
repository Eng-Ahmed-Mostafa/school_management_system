<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EduManage – Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <style>
        :root {
            --blue: #1a56db;
            --blue-dark: #1341b0;
            --blue-light: #3b82f6;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            height: 100vh;
        }

        .hero-panel {
            background: linear-gradient(135deg, #1a56db 0%, #1341b0 60%, #0f2f80 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
        }

        .hero-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=60') center/cover no-repeat;
            opacity: 0.18;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .badge-enterprise {
            background: rgba(255, 255, 255, 0.18);
            color: #fff;
            font-size: 0.72rem;
            border-radius: 4px;
            padding: 2px 8px;
        }

        .feature-icon {
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .trust-pill {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 6px 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .trust-dot {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.35);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.75rem;
            color: #fff;
        }

        .login-panel {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: #fff;
        }

        .login-box {
            max-width: 420px;
            width: 100%;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #d1d5db;
            padding: 10px 14px;
        }

        .form-control:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.12);
        }

        .btn-primary-custom {
            background: var(--blue);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            letter-spacing: .3px;
        }

        .btn-primary-custom:hover {
            background: var(--blue-dark);
        }

        .btn-sso {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 10px;
            background: #fff;
            color: #374151;
            font-weight: 500;
        }

        .btn-sso:hover {
            background: #f9fafb;
        }

        .secure-badge {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 8px 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: .78rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
        }

        .secure-badge .dot {
            width: 10px;
            height: 10px;
            background: #22c55e;
            border-radius: 50%;
        }

        .divider-text {
            position: relative;
            text-align: center;
        }

        .divider-text::before,
        .divider-text::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 42%;
            height: 1px;
            background: #e5e7eb;
        }

        .divider-text::before {
            left: 0;
        }

        .divider-text::after {
            right: 0;
        }
    </style>
</head>

<body>
    <div class="row g-0" style="min-height:100vh;">
        <!-- Hero Panel -->
        <div class="col-lg-6 hero-panel d-flex align-items-center p-5">
            <div class="hero-content text-white w-100">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <div class="bg-white rounded-2 d-flex align-items-center justify-content-center"
                        style="width:40px;height:40px;">
                        <i class="bi bi-grid-3x3-gap-fill text-primary fs-5"></i>
                    </div>
                    <span class="fs-5 fw-bold">EduManage</span>
                </div>
                <span class="badge-enterprise mb-4 d-inline-block">Enterprise v4.0.2</span>
                <h1 class="display-5 fw-bold mb-3" style="line-height:1.2;">Streamline your school's<br><span
                        style="color:rgba(255,255,255,0.6);">future, today.</span></h1>
                <div class="d-flex flex-column gap-3 mb-5">
                    <div class="d-flex align-items-start gap-3">
                        <div class="feature-icon"><i class="bi bi-grid text-white"></i></div>
                        <div>
                            <div class="fw-semibold">Unified Operations</div>
                            <div style="color:rgba(255,255,255,0.7);font-size:.88rem;">Manage students, faculty, and
                                finance from a single, intuitive centralized command center.</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="feature-icon"><i class="bi bi-people text-white"></i></div>
                        <div>
                            <div class="fw-semibold">Stakeholder Portals</div>
                            <div style="color:rgba(255,255,255,0.7);font-size:.88rem;">Custom-tailored experiences for
                                teachers, parents, and students with real-time sync.</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="feature-icon"><i class="bi bi-shield-check text-white"></i></div>
                        <div>
                            <div class="fw-semibold">Military-Grade Security</div>
                            <div style="color:rgba(255,255,255,0.7);font-size:.88rem;">Ensure data privacy and
                                institutional compliance with advanced encryption and SSO.</div>
                        </div>
                    </div>
                </div>
                <div class="trust-pill">
                    <span class="trust-dot">A</span>
                    <span class="trust-dot">B</span>
                    <span class="trust-dot">C</span>
                    <span class="trust-dot">D</span>
                    <span style="font-size:.82rem;color:rgba(255,255,255,0.85);">Trusted by 500+ Institutions</span>
                </div>
            </div>
        </div>
        <!-- auth Panel -->
        <div class="col-lg-6 login-panel p-4">
            {{ $slot }}
        </div>
    </div>
    <div class="secure-badge">
        <div class="dot"></div>
        <x-auth-session-status status="SECURE ENVIRONMENT"></x-auth-session-status>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

