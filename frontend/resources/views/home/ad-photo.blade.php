@php
    $image = $ad['images'][0]['id'] ?? ($ad['images'][0]['path'] ?? null);
    $town = $ad['town']['town_name'] ?? '';
    $username = $ad['user']['username'] ?? '';
    $verified = ! empty($ad['user']['isVerify']) || ! empty($ad['user']['is_verified']);
    $href = $username !== '' ? route('ads.details', ['username' => $username, 'slug' => $ad['slug']]) : '#';
    $frame = $frame ?? 'aspect-[3/4]';
@endphp
<a href="{{ $href }}" class="group relative block min-w-0 overflow-hidden bg-ink">
    <span class="relative block h-[190px] overflow-hidden bg-ink {{ $frame }}">
    @if ($image)
        <img src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $image]) }}" alt="{{ $ad['title'] ?? '' }}" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
    @endif
    <span class="absolute left-3 top-3 rounded-full bg-lilac px-2 py-1 text-xs font-semibold text-ink">{{ $ad['age'] }} {{ __('Years') }}</span>
    @if (($tier ?? '') === 'vip')
        <span class="absolute right-3 top-3 rounded-full bg-coral px-2 py-1 text-xs font-semibold text-paper">ULTRA VIP</span>
    @elseif (($tier ?? '') === 'gold')
        <span class="absolute right-3 top-3 rounded-full bg-gold px-2 py-1 text-xs font-semibold text-ink">GOLD</span>
    @endif
    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[oklch(0.24_0.03_35/0.92)] to-transparent p-4 text-paper">
        <span class="block text-sm font-semibold">{{ \Illuminate\Support\Str::limit($ad['title'] ?? '', 42) }}</span>
        <span class="mt-1 block text-xs text-[oklch(0.975_0.012_55/0.82)]">{{ ucfirst($town) }}</span>
        @if ($verified)
            <span class="mt-2 inline-block rounded-full bg-coral px-2 py-0.5 text-[11px] font-semibold">{{ __('Verified') }}</span>
        @endif
    </span>
    </span>
</a>
