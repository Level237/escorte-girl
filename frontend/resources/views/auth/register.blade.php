@extends('layouts.home')
@section('title', __('Register'))
@section('meta_title', __('Register'))
@section('meta_description', __('Register'))
@section('meta_image', asset('assets/meta/home.png'))

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/intl-tel-input-master/build/css/intlTelInput.css') }}">
@endpush

@section('content')
    <div class="grid min-h-[calc(100vh-8rem)] lg:grid-cols-[0.9fr_1.1fr]">
        <div class="relative hidden overflow-hidden bg-coral lg:block">
            <img src="{{ asset('assets/images/register-banner.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-30">
            <div class="relative flex h-full flex-col justify-end p-10 text-paper">
                <p class="text-sm font-semibold uppercase tracking-wide">{{ __('Tip') }}</p>
                <p class="mt-3 max-w-sm text-lg leading-7">{{ __('Get an account?') }} <a href="{{ route('login') }}" class="underline">{{ __('Log In') }}</a></p>
            </div>
        </div>

        <div class="mx-auto w-full max-w-2xl px-4 py-10 pb-28">
            <p class="text-sm">
                <a href="{{ route('homepage') }}" class="underline decoration-coral underline-offset-4">{{ __('Home page') }}</a>
                <span class="opacity-50"> / </span>
                <span>{{ __('Register') }}</span>
            </p>
            <h1 class="mt-6 text-3xl font-bold tracking-tight md:text-4xl">{{ __('Register') }}</h1>

            <p id="register-alert" class="mt-4 hidden border px-4 py-3 text-sm"></p>
            <p id="register-saving" class="mt-4 hidden border border-line bg-lilac px-4 py-3 text-sm">{{ __('Registration') }} — {{ __('This may take a few minutes, please wait') }}...</p>
            <p id="register-success" class="mt-4 hidden border border-line bg-lilac px-4 py-3 text-sm">{{ __('Great') }} — {{ __('Your account has been created, have fun') }}.</p>

            <form id="register-form" method="post" action="{{ route('register.store') }}" class="mt-8 space-y-5 border border-line bg-white p-5 md:p-8">
                @csrf
                <input type="hidden" name="role_id" id="role_id" value="2">

                <fieldset>
                    <legend class="text-sm font-semibold">{{ __('I am') }} <span class="text-coral">*</span></legend>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <button type="button" data-role="2" class="role-btn rounded-full bg-coral px-4 py-2 text-sm font-semibold text-paper">{{ __('Escorte') }}</button>
                        <button type="button" data-role="3" class="role-btn rounded-full border border-line px-4 py-2 text-sm">{{ __('Member') }}</button>
                    </div>
                </fieldset>

                <div class="grid gap-4 sm:grid-cols-2">
                    <label class="block text-sm sm:col-span-1">
                        <span class="font-semibold">{{ __('Phone number') }} <span class="text-coral">*</span></span>
                        <input type="tel" name="phone_number" id="phone" required class="mt-2 w-full border border-line bg-paper px-3 py-2.5 outline-none focus:border-coral">
                        <span id="phone-hint" class="mt-1 block text-xs text-[oklch(0.4_0.03_35)]"></span>
                    </label>
                    <label class="block text-sm">
                        <span class="font-semibold">Email</span>
                        <input type="email" name="email" id="email" autocomplete="email" class="mt-2 w-full border border-line bg-paper px-3 py-2.5 outline-none focus:border-coral">
                    </label>
                    <label class="block text-sm">
                        <span class="font-semibold">{{ __('Username') }} <span class="text-coral">*</span></span>
                        <input type="text" name="username" id="username" maxlength="150" required placeholder="vaginsucrer" class="mt-2 w-full border border-line bg-paper px-3 py-2.5 outline-none focus:border-coral">
                    </label>
                    <label class="block text-sm">
                        <span class="font-semibold">{{ __('Town') }} <span class="text-coral">*</span></span>
                        <select name="town_id" id="town" required class="mt-2 w-full border border-line bg-paper px-3 py-2.5 outline-none focus:border-coral">
                            <option value="">{{ __('Select town') }}</option>
                            @foreach ($towns as $town)
                                <option value="{{ $town['id'] }}">{{ $town['town_name'] }}</option>
                            @endforeach
                        </select>
                    </label>
                    <div class="text-sm">
                        <label for="password" class="font-semibold">{{ __('Password') }} <span class="text-coral">*</span></label>
                        <div class="relative mt-2">
                            <input type="password" name="password" id="password" autocomplete="new-password" required minlength="6"
                                class="w-full border border-line bg-paper px-3 py-2.5 pr-12 outline-none focus:border-coral">
                            <button type="button" data-toggle-password="password" class="absolute right-3 top-1/2 -translate-y-1/2 text-sm opacity-60">{{ __('Show') }}</button>
                        </div>
                    </div>
                    <div class="text-sm">
                        <label for="password_confirmation" class="font-semibold">{{ __('Password confirmation') }} <span class="text-coral">*</span></label>
                        <div class="relative mt-2">
                            <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" required minlength="6"
                                class="w-full border border-line bg-paper px-3 py-2.5 pr-12 outline-none focus:border-coral">
                            <button type="button" data-toggle-password="password_confirmation" class="absolute right-3 top-1/2 -translate-y-1/2 text-sm opacity-60">{{ __('Show') }}</button>
                        </div>
                    </div>
                </div>

                <label class="flex items-start gap-2 text-sm">
                    <input type="checkbox" name="cgu" id="cgu" value="1" required class="mt-1 accent-coral">
                    <span>{{ __('I accept') }} <a href="{{ route('cgu') }}" target="_blank" class="underline decoration-coral underline-offset-4">{{ __('terms of use') }}</a></span>
                </label>

                @if (config('services.recaptcha.key'))
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                @endif

                <button type="submit" id="register-btn" class="rounded-full bg-coral px-6 py-3 text-sm font-semibold text-paper">{{ __('Register now') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/intl-tel-input-master/build/js/intlTelInput.js') }}"></script>
    @if (config('services.recaptcha.key'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
    <script>
        (function () {
            var form = document.getElementById('register-form');
            var alertBox = document.getElementById('register-alert');
            var saving = document.getElementById('register-saving');
            var success = document.getElementById('register-success');
            var submit = document.getElementById('register-btn');
            var roleInput = document.getElementById('role_id');
            var phone = document.getElementById('phone');
            var phoneHint = document.getElementById('phone-hint');
            var messages = {
                phone: @json(__('The phone number is invalid')),
                cgu: @json(__('You have not accepted the privacy policy.')),
                username: @json(__('Username is required')),
                town: @json(__('Your town of residence is required')),
                password: @json(__('Password must be at least 6 characters and match')),
                captcha: @json(__('Please complete the captcha')),
                unknown: @json(__('An unknown error occurred')),
                timeout: @json(__('Request timeout, server unavailable')),
            };
            var hasCaptcha = {{ config('services.recaptcha.key') ? 'true' : 'false' }};
            var iti = window.intlTelInput(phone, {
                onlyCountries: ['cm'],
                utilsScript: @json(asset('assets/intl-tel-input-master/build/js/utils.js'))
            });

            document.querySelectorAll('[data-role]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    roleInput.value = btn.getAttribute('data-role');
                    document.querySelectorAll('[data-role]').forEach(function (other) {
                        other.className = 'role-btn rounded-full border border-line px-4 py-2 text-sm';
                    });
                    btn.className = 'role-btn rounded-full bg-coral px-4 py-2 text-sm font-semibold text-paper';
                });
            });

            document.querySelectorAll('[data-toggle-password]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var input = document.getElementById(btn.getAttribute('data-toggle-password'));
                    if (!input) return;
                    var hidden = input.type === 'password';
                    input.type = hidden ? 'text' : 'password';
                    btn.textContent = hidden ? @json(__('Hide')) : @json(__('Show'));
                });
            });

            function showError(text) {
                saving.classList.add('hidden');
                success.classList.add('hidden');
                alertBox.classList.remove('hidden');
                alertBox.className = 'mt-4 border border-coral bg-white px-4 py-3 text-sm text-coral';
                alertBox.innerHTML = text;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            function flatten(payload) {
                if (!payload) return messages.unknown;
                if (payload.errors) {
                    return Object.values(payload.errors).flat().join('<br>');
                }
                if (typeof payload.message === 'string') return payload.message;
                return Object.values(payload).flat().join('<br>') || messages.unknown;
            }

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                phoneHint.textContent = '';

                if (!phone.value.trim() || !iti.isValidNumber()) {
                    showError(messages.phone);
                    return;
                }
                if (!document.getElementById('cgu').checked) {
                    showError(messages.cgu);
                    return;
                }
                if (!document.getElementById('username').value.trim()) {
                    showError(messages.username);
                    return;
                }
                if (!document.getElementById('town').value) {
                    showError(messages.town);
                    return;
                }
                var password = document.getElementById('password').value;
                var confirm = document.getElementById('password_confirmation').value;
                if (!password || password.length < 6 || password !== confirm) {
                    showError(messages.password);
                    return;
                }
                var recaptcha = document.getElementById('g-recaptcha-response');
                if (hasCaptcha && (!recaptcha || !recaptcha.value)) {
                    showError(messages.captcha);
                    return;
                }

                var body = new FormData(form);
                body.set('phone_number', iti.getNumber());
                if (recaptcha) body.set('recaptcha', recaptcha.value);

                alertBox.classList.add('hidden');
                success.classList.add('hidden');
                saving.classList.remove('hidden');
                submit.disabled = true;

                var controller = new AbortController();
                var timer = setTimeout(function () { controller.abort(); }, 20000);

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: body,
                    credentials: 'same-origin',
                    signal: controller.signal
                }).then(function (response) {
                    return response.json().then(function (payload) {
                        return { ok: response.ok, status: response.status, payload: payload };
                    }).catch(function () {
                        return { ok: false, status: response.status, payload: null };
                    });
                }).then(function (result) {
                    clearTimeout(timer);
                    if (!result.ok || !result.payload || !result.payload.ok) {
                        submit.disabled = false;
                        showError(flatten(result.payload));
                        return;
                    }
                    saving.classList.add('hidden');
                    success.classList.remove('hidden');
                    form.classList.add('hidden');
                    setTimeout(function () {
                        window.location.replace(result.payload.redirect);
                    }, 1800);
                }).catch(function (error) {
                    clearTimeout(timer);
                    submit.disabled = false;
                    showError(error && error.name === 'AbortError' ? messages.timeout : messages.unknown);
                });
            });
        })();
    </script>
@endpush
