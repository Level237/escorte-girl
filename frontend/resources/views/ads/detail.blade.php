@php
    $images = $ad['images'] ?? [];
    $cover = $images[0]['id'] ?? ($images[0]['path'] ?? null);
    $town = $ad['town']['town_name'] ?? '';
    $quarter = $ad['quarter']['quarter_name'] ?? '';
    $tier = (int) ($ad['subscribe_id'] ?? 0);
    $verified = ! empty($ad['user']['isVerify']) || ! empty($ad['user']['is_verified']);
    $canSeeVip = isset($user) && (int) $subscribeOrNot === 1;
    $whatsapp = 'https://api.whatsapp.com/send?phone='.($ad['whatsapp'] ?? '').'&text='.rawurlencode('Bonjour '.($ad['title'] ?? '')." je suis intéressé par ta publication sur viens-yamo.com");
    $tierLabel = match ($tier) {
        3 => 'ULTRA VIP',
        2 => 'GOLD',
        1 => 'PREMIUM',
        default => null,
    };
@endphp
@extends('layouts.home')
@section('title', ucfirst($ad['title'] ?? 'Viens Yamo'))
@section('meta_title', ucfirst($ad['title'] ?? ''))
@section('meta_description', \Illuminate\Support\Str::limit($ad['description'] ?? '', 160))
@section('meta_image', $cover ? route('display.ads.image', ['id' => $ad['id'], 'path' => $cover]) : asset('assets/meta/home.png'))

