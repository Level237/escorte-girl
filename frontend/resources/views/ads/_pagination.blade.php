@php
    $current = (int) ($current_page ?? 1);
    $pages = max(1, (int) ($nb_pages ?? 1));
    $townAds = $townAds ?? null;
    $quarter = $quarter ?? null;
    $category = $category ?? null;
    $nonvip = $nonvip ?? null;
    $pageUrl = function (int $page) use ($townAds, $quarter, $category, $nonvip) {
        if (isset($townAds)) {
            return route('ads.town', ['id' => $townAds, 'current_page' => $page]);
        }
        if (isset($quarter)) {
            return route('ads.quarter', ['id' => $quarter, 'current_page' => $page]);
        }
        if (isset($category)) {
            return route('ads.category', ['id' => $category, 'current_page' => $page]);
        }
        if (isset($nonvip)) {
            return route('ads.nonvip', ['current_page' => $page]);
        }

        return route('ads.list', ['current_page' => $page]);
    };
@endphp
@if ($pages > 1)
    <nav class="mt-10 flex justify-center gap-2 text-sm" aria-label="Pagination">
        @if ($current > 1)
            <a href="{{ $pageUrl($current - 1) }}" class="rounded-full border border-line px-3 py-1">&lsaquo;</a>
        @endif
        @foreach (range(max(1, $current - 1), min($pages, $current + 1)) as $page)
            <a href="{{ $pageUrl($page) }}" class="rounded-full px-3 py-1 {{ $page === $current ? 'bg-coral text-paper' : 'border border-line' }}">{{ $page }}</a>
        @endforeach
        @if ($current < $pages)
            <a href="{{ $pageUrl($current + 1) }}" class="rounded-full border border-line px-3 py-1">&rsaquo;</a>
        @endif
    </nav>
@endif
