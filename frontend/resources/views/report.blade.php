@php
    $isAd = ($type ?? '') === 'ads';
    $title = $isAd ? __('Report this ad') : __('Report this profile');
@endphp
@extends('layouts.home')
@section('title', $title)
@section('meta_title', $title)
@section('meta_description', __('Report the ad below with proof if you are the victim of an attempted scam.'))
@section('meta_image', asset('assets/meta/home.png'))

@section('content')
    <div class="mx-auto max-w-3xl px-4 py-10 pb-28">
        <p class="text-sm">
            <a href="{{ route('homepage') }}" class="underline decoration-coral underline-offset-4">{{ __('Home page') }}</a>
            <span class="opacity-50"> / </span>
            <a href="{{ route('ads.list') }}" class="underline decoration-coral underline-offset-4">{{ __('Ads') }}</a>
            <span class="opacity-50"> / </span>
            <span>{{ $title }}</span>
        </p>

        <h1 class="mt-6 text-3xl font-bold tracking-tight md:text-4xl">{{ $title }}</h1>
        <p class="mt-3 max-w-xl text-sm leading-6 text-[oklch(0.4_0.03_35)]">
            {{ __('If this listing looks fraudulent or contains illegal, inappropriate, racist, spam or abusive content, report it here.') }}
        </p>

        @if (session('success'))
            <p class="mt-6 border border-line bg-lilac px-4 py-3 text-sm">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            <p class="mt-6 border border-coral bg-white px-4 py-3 text-sm text-coral">{{ $errors->first() }}</p>
        @endif

        <form action="{{ route('report.store') }}" method="post" enctype="multipart/form-data" class="mt-8 space-y-4 border border-line bg-white p-5 md:p-8">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <input type="hidden" name="type" value="{{ $type }}">

            <div class="grid gap-4 sm:grid-cols-2">
                <label class="block text-sm">
                    <span class="font-semibold">{{ __('Full name') }}</span>
                    <input type="text" name="name" value="{{ old('name') }}" required class="mt-2 w-full border border-line bg-paper px-3 py-2 outline-none focus:border-coral">
                </label>
                <label class="block text-sm">
                    <span class="font-semibold">{{ __('Phone') }}</span>
                    <input type="text" name="phone" value="{{ old('phone') }}" required class="mt-2 w-full border border-line bg-paper px-3 py-2 outline-none focus:border-coral">
                </label>
            </div>

            <label class="block text-sm">
                <span class="font-semibold">{{ __('Add proof (screenshot, conversation, etc.)') }}</span>
                <input type="file" name="myfile" accept="image/jpeg,image/png,image/jpg" required class="mt-2 w-full border border-line bg-paper px-3 py-2 text-sm file:mr-3 file:border-0 file:bg-coral file:px-3 file:py-1 file:text-sm file:font-semibold file:text-paper">
            </label>

            <label class="block text-sm">
                <span class="font-semibold">{{ __('Your message') }}</span>
                <textarea name="message" required rows="6" class="mt-2 w-full border border-line bg-paper px-3 py-2 outline-none focus:border-coral">{{ old('message') }}</textarea>
            </label>

            @if (config('services.recaptcha.key'))
                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
            @endif

            <button type="submit" class="rounded-full bg-coral px-6 py-3 text-sm font-semibold text-paper">{{ $title }}</button>
        </form>
    </div>
    @if (config('services.recaptcha.key'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
@endsection
