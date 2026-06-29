<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-box mx-auto">
        <h2 class="fw-bold mb-1" style="color:#111827;">Account Register</h2>
        <p class="text-muted mb-4" style="font-size:.92rem;">Enter your credentials to access your
            administrative portal.</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <x-input-label for="email" value="Username"></x-input-label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i
                            class="bi bi-envelope text-muted"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Exst_hshK"
                        style="border-left:none;">
                </div>
            </div>
            <div class="mb-3">
                <x-input-label for="email" value="Email"></x-input-label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i
                            class="bi bi-envelope text-muted"></i></span>
                    <input type="email" class="form-control border-start-0" placeholder="name@school.edu"
                        style="border-left:none;">
                </div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <x-input-label for="password" value="Password"></x-input-label>
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-lock text-muted"></i></span>
                    <input type="password" class="form-control border-start-0" value="••••••••"
                        style="border-left:none; border-right:none;">
                    <span class="input-group-text bg-white border-start-0"><i class="bi bi-eye text-muted"
                            style="cursor:pointer;"></i></span>
                </div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <x-input-label for="password" value="Confirm Password"></x-input-label>
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-lock text-muted"></i></span>
                    <input type="password" class="form-control border-start-0" value="••••••••"
                        style="border-left:none; border-right:none;">
                    <span class="input-group-text bg-white border-start-0"><i class="bi bi-eye text-muted"
                            style="cursor:pointer;"></i></span>
                </div>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="keepLogin">
                <label class="form-check-label" for="keepLogin" style="font-size:.9rem;">Keep me logged in for 30
                    days</label>
            </div>
            <x-primary-button>Sign Up →</x-primary-button>
        </form>
        <div class="divider-text text-muted mb-4" style="font-size:.82rem;">OR ENTERPRISE SSO</div>
        <div class="d-flex flex-column gap-2">
            <x-secondary-button>
                <img src="https://www.google.com/favicon.ico" width="18" height="18" class="me-2">
                Continue with Google
            </x-secondary-button>
            <x-secondary-button>
                <img src="https://www.microsoft.com/favicon.ico" width="18" height="18" class="me-2">
                Continue with Microsoft
            </x-secondary-button>
        </div>
        <p class="text-center mt-4 text-muted" style="font-size:.84rem;">New to EduManage? <a href="#"
                class="text-primary fw-medium text-decoration-none">Contact Administration</a></p>
        <div class="text-center mt-2">
            <a href="#" class="text-muted text-decoration-none me-2" style="font-size:.78rem;">Privacy
                Policy</a>
            <span class="text-muted" style="font-size:.78rem;">•</span>
            <a href="#" class="text-muted text-decoration-none mx-2" style="font-size:.78rem;">Terms of
                Service</a>
            <span class="text-muted" style="font-size:.78rem;">•</span>
            <a href="#" class="text-muted text-decoration-none ms-2" style="font-size:.78rem;">Contact
                Support</a>
        </div>
    </div>
</x-guest-layout>