@section('content')
    <article class="mx-auto max-w-6xl px-4 py-8 pb-28">
        <p class="text-sm">
            <a href="{{ route('homepage') }}" class="underline decoration-coral underline-offset-4">{{ __('Home page') }}</a>
            <span class="opacity-50"> / </span>
            <a href="{{ route('ads.list') }}" class="underline decoration-coral underline-offset-4">{{ __('Ads') }}</a>
            <span class="opacity-50"> / </span>
            <span>{{ \Illuminate\Support\Str::limit($ad['title'] ?? '', 40) }}</span>
        </p>

        <div class="mt-6 grid gap-8 lg:grid-cols-[1.2fr_0.8fr]">
            <div>
                <div class="mx-auto w-[min(100%,17.5rem)] overflow-hidden bg-ink md:w-full">
                    @if ($cover)
                        <img id="ad-main" src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $cover]) }}" alt="{{ $ad['title'] ?? '' }}" class="h-[240px] w-full object-cover md:h-auto md:aspect-[4/5]">
                    @else
                        <div id="ad-main-empty" class="h-[240px] bg-ink md:aspect-[4/5] md:h-auto"></div>
                    @endif
                    <video id="ad-video" class="hidden h-[240px] w-full object-cover md:h-auto md:aspect-[4/5]" controls playsinline></video>
                </div>
                @if (count($images) > 1 || ! empty($ad['video']))
                    <div class="mx-auto mt-3 grid w-[min(100%,17.5rem)] grid-cols-4 gap-2 sm:grid-cols-5 md:w-full">
                        @foreach ($images as $image)
                            @php $path = $image['id'] ?? ($image['path'] ?? null); @endphp
                            @if ($path)
                                <button type="button" data-kind="image" data-src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $path]) }}" class="overflow-hidden bg-line">
                                    <img src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $path]) }}" alt="" class="aspect-square w-full object-cover">
                                </button>
                            @endif
                        @endforeach
                        @if (! empty($ad['video']))
                            <button type="button" data-kind="video" data-src="{{ route('displayVideo', ['id' => $ad['id'], 'path' => $ad['video']]) }}" class="relative overflow-hidden bg-ink">
                                @if ($cover)
                                    <img src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $cover]) }}" alt="" class="aspect-square w-full object-cover opacity-70">
                                @else
                                    <span class="block aspect-square w-full bg-ink"></span>
                                @endif
                                <span class="absolute inset-0 flex items-center justify-center">
                                    <span class="rounded-full bg-coral px-2 py-1 text-[10px] font-semibold uppercase tracking-wide text-paper">{{ __('Video') }}</span>
                                </span>
                            </button>
                        @endif
                    </div>
                @endif
            </div>

            <div>
                <div class="flex flex-wrap items-center gap-2">
                    <span class="rounded-full bg-lilac px-3 py-1 text-xs font-semibold">{{ $ad['age'] }} {{ __('Years') }}</span>
                    @if ($tierLabel)
                        <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $tier === 3 ? 'bg-coral text-paper' : ($tier === 2 ? 'bg-gold text-ink' : 'bg-ink text-paper') }}">{{ $tierLabel }}</span>
                    @endif
                    @if ($verified)
                        <span class="rounded-full bg-coral px-3 py-1 text-xs font-semibold text-paper">{{ __('Verified') }}</span>
                    @endif
                </div>
                <h1 class="mt-4 text-2xl font-bold tracking-tight md:text-4xl">{{ $ad['title'] ?? '' }}</h1>
                <p class="mt-2 text-sm text-[oklch(0.4_0.03_35)]">{{ $ad['category']['title'] ?? ($ad['category']['name'] ?? '') }}</p>
                <p class="mt-2 text-sm text-[oklch(0.4_0.03_35)]">{{ ucfirst($quarter) }}{{ $quarter && $town ? ', ' : '' }}{{ ucfirst($town) }}</p>
                <p class="mt-3 text-sm"><span class="font-semibold">{{ __('Accepted Customer') }} :</span> {{ $ad['accepted'] ?? '' }}</p>
                <p class="mt-1 text-sm"><span class="font-semibold">{{ __('Location') }} :</span> {{ $ad['location'] ?? '' }}</p>
                <p class="mt-1 text-sm">{{ $ad['visits'] ?? 0 }} {{ __('views') }}</p>

                <div class="mt-6 space-y-3">
                    <p class="font-semibold">{{ __('Contact escort') }}</p>
                    @if ($tier === 3)
                        @if ($canSeeVip)
                            <button type="button" id="show-phone" class="block w-full rounded-full bg-coral px-4 py-3 text-center text-sm font-semibold text-paper">
                                <span data-masked>+237 6*** ***</span>
                                <span class="hidden" data-full>+ {{ $ad['whatsapp'] }}</span>
                            </button>
                            <a href="{{ $whatsapp }}" target="_blank" rel="noopener nofollow" class="block w-full rounded-full bg-[#25D366] px-4 py-3 text-center text-sm font-semibold text-paper">{{ __('WhatsApp Me!') }}</a>
                        @elseif (isset($user))
                            <button type="button" data-open-gate class="block w-full rounded-full bg-coral px-4 py-3 text-center text-sm font-semibold text-paper">+237 6*** ***</button>
                            <button type="button" data-open-gate class="block w-full rounded-full bg-[#25D366] px-4 py-3 text-center text-sm font-semibold text-paper">{{ __('WhatsApp Me!') }}</button>
                        @else
                            <button type="button" data-open-gate class="block w-full rounded-full bg-coral px-4 py-3 text-center text-sm font-semibold text-paper">+237 6*** ***</button>
                            <a href="{{ route('upgrade-plan', ['membership' => 'null']) }}" class="block w-full rounded-full bg-[#25D366] px-4 py-3 text-center text-sm font-semibold text-paper">{{ __('WhatsApp Me!') }}</a>
                        @endif
                    @else
                        <button type="button" id="show-phone" class="block w-full rounded-full bg-coral px-4 py-3 text-center text-sm font-semibold text-paper">
                            <span data-masked>+237 6*** ***</span>
                            <span class="hidden" data-full>+ {{ $ad['whatsapp'] }}</span>
                        </button>
                        <a href="{{ $whatsapp }}" target="_blank" rel="noopener nofollow" class="block w-full rounded-full bg-[#25D366] px-4 py-3 text-center text-sm font-semibold text-paper">{{ __('WhatsApp Me!') }}</a>
                    @endif
                </div>

                <p class="mt-8 text-center text-sm font-semibold">{{ __("Don't forget to mention VIENS YAMO when you call!") }}</p>

                <div class="mt-6 border border-line p-4">
                    <p class="font-semibold">{{ __('AVOID SCAMS') }}</p>
                    <ul class="mt-3 space-y-3 text-sm leading-6">
                        <li>{{ __('NEVER pay for transportation to a customer you don\'t know.') }}</li>
                        <li>{{ __('NEVER make an advance payment without being with the person concerned') }}</li>
                        <li>{{ __('Do not trust a service that is too good to be true.') }}</li>
                        <li>{{ __('Report the ad below with proof if you are the victim of an attempted scam.') }}</li>
                    </ul>
                    <a href="{{ route('report', ['id' => $ad['id'], 'type' => 'ads']) }}" class="mt-4 inline-block rounded-full bg-coral px-4 py-2 text-sm font-semibold text-paper">{{ __('Report this ad') }}</a>
                </div>
            </div>
        </div>

        <section class="mt-10">
            <h2 class="text-xl font-bold md:text-2xl">{{ __('Description ad') }}</h2>
            <p class="mt-3 max-w-3xl whitespace-pre-line text-base leading-7">{{ $ad['description'] ?? '' }}</p>
        </section>

        <section class="mt-12 border-t border-line pt-10">
            <h2 class="text-xl font-bold md:text-2xl">{{ __('Comments') }}</h2>
            @if (isset($user) && (int) ($user->role_id ?? 0) === 3)
                <form method="post" action="{{ route('review.user', $ad['id']) }}" class="mt-6 max-w-xl space-y-3">
                    @csrf
                    <p class="text-sm font-semibold">{{ __('Rate this ad') }}</p>
                    <div class="flex flex-row-reverse justify-end gap-1">
                        @for ($i = 5; $i >= 1; $i--)
                            <input class="peer sr-only" type="radio" name="rating" value="{{ $i }}" id="star-{{ $i }}" {{ $i === 5 ? 'required' : '' }}>
                            <label for="star-{{ $i }}" class="cursor-pointer text-2xl text-line peer-checked:text-gold peer-hover:text-gold">★</label>
                        @endfor
                    </div>
                    <textarea name="comment" required rows="4" placeholder="{{ __('Comments') }}" class="w-full rounded-2xl border border-line bg-white px-4 py-3 outline-none focus:border-ink"></textarea>
                    <button type="submit" class="rounded-full bg-coral px-5 py-2 text-sm font-semibold text-paper">{{ __('Send') }}</button>
                </form>
            @endif

            <div class="mt-8 space-y-6">
                @forelse ($reviews ?? [] as $review)
                    <div class="border-b border-line pb-4">
                        <p class="font-semibold">{{ is_array($review['user'] ?? null) ? ($review['user']['username'] ?? '') : ($review['user'] ?? '') }}</p>
                        <p class="text-xs text-[oklch(0.45_0.03_35)]">{{ $review['created_at'] ?? '' }}</p>
                        <p class="mt-1 text-gold">{{ str_repeat('★', (int) ($review['stars'] ?? 0)) }}{{ str_repeat('☆', max(0, 5 - (int) ($review['stars'] ?? 0))) }}</p>
                        <p class="mt-2 text-sm leading-6">{{ $review['comment'] ?? '' }}</p>
                    </div>
                @empty
                    <p class="text-sm text-[oklch(0.4_0.03_35)]">{{ __('Most recent comments') }}</p>
                @endforelse
            </div>
        </section>

        @if (! empty($ads))
            <section class="mt-12">
                <h2 class="text-xl font-bold md:text-2xl">{{ __('Similar Ads') }}</h2>
                <div class="mt-6 grid grid-cols-2 gap-3 lg:grid-cols-4">
                    @foreach ($ads as $similar)
                        @php
                            $similarTier = match ((int) ($similar['subscribe_id'] ?? 0)) {
                                3 => 'vip',
                                2 => 'gold',
                                default => '',
                            };
                        @endphp
                        @include('home.ad-photo', ['ad' => $similar, 'tier' => $similarTier, 'frame' => 'h-[220px] md:h-[280px]'])
                    @endforeach
                </div>
            </section>
        @endif
    </article>

    <div id="vip-gate" class="fixed inset-0 z-50 hidden items-center justify-center bg-[oklch(0.2_0.02_35/0.72)] px-4">
        <div class="w-full max-w-md bg-ink p-6 text-center text-paper">
            <p class="text-lg font-semibold">{{ __('Contact escort') }}</p>
            <p class="mt-3 text-sm leading-6">{{ __("This feature is only available to members. To contact an ULTRA VIP escort, you must first create your 'member' account, then take out a subscription. Otherwise, contact Gold and Premium escorts instead.") }}</p>
            <div class="mt-6 flex flex-wrap justify-center gap-3">
                @if (isset($user))
                    <a href="{{ route('upgrade-plan', ['membership' => 'null']) }}" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold">{{ __('Subscribe Now') }}</a>
                @else
                    <a href="{{ route('login') }}" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold">{{ __('Login') }}</a>
                    <a href="/register" class="rounded-full border border-paper px-4 py-2 text-sm">{{ __('Register') }}</a>
                    <a href="{{ route('upgrade-plan', ['membership' => 'null']) }}" class="rounded-full bg-coral px-4 py-2 text-sm font-semibold">{{ __('Subscribe Now') }}</a>
                @endif
                <button type="button" id="vip-gate-close" class="rounded-full border border-paper px-4 py-2 text-sm">{{ __('Leave Now') }}</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('[data-kind]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var main = document.getElementById('ad-main');
                var empty = document.getElementById('ad-main-empty');
                var video = document.getElementById('ad-video');
                var kind = btn.getAttribute('data-kind');
                var src = btn.getAttribute('data-src');
                if (kind === 'video' && video) {
                    if (main) main.classList.add('hidden');
                    if (empty) empty.classList.add('hidden');
                    video.classList.remove('hidden');
                    video.src = src;
                    video.play();
                    return;
                }
                if (video) {
                    video.pause();
                    video.removeAttribute('src');
                    video.load();
                    video.classList.add('hidden');
                }
                if (empty) empty.classList.add('hidden');
                if (main && src) {
                    main.classList.remove('hidden');
                    main.src = src;
                }
            });
        });
        var phone = document.getElementById('show-phone');
        if (phone) {
            phone.addEventListener('click', function () {
                var masked = phone.querySelector('[data-masked]');
                var full = phone.querySelector('[data-full]');
                if (masked) masked.classList.add('hidden');
                if (full) full.classList.remove('hidden');
            });
        }
        var gate = document.getElementById('vip-gate');
        document.querySelectorAll('[data-open-gate]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                if (gate) {
                    gate.classList.remove('hidden');
                    gate.classList.add('flex');
                }
            });
        });
        var closeGate = document.getElementById('vip-gate-close');
        if (closeGate && gate) {
            closeGate.addEventListener('click', function () {
                gate.classList.add('hidden');
                gate.classList.remove('flex');
            });
        }
    </script>
@endsection
