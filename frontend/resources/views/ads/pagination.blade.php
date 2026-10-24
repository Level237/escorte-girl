@php
    $current = (int) ($current_page ?? 1);
    $pages = max(1, (int) ($nb_pages ?? 1));
    $townAds = $townAds ?? null;
    $quarter = $quarter ?? null;
    $category = $category ?? null;
    $nonvip = $nonvip ?? null;
    $pageLink = function (int $page) use ($townAds, $quarter, $category, $nonvip) {
        if ($townAds) {
            return route('ads.town', ['id' => $townAds, 'current_page' => $page]);
        }
        if ($quarter) {
            return route('ads.quarter', ['id' => $quarter, 'current_page' => $page]);
        }
        if ($category) {
            return route('ads.category', ['id' => $category, 'current_page' => $page]);
        }
        if ($nonvip) {
            return route('ads.nonvip', ['current_page' => $page]);
        }

        return route('ads.list', ['current_page' => $page]);
    };
@endphp
@if ($pages > 1)
    <nav class="mt-10 flex flex-wrap items-center justify-center gap-2 text-sm" aria-label="Pagination">
        @if ($current > 1)
            <a href="{{ $pageLink($current - 1) }}" class="rounded-full border border-line px-3 py-1.5">‹</a>
        @endif
        @for ($i = max(1, $current - 2); $i <= min($pages, $current + 2); $i++)
            <a href="{{ $pageLink($i) }}" class="rounded-full px-3 py-1.5 {{ $i === $current ? 'bg-coral text-paper' : 'border border-line' }}">{{ $i }}</a>
        @endfor
        @if ($current < $pages)
            <a href="{{ $pageLink($current + 1) }}" class="rounded-full border border-line px-3 py-1.5">›</a>
        @endif
    </nav>
@endif
