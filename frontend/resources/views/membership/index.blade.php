@extends('layouts.home')
@section('title', __('Subscribe to an Escort Plan'))
@section('meta_title', __('Subscribe to a Plan'))
@section('meta_description', __('Subscribe to a Plan'))
@section('meta_image', asset('assets/meta/home.png'))

@section('content')
    @php
        $plans = array_values(array_filter($memberships ?? [], fn ($plan) => (int) ($plan['id'] ?? 0) !== 4));
        $selected = null;
        if (is_string($membership) && $membership !== 'null') {
            $parts = explode('.', $membership);
            if (count($parts) >= 3) {
                $selected = [
                    'id' => $parts[0],
                    'name' => $parts[1],
                    'price' => $parts[2],
                ];
            }
        }
        $balance = $userBalance ?? ($user->balance ?? 0);
        $accents = [
            1 => ['label' => 'PREMIUM', 'card' => 'border-ink', 'badge' => 'bg-ink text-paper'],
            2 => ['label' => 'GOLD', 'card' => 'border-gold', 'badge' => 'bg-gold text-ink'],
            3 => ['label' => 'ULTRA VIP', 'card' => 'border-coral', 'badge' => 'bg-coral text-paper'],
        ];
    @endphp

    <div class="mx-auto max-w-6xl px-4 py-10 pb-28">
        <p class="text-sm">
            <a href="{{ route('db.escort.ads') }}" class="underline decoration-coral underline-offset-4">{{ __('My Ads') }}</a>
            <span class="opacity-50"> / </span>
            <span>{{ __('Subscribe to a Plan') }}</span>
        </p>

        <h1 class="mt-6 text-3xl font-bold tracking-tight md:text-4xl">{{ __('Subscribe to a Plan') }}</h1>
        <p class="mt-2 max-w-2xl text-sm text-[oklch(0.4_0.03_35)]">{{ __('Subscribe to a Plan') }}.</p>

        @if ($errors->any())
            <p class="mt-4 border border-coral bg-white px-4 py-3 text-sm text-coral">{{ $errors->first() }}</p>
        @endif

        <div class="mt-8 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($plans as $plan)
                @php
                    $tier = $accents[(int) $plan['id']] ?? ['label' => strtoupper($plan['membership_name'] ?? ''), 'card' => 'border-line', 'badge' => 'bg-line text-ink'];
                    $period = (int) ($plan['period'] ?? 30);
                @endphp
                <a href="{{ route('show.plan', ['id' => $plan['id'], 'adsId' => $id]) }}" class="block border bg-white p-6 {{ $tier['card'] }}">
                    <span class="inline-block rounded-full px-3 py-1 text-[11px] font-semibold {{ $tier['badge'] }}">{{ $tier['label'] }}</span>
                    <p class="mt-4 text-3xl font-bold">{{ number_format((int) $plan['price']) }} <span class="text-base font-semibold">XAF</span></p>
                    <p class="mt-1 text-sm text-[oklch(0.4_0.03_35)]">{{ $period }} {{ __('days') }}</p>
                    <p class="mt-4 text-sm font-semibold">{{ __('Subscription') }} {{ $plan['membership_name'] }}</p>
                    <span class="mt-6 inline-block rounded-full bg-coral px-4 py-2 text-sm font-semibold text-paper">{{ __('Boost') }}</span>
                </a>
            @empty
                <p class="border border-line bg-white px-4 py-6 text-sm">{{ __('No subscription: Your ad will be deleted by') }} 14 {{ __('days') }}</p>
            @endforelse
        </div>

        <p class="mt-6 border border-line bg-white px-4 py-3 text-sm">
            ⏱ {{ __('No subscription: Your ad will be deleted by') }} <span class="font-semibold">14 {{ __('days') }}</span>
        </p>

        <div class="mt-10 overflow-x-auto border border-line bg-white">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-ink text-paper">
                    <tr>
                        <th class="px-4 py-3 font-semibold">{{ __('None') }}</th>
                        <th class="px-4 py-3 font-semibold">Premium</th>
                        <th class="px-4 py-3 font-semibold">Gold</th>
                        <th class="px-4 py-3 font-semibold">Ultra VIP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-line">
                        <td class="px-4 py-3">XAF 0</td>
                        <td class="px-4 py-3">XAF 3k</td>
                        <td class="px-4 py-3">XAF 5k</td>
                        <td class="px-4 py-3">XAF 10k</td>
                    </tr>
                    <tr class="border-t border-line">
                        <td class="px-4 py-3">{{ __('Pictures') }}</td>
                        <td class="px-4 py-3">{{ __('Pictures') }}</td>
                        <td class="px-4 py-3">{{ __('Pictures') }}</td>
                        <td class="px-4 py-3">{{ __('Pictures') }}</td>
                    </tr>
                    <tr class="border-t border-line">
                        <td class="px-4 py-3 opacity-50">{{ __('Profile') }}</td>
                        <td class="px-4 py-3">{{ __('Profile') }}</td>
                        <td class="px-4 py-3">{{ __('Profile') }}</td>
                        <td class="px-4 py-3">{{ __('Profile') }}</td>
                    </tr>
                    <tr class="border-t border-line">
                        <td class="px-4 py-3 opacity-50">{{ __('Banners') }}</td>
                        <td class="px-4 py-3 opacity-50">{{ __('Banners') }}</td>
                        <td class="px-4 py-3">{{ __('Banners') }}</td>
                        <td class="px-4 py-3">{{ __('Your Ad on the home page') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a href="{{ route('db.escort.ads') }}" class="mt-8 inline-block w-full border border-line bg-white px-4 py-3 text-center text-sm font-semibold">{{ __('Not now!') }}</a>
    </div>

    @if ($selected)
        <div id="pay-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-[oklch(0.2_0.02_35/0.72)] p-4">
            <div class="mx-auto w-full max-w-md overflow-y-auto bg-paper p-4 sm:p-6" role="dialog" aria-modal="true">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-coral">{{ __('Subscription') }} {{ $selected['name'] }}</p>
                        <p class="mt-1 text-2xl font-bold md:text-3xl">{{ number_format((int) $selected['price']) }} XAF</p>
                    </div>
                    <a href="{{ route('membership.display', ['adsId' => $id, 'membership' => 'null']) }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-line text-sm font-semibold">X</a>
                </div>

                <div id="pay-spinner" class="mt-8 hidden text-center text-sm text-[oklch(0.4_0.03_35)]">
                    {{ __('Redirecting to a secure payment page') }}...
                </div>

                <div id="pay-wrap" class="mt-6 space-y-3">
                    @if ((int) $balance >= (int) $selected['price'])
                        <form method="post" action="{{ route('purchase-with-credit') }}" data-pay-form>
                            @csrf
                            <input type="hidden" name="membership_id" value="{{ $selected['id'] }}">
                            <input type="hidden" name="announcement_id" value="{{ $id }}">
                            <button type="submit" class="flex w-full items-center justify-between border border-line bg-white px-4 py-3 text-left">
                                <span>
                                    <span class="block text-sm font-semibold">{{ __('Use my credit number') }}</span>
                                    <span class="mt-1 block text-xs text-[oklch(0.4_0.03_35)]">{{ __('Credit') }} · {{ $balance }} {{ __('credits') }}</span>
                                </span>
                                <span class="text-sm">→</span>
                            </button>
                        </form>
                    @endif

                    <form method="post" action="{{ route('init-cool-pay') }}" data-pay-form>
                        @csrf
                        <input type="hidden" name="price" value="{{ $selected['price'] }}">
                        <input type="hidden" name="membership_id" value="{{ $selected['id'] }}">
                        <input type="hidden" name="announcement_id" value="{{ $id }}">
                        <button type="submit" class="flex w-full items-center justify-between border border-line bg-white px-4 py-3 text-left">
                            <span class="flex items-center gap-3">
                                <img src="{{ asset('assets/images/coolpay.png') }}" alt="" class="h-10 w-auto">
                                <span class="text-sm font-semibold">Mobile money Cool Pay</span>
                            </span>
                            <span class="text-sm">→</span>
                        </button>
                    </form>

                    <p class="flex items-center gap-2 pt-2 text-xs text-[oklch(0.4_0.03_35)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        {{ __('All payment pages are secured using SSL') }}
                    </p>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('[data-pay-form]').forEach(function (form) {
            form.addEventListener('submit', function () {
                var spinner = document.getElementById('pay-spinner');
                var wrap = document.getElementById('pay-wrap');
                if (spinner) spinner.classList.remove('hidden');
                if (wrap) wrap.classList.add('hidden');
            });
        });
    </script>
@endpush
