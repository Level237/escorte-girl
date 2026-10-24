@php
    $image = $ad['images'][0]['id'] ?? ($ad['images'][0]['path'] ?? null);
    $town = $ad['town']['town_name'] ?? '';
    $quarter = $ad['quarter']['quarter_name'] ?? '';
    $username = $ad['user']['username'] ?? '';
    $verified = ! empty($ad['user']['isVerify']) || ! empty($ad['user']['is_verified']);
    $href = $username !== '' ? route('ads.details', ['username' => $username, 'slug' => $ad['slug']]) : '#';
    $tier = (int) ($ad['subscribe_id'] ?? 0);
@endphp
<article class="overflow-hidden border border-line bg-white">
    <a href="{{ $href }}" class="relative block">
        @if ($image)
            <img src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $image]) }}" alt="" class="aspect-[3/4] w-full object-cover">
        @else
            <div class="aspect-[3/4] w-full bg-line"></div>
        @endif
        <span class="absolute left-3 top-3 rounded-full bg-lilac px-2 py-1 text-xs font-semibold">{{ $ad['age'] }} {{ __('Years') }}</span>
        <span class="absolute right-3 top-3 flex flex-col items-end gap-1">
            @if ($tier === 3)
                <span class="rounded-full bg-coral px-2 py-1 text-[11px] font-semibold text-paper">ULTRA VIP</span>
            @elseif ($tier === 2)
                <span class="rounded-full bg-gold px-2 py-1 text-[11px] font-semibold text-ink">GOLD</span>
            @endif
            @if ($verified)
                <span class="rounded-full bg-coral px-2 py-1 text-[11px] font-semibold text-paper">{{ __('Verified') }}</span>
            @endif
        </span>
    </a>
    <div class="space-y-2 p-4">
        <a href="{{ $href }}" class="block text-lg font-semibold leading-snug">{{ \Illuminate\Support\Str::limit($ad['title'] ?? '', 48) }}</a>
        <p class="text-sm text-[oklch(0.4_0.03_35)]">{{ ucfirst($quarter) }}{{ $quarter && $town ? ', ' : '' }}{{ ucfirst($town) }}</p>
        <p class="text-sm"><span class="font-semibold">{{ __('Accepted Customer') }} :</span> {{ $ad['accepted'] ?? '' }}</p>
        <p class="text-sm"><span class="font-semibold">{{ __('Location') }} :</span> {{ $ad['location'] ?? '' }}</p>
        <p class="text-sm leading-6 text-[oklch(0.38_0.03_35)]">{{ \Illuminate\Support\Str::limit($ad['description'] ?? '', 110) }}</p>
    </div>
</article>
