@extends('layouts.home')
@section('title', 'Viens Yamo')
@section('meta_title', "Annonces d'escortes girls au cameroun")
@section('meta_description', "Viens-Yamo Le géant de l'escorte girls et boys")
@section('meta_image', asset('assets/meta/home.png'))

@section('content')
    @if (isset($banners))
        @foreach ($banners as $banner)
            @if (($banner['position'] ?? '') === 'header_promo' && (int) ($banner['status'] ?? 0) === 1)
                <div class="mx-auto max-w-6xl px-4 pt-6">
                    <img src="{{ route('display.banner', ['id' => $banner['id']]) }}" alt="" class="w-full">
                </div>
            @endif
        @endforeach
    @endif

    <section class="mx-auto max-w-6xl px-4 pb-8 pt-6">
        <form method="get" action="{{ route('search') }}" class="md:hidden">
            <label class="relative block">
                <span class="sr-only">{{ __('Search') }}</span>
                <input type="text" name="s" required placeholder="{{ __('Search') }}" class="w-full rounded-full border border-line bg-white px-4 py-3 pr-12 outline-none focus:border-ink">
                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2" aria-label="{{ __('Search') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>
            </label>
        </form>

        <p class="mt-6 text-lg font-semibold">{{ __('Viens-Yamo The giant of escort girls and boys') }}</p>

        @if (isset($numberAdsByTowns) && count($numberAdsByTowns))
            <ul class="mt-4 flex flex-wrap gap-2">
                @foreach ($numberAdsByTowns as $town)
                    @if ($loop->index < 3)
                        <li>
                            <a href="{{ route('ads.town', ['id' => $town['town_id'] ?? $town['id']]) }}" class="inline-block rounded-full border border-line bg-white px-3 py-1.5 text-sm">
                                {{ $town['town_name'] }} ({{ $town['totalAnnounces'] }})
                            </a>
                        </li>
                    @endif
                @endforeach
                <li>
                    <a href="{{ route('adstown') }}" class="inline-block rounded-full border border-ink px-3 py-1.5 text-sm font-semibold">Autres villes</a>
                </li>
            </ul>
        @endif

        <a href="https://api.whatsapp.com/send?phone=18328820957&text=Hello j'ai besoin d'aide pour m'inscrire" target="_blank" rel="noopener" class="mt-5 inline-block rounded-full bg-coral px-4 py-2 text-sm font-semibold text-paper md:hidden">
            {{ __('Need help registering? click here') }}
        </a>
    </section>

    @if (! session()->has('checkAge'))
        <div id="age-gate" class="fixed inset-0 z-50 flex items-center justify-center bg-[oklch(0.2_0.02_35/0.72)] px-4">
            <div class="w-full max-w-md bg-ink px-6 py-8 text-center text-paper" role="dialog" aria-modal="true" aria-labelledby="age-title">
                <p id="age-title" class="text-6xl font-bold text-coral">21+</p>
                <p class="mt-4 text-sm leading-6">
                    {{ __('Viens-Yamo The giant of escort girls and boys') }}<br>
                    {{ __('This site uses cookies only to analyze traffic') }}
                </p>
                <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                    <a href="https://www.google.com" class="rounded-full border border-paper px-4 py-2 text-sm">{{ __('LEAVE') }}</a>
                    <button type="button" id="age-accept" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold text-paper">{{ __('I AM AT LEAST 21 YEARS OLD') }}</button>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('age-accept').addEventListener('click', function () {
                var gate = document.getElementById('age-gate');
                if (gate) gate.remove();
                fetch('/check-age', { headers: { 'Accept': 'text/plain' }, credentials: 'same-origin' });
            });
        </script>
    @endif

    @if (count($vipAds ?? []))
        <section class="bg-ink py-12 text-paper">
            <div class="mx-auto max-w-6xl px-4">
                <h1 class="text-4xl font-bold tracking-tight sm:text-5xl">{{ __('ULTRA VIP Ads') }}</h1>
                @include('home.carousel', [
                    'items' => $vipAds,
                    'perSlide' => 2,
                    'interval' => 5000,
                    'tier' => 'vip',
                    'cols' => 'grid-cols-2',
                    'wrap' => 'mx-auto max-w-xl',
                    'frame' => 'h-[190px] md:h-[360px]',
                ])
            </div>
        </section>
    @endif

    @if (isset($banners))
        @foreach ($banners as $banner)
            @if (($banner['position'] ?? '') === 'home_top' && (int) ($banner['status'] ?? 0) === 1)
                <div class="mx-auto max-w-6xl px-4 py-8">
                    <img src="{{ route('display.banner', ['id' => $banner['id']]) }}" alt="" class="w-full">
                </div>
            @endif
        @endforeach
    @endif

    @if (count($goldAds ?? []))
        <section class="mx-auto max-w-6xl px-4 py-12">
            <div class="flex items-end justify-between gap-4">
                <h2 class="text-3xl font-bold tracking-tight">{{ __('GOLD Ads') }}</h2>
                <a href="{{ route('ads.list', ['membership' => 2]) }}" class="text-sm font-semibold underline decoration-coral decoration-2 underline-offset-4">{{ __('See All') }}</a>
            </div>
            @include('home.carousel', ['items' => $goldAds, 'perSlide' => 4, 'interval' => 10000, 'tier' => 'gold'])
        </section>
    @endif

    @if (! count($vipAds ?? []) && ! empty($ads))
        <section class="bg-ink py-12 text-paper">
            <div class="mx-auto max-w-6xl px-4">
                <div class="flex items-end justify-between gap-4">
                    <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">{{ __('ULTRA VIP Ads') }}</h2>
                    <a href="{{ route('ads.list') }}" class="text-sm font-semibold underline decoration-coral decoration-2 underline-offset-4">{{ __('See All') }}</a>
                </div>
                @include('home.carousel', [
                    'items' => array_slice($ads, 0, 8),
                    'perSlide' => 2,
                    'interval' => 5000,
                    'tier' => '',
                    'cols' => 'grid-cols-2',
                    'wrap' => 'mx-auto max-w-xl',
                    'frame' => 'h-[190px] md:h-[360px]',
                ])
            </div>
        </section>
    @endif

    <section class="mx-auto max-w-6xl px-4">
        <div class="bg-coral px-6 py-10 text-center text-paper sm:px-12">
            <h2 class="text-3xl font-bold">{{ __('Warning') }}</h2>
            <p class="mx-auto mt-4 max-w-3xl text-base leading-7">
                {{ __('Publications on this site are made in a decentralized manner, and automatically by anyone wanting to sell their services for adults.By using the site you accept that the owner of the site is disclaimed from all possible responsibilities.whatever the nature. If you do not agree with certain contents of this site, please leave it urgently') }}
            </p>
            <a href="https://www.google.com" class="mt-6 inline-block rounded-full bg-ink px-5 py-2 text-sm font-semibold">{{ __('Leave Now') }}</a>
        </div>
    </section>

    @if (! empty($homeAds))
        <section class="mx-auto max-w-6xl px-4 py-14">
            <div class="flex items-end justify-between gap-4">
                <h2 class="text-3xl font-bold tracking-tight">{{ __('Featured Ads') }}</h2>
                <a href="{{ route('ads.list') }}" class="text-sm font-semibold underline decoration-coral decoration-2 underline-offset-4">{{ __('See All') }}</a>
            </div>
            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($homeAds as $ad)
                    @include('home.ad-feature', ['ad' => $ad])
                @endforeach
            </div>
        </section>
    @endif

    <section class="mx-auto hidden max-w-6xl px-4 py-10 md:block">
        <div class="flex items-center justify-between gap-6 bg-ink px-8 py-8 text-paper">
            <h2 class="text-2xl font-bold">{{ __('Create your free account today !') }}</h2>
            <a href="/register" class="rounded-full bg-paper px-5 py-3 text-sm font-semibold text-ink">{{ __('Register') }}</a>
        </div>
    </section>

    @if (isset($banners))
        @foreach ($banners as $banner)
            @if (($banner['position'] ?? '') === 'home_bottom' && (int) ($banner['status'] ?? 0) === 1)
                <div class="mx-auto max-w-6xl px-4 pb-8">
                    <img src="{{ route('display.banner', ['id' => $banner['id']]) }}" alt="" class="w-full">
                </div>
            @endif
        @endforeach
    @endif

    <section class="mx-auto grid max-w-6xl items-center gap-8 px-4 pb-24 md:grid-cols-2">
        <img src="{{ asset('assets/images/nake-girl.jpg') }}" alt="" class="max-h-[28rem] w-full object-cover">
        <div>
            <h2 class="text-3xl font-bold tracking-tight">{{ __('We connect you with girls and guys nearby!') }}</h2>
            <p class="mt-4 max-w-prose text-base leading-7">
                {{ __("Whether you're looking for a captivating evening companion, a lovely date for a special event, a qualified masseuse, or if you want to spend very exciting and pleasant moments our escort directories you offers a multitude of options to meet your desires. Your next memorable experience is just a few clicks away.") }}
            </p>
            <a href="{{ route('ads.list') }}" class="mt-6 inline-block rounded-full bg-coral px-5 py-3 text-sm font-semibold text-paper">{{ __('Ads') }}</a>
        </div>
    </section>

    <script>
        document.querySelectorAll('[data-home-carousel]').forEach(function (root) {
            var track = root.querySelector('[data-track]');
            var slides = track ? track.children : [];
            if (slides.length < 2) return;
            var index = 0;
            var timer = null;
            var interval = parseInt(root.getAttribute('data-interval') || '5000', 10);
            var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function go(next) {
                index = (next + slides.length) % slides.length;
                var width = track.parentElement ? track.parentElement.clientWidth : 0;
                track.style.transform = 'translateX(-' + (index * width) + 'px)';
                root.querySelectorAll('[data-dot]').forEach(function (dot, dotIndex) {
                    dot.classList.toggle('opacity-40', dotIndex !== index);
                });
            }
            window.addEventListener('resize', function () { go(index); });

            function start() {
                stop();
                if (reduced) return;
                timer = setInterval(function () { go(index + 1); }, interval);
            }

            function stop() {
                if (timer) clearInterval(timer);
            }

            root.querySelector('[data-next]').addEventListener('click', function () { go(index + 1); start(); });
            root.querySelector('[data-prev]').addEventListener('click', function () { go(index - 1); start(); });
            root.querySelectorAll('[data-dot]').forEach(function (dot, dotIndex) {
                dot.addEventListener('click', function () { go(dotIndex); start(); });
            });
            root.addEventListener('mouseenter', stop);
            root.addEventListener('mouseleave', start);
            start();
        });
    </script>
@endsection
