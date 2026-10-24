@extends('layouts.home')
@section('title', __('Ads'))
@section('meta_title', __('Ads'))
@section('meta_description', __('Viens-Yamo The giant of escort girls and boys'))
@section('meta_image', asset('assets/meta/home.png'))

@section('content')
    @php
        $quarters = $quarters ?? [];
        $allAds = $allAds ?? [];
        $ads = $ads ?? [];
        $sponsored = array_values(array_filter($allAds, fn ($ad) => (int) ($ad['subscribe_id'] ?? 0) !== 0));
    @endphp

    <div class="mx-auto max-w-6xl px-4 py-6 pb-28">
        <p class="font-semibold">
            {{ __('Sponsored Ads') }}
            <span class="ml-2 text-sm font-normal text-[oklch(0.4_0.03_35)]">{{ count($allAds) }} {{ __('results') }}</span>
        </p>

        @if (count($sponsored))
            <div class="no-scrollbar mt-4 flex gap-3 overflow-x-auto pb-2">
                @foreach ($sponsored as $allAd)
                    @php
                        $image = $allAd['images'][0]['id'] ?? ($allAd['images'][0]['path'] ?? null);
                        $username = $allAd['user']['username'] ?? '';
                        $href = $username !== '' ? route('ads.details', ['username' => $username, 'slug' => $allAd['slug']]) : '#';
                    @endphp
                    <a href="{{ $href }}" class="w-[120px] shrink-0">
                        <span class="block h-[100px] overflow-hidden border border-line bg-ink">
                            @if ($image)
                                <img src="{{ route('display.ads.image', ['id' => $allAd['id'], 'path' => $image]) }}" alt="" loading="lazy" class="h-full w-full object-cover">
                            @endif
                        </span>
                        <span class="mt-1 block text-center text-[11px] text-[oklch(0.4_0.03_35)]">{{ $allAd['age'] }} - {{ ucfirst($allAd['town']['town_name'] ?? '') }}</span>
                    </a>
                @endforeach
            </div>
        @endif

        <details class="mt-6 md:hidden">
            <summary class="flex cursor-pointer list-none items-center gap-2 border border-line bg-white px-4 py-3 font-semibold [&::-webkit-details-marker]:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M3 5h18l-7 8v5l-4 2v-7L3 5z"/></svg>
                {{ __('Filters') }}
            </summary>
            <form method="get" action="{{ route('ads.filter') }}" class="mt-3 space-y-3 border border-line bg-white p-4">
                @include('ads._filters')
            </form>
        </details>

        <form method="get" action="{{ route('ads.filter') }}" class="mt-6 hidden gap-3 md:flex">
            @include('ads._filters')
        </form>

        <p class="mt-8 font-semibold">
            {{ __('Browse') }} {{ count($allAds) }} {{ __('Ads') }}
            <span class="ml-2 text-sm font-normal text-[oklch(0.4_0.03_35)]">{{ count($allAds) }} results</span>
        </p>

        @if (count($ads))
            <div class="mt-6 grid grid-cols-2 gap-4 md:grid-cols-1 md:gap-6">
                @foreach ($ads as $ad)
                    @include('ads._card', ['ad' => $ad])
                @endforeach
            </div>
            @include('ads._pagination')
        @endif
    </div>
@endsection
