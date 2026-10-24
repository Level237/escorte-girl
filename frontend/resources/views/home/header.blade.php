@php
    $dashboard = null;
    if (isset($user)) {
        $dashboard = match ((int) $user->role_id) {
            1 => route('admin.dashboard'),
            2 => route('db.escort.index'),
            3 => route('db.customer.index'),
            default => null,
        };
    }
    $lang = app()->getLocale();
@endphp

<header class="border-b border-line bg-paper">
    <div class="mx-auto hidden max-w-6xl items-center justify-between gap-4 px-4 py-2 text-sm md:flex">
        <div class="flex items-center gap-3">
            <a href="{{ route('lang', ['locale' => 'fr']) }}" class="{{ $lang === 'fr' ? 'font-semibold' : 'opacity-60' }}">FR</a>
            <a href="{{ route('lang', ['locale' => 'en']) }}" class="{{ $lang === 'en' ? 'font-semibold' : 'opacity-60' }}">EN</a>
        </div>
        <form method="get" action="{{ route('search') }}" class="min-w-0 flex-1">
            <label class="relative block">
                <span class="sr-only">{{ __('Search') }}</span>
                <input type="text" name="s" required autocomplete="on" placeholder="{{ __('Search') }}"
                    class="w-full rounded-full border border-line bg-white px-4 py-2 pr-12 text-base outline-none focus:border-ink">
                <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 rounded-full px-2 py-1" aria-label="{{ __('Search') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>
            </label>
        </form>
        <nav class="flex items-center gap-4">
            @if (! isset($user))
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                <a href="/register">{{ __('Register') }}</a>
            @else
                @if ($dashboard)
                    <a href="{{ $dashboard }}">{{ __('Dashboard') }}</a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">{{ __('Logout') }}</button>
                </form>
            @endif
        </nav>
    </div>

    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 md:py-4">
        <a href="{{ route('homepage') }}" class="shrink-0">
            <img src="{{ asset('assets/images/logo-vy.png') }}" alt="Viens Yamo" class="h-10 w-auto md:h-16">
        </a>
        <nav class="hidden items-center gap-6 text-base font-semibold md:flex">
            <a href="{{ route('ads.list') }}">{{ __('Ads') }}</a>
            <a href="{{ route('escort.list') }}">{{ __('ESCORTS') }}</a>
            @if (! isset($user))
                <a href="https://api.whatsapp.com/send?phone=18328820957&text=Hello j'ai besoin d'aide pour m'inscrire" target="_blank" rel="noopener">{{ __('Need help registering?') }}</a>
            @endif
            @if (isset($user) && (int) $user->role_id === 3 && $subscribeOrNot === 0)
                <a href="{{ route('upgrade-plan', ['membership' => 'null']) }}" class="rounded-full bg-coral px-3 py-2 text-sm text-paper">Upgrade plan</a>
            @endif
        </nav>
        <details class="relative md:hidden">
            <summary class="flex h-10 w-10 list-none items-center justify-center rounded-full border border-line [&::-webkit-details-marker]:hidden">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </summary>
            <div class="absolute right-0 z-40 mt-2 w-56 rounded-2xl border border-line bg-paper p-4 shadow-lg">
                <div class="mb-3 flex gap-3 text-sm">
                    <a href="{{ route('lang', ['locale' => 'fr']) }}" class="{{ $lang === 'fr' ? 'font-semibold' : 'opacity-60' }}">FR</a>
                    <a href="{{ route('lang', ['locale' => 'en']) }}" class="{{ $lang === 'en' ? 'font-semibold' : 'opacity-60' }}">EN</a>
                </div>
                @if (! isset($user))
                    <a class="block py-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="block py-2" href="/register">{{ __('Register') }}</a>
                @else
                    @if ($dashboard)
                        <a class="block py-2" href="{{ $dashboard }}">{{ __('Dashboard') }}</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="py-2">
                        @csrf
                        <button type="submit">{{ __('Logout') }}</button>
                    </form>
                @endif
                <a class="block py-2" href="{{ route('homepage') }}">{{ __('HOME') }}</a>
                <a class="block py-2" href="{{ route('ads.list') }}">{{ __('Ads') }}</a>
                <a class="block py-2" href="{{ route('escort.list') }}">{{ __('ESCORTS') }}</a>
                <a class="block py-2" href="{{ route('contact') }}">Contact</a>
                <a class="block py-2" href="{{ route('ads.create') }}">{{ __('Create ad') }}</a>
            </div>
        </details>
    </div>
</header>
