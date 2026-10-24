@php
    $image = $ad['images'][0]['id'] ?? ($ad['images'][0]['path'] ?? null);
    $town = $ad['town']['town_name'] ?? '';
    $quarter = $ad['quarter']['quarter_name'] ?? '';
    $username = $ad['user']['username'] ?? '';
    $verified = ! empty($ad['user']['isVerify']) || ! empty($ad['user']['is_verified']);
    $href = $username !== '' ? route('ads.details', ['username' => $username, 'slug' => $ad['slug']]) : '#';
    $tier = (int) ($ad['subscribe_id'] ?? 0);
    $tierLabel = match ($tier) {
        3 => 'ULTRA VIP',
        2 => 'GOLD',
        1 => 'PREMIUM',
        default => null,
    };
    $category = $ad['category']['title'] ?? ($ad['category']['name'] ?? '');
@endphp
<article>
    <a href="{{ $href }}" class="md:hidden">
        <span class="relative block overflow-hidden bg-ink">
            @if ($image)
                <img src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $image]) }}" alt="" loading="lazy" class="h-[190px] w-full object-cover">
            @else
                <span class="block h-[190px] bg-ink"></span>
            @endif
            <span class="absolute left-2 top-2 rounded-full bg-lilac px-2 py-0.5 text-[10px] font-semibold text-ink">{{ $ad['age'] }} {{ __('Years') }}</span>
            @if ($tierLabel)
                <span class="absolute right-2 top-2 rounded-full px-2 py-0.5 text-[10px] font-semibold {{ $tier === 3 ? 'bg-coral text-paper' : ($tier === 2 ? 'bg-gold text-ink' : 'bg-ink text-paper') }}">{{ $tierLabel }}</span>
            @endif
            <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[oklch(0.24_0.03_35/0.92)] p-2 text-xs text-paper">{{ ucfirst($town) }}</span>
        </span>
        <span class="mt-2 block text-sm font-semibold">{{ \Illuminate\Support\Str::limit($ad['title'] ?? '', 18) }}</span>
        <span class="mt-1 block text-xs text-[oklch(0.4_0.03_35)]">{{ \Illuminate\Support\Str::limit($ad['description'] ?? '', 40) }}</span>
    </a>

    <div class="hidden gap-6 border border-line bg-white md:flex">
        <a href="{{ $href }}" class="relative w-[220px] shrink-0 overflow-hidden bg-ink">
            @if ($image)
                <img src="{{ route('display.ads.image', ['id' => $ad['id'], 'path' => $image]) }}" alt="" loading="lazy" class="h-[220px] w-full object-cover">
            @else
                <span class="block h-[220px] bg-ink"></span>
            @endif
            <span class="absolute right-2 top-2 flex flex-col items-end gap-1">
                @if ($tierLabel)
                    <span class="rounded-full px-2 py-0.5 text-[11px] font-semibold {{ $tier === 3 ? 'bg-coral text-paper' : ($tier === 2 ? 'bg-gold text-ink' : 'bg-ink text-paper') }}">{{ $tierLabel }}</span>
                @endif
                @if ($verified)
                    <span class="rounded-full bg-coral px-2 py-0.5 text-[11px] font-semibold text-paper">{{ __('Verified') }}</span>
                @endif
            </span>
        </a>
        <div class="flex min-h-[220px] flex-1 flex-col justify-between p-4">
            <div>
                <a href="{{ $href }}" class="text-xl font-semibold">{{ \Illuminate\Support\Str::limit($ad['title'] ?? '', 40) }}</a>
                <p class="mt-2 text-sm text-[oklch(0.4_0.03_35)]">
                    {{ $category }}
                    <span class="mx-2 opacity-40">·</span>
                    Age {{ $ad['age'] }}
                    <span class="mx-2 opacity-40">·</span>
                    {{ ucfirst($quarter) }}{{ $quarter && $town ? ', ' : '' }}{{ ucfirst($town) }}
                </p>
                <p class="mt-3 text-sm leading-6">{{ \Illuminate\Support\Str::limit($ad['description'] ?? '', 400) }}</p>
            </div>
            <a href="{{ $href }}" class="mt-4 inline-block self-start rounded-full bg-lilac px-4 py-2 text-sm font-semibold text-ink">{{ __('See ad') }}</a>
        </div>
    </div>
</article>
