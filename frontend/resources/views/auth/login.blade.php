@extends('layouts.home')
@section('title', __('Log In'))
@section('meta_title', __('Log In'))
@section('meta_description', __('Log In'))
@section('meta_image', asset('assets/meta/home.png'))

@section('content')
    <div class="grid min-h-[calc(100vh-8rem)] md:grid-cols-2">
        <div class="relative hidden overflow-hidden bg-ink md:block">
            <img src="{{ asset('assets/images/escorte-login.png') }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-80">
            <div class="absolute inset-0 bg-ink/40"></div>
        </div>
        <div class="mx-auto flex w-full max-w-md flex-col justify-center px-4 py-12 pb-28">
            <a href="{{ route('homepage') }}" class="mb-8 block w-40">
                <img src="{{ asset('assets/images/logo-vy.png') }}" alt="Viens Yamo" class="h-12 w-auto">
            </a>
            <h1 class="text-3xl font-bold tracking-tight">{{ __('Log In') }}</h1>
            <p class="mt-2 text-sm text-[oklch(0.4_0.03_35)]">{{ __('Welcome back!') }}</p>

            @if (session('error'))
                <p id="login-message" class="mt-4 border border-coral bg-white px-4 py-3 text-sm text-coral">{{ session('error') }}</p>
            @elseif (session('success'))
                <p id="login-message" class="mt-4 border border-line bg-lilac px-4 py-3 text-sm">{{ session('success') }}</p>
            @else
                <p id="login-message" class="mt-4 hidden border px-4 py-3 text-sm"></p>
            @endif

            <form id="login-form" method="post" action="{{ route('login') }}" class="mt-6 space-y-4">
                @csrf
                <label class="block text-sm">
                    <span class="font-semibold">{{ __('Phone number') }}</span>
                    <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" autocomplete="username" required
                        placeholder="{{ __('Enter your phone number') }}"
                        class="mt-2 w-full border border-line bg-white px-3 py-2.5 outline-none focus:border-coral">
                </label>
                <div class="text-sm">
                    <label for="password" class="font-semibold">{{ __('Password') }}</label>
                    <div class="relative mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            placeholder="{{ __('Enter your password') }}"
                            class="w-full border border-line bg-white px-3 py-2.5 pr-12 outline-none focus:border-coral">
                        <button type="button" data-toggle-password="password" class="absolute right-3 top-1/2 -translate-y-1/2 text-sm opacity-60">{{ __('Show') }}</button>
                    </div>
                </div>

                @if (config('services.recaptcha.key'))
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                @endif

                <button type="submit" id="login-submit" disabled
                    class="w-full rounded-full bg-coral px-6 py-3 text-sm font-semibold text-paper disabled:cursor-not-allowed disabled:opacity-40">
                    {{ __('Log In') }}
                </button>

                <div class="flex flex-wrap items-center justify-between gap-3 text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" checked class="accent-coral">
                        {{ __('Remember me') }}
                    </label>
                    <a href="{{ route('check-number') }}" class="underline decoration-coral underline-offset-4">{{ __('Forgot your password?') }}</a>
                </div>
                <p class="text-sm">
                    {{ __('No account?') }}
                    <a href="{{ route('register') }}" class="font-semibold underline decoration-coral underline-offset-4">{{ __('Register') }}</a>
                </p>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    @if (config('services.recaptcha.key'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
    <script>
        (function () {
            var phone = document.getElementById('phone_number');
            var password = document.getElementById('password');
            var submit = document.getElementById('login-submit');
            var form = document.getElementById('login-form');
            var message = document.getElementById('login-message');

            function sync() {
                submit.disabled = !(phone.value.trim() && password.value.trim());
            }
            phone.addEventListener('input', sync);
            password.addEventListener('input', sync);
            sync();

            document.querySelectorAll('[data-toggle-password]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var input = document.getElementById(btn.getAttribute('data-toggle-password'));
                    if (!input) return;
                    var hidden = input.type === 'password';
                    input.type = hidden ? 'text' : 'password';
                    btn.textContent = hidden ? @json(__('Hide')) : @json(__('Show'));
                });
            });

            form.addEventListener('submit', function () {
                if (!phone.value.trim() || !password.value.trim()) {
                    message.classList.remove('hidden');
                    message.className = 'mt-4 border border-coral bg-white px-4 py-3 text-sm text-coral';
                    message.textContent = @json(__('Please complete all required fields.'));
                    return;
                }
                submit.disabled = true;
            });
        })();
    </script>
@endpush
