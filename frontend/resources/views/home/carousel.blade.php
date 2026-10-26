@php
    $items = array_values($items ?? []);
    $perSlide = max(1, (int) ($perSlide ?? 2));
    $slides = array_chunk($items, $perSlide);
    $interval = (int) ($interval ?? 5000);
    $tier = $tier ?? '';
    $frame = $frame ?? 'aspect-[3/4]';
    $cols = $cols ?? ($perSlide >= 4 ? 'grid-cols-2 lg:grid-cols-4' : 'grid-cols-2');
    $wrap = $wrap ?? '';
@endphp
@if (count($slides))
    <div class="relative mt-8" data-home-carousel data-interval="{{ $interval }}">
        <div class="overflow-hidden">
            <div class="flex transition-transform duration-700 ease-out" data-track>
                @foreach ($slides as $slide)
                    <div class="w-full min-w-full shrink-0">
                        <div class="grid gap-3 {{ $cols }} {{ $wrap }}">
                            @foreach ($slide as $ad)
                                @include('home.ad-photo', ['ad' => $ad, 'tier' => $tier, 'frame' => $frame])
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (count($slides) > 1)
            <button type="button" data-prev class="absolute left-2 top-1/2 z-10 -translate-y-1/2 rounded-full bg-paper p-2 text-ink shadow" aria-label="Previous">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M12.7 15.7 7.0 10l5.7-5.7 1.4 1.4L9.8 10l4.3 4.3-1.4 1.4z"/></svg>
            </button>
            <button type="button" data-next class="absolute right-2 top-1/2 z-10 -translate-y-1/2 rounded-full bg-paper p-2 text-ink shadow" aria-label="Next">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M7.3 4.3 13 10l-5.7 5.7-1.4-1.4L10.2 10 5.9 5.7l1.4-1.4z"/></svg>
            </button>
            <div class="mt-4 flex justify-center gap-2">
                @foreach ($slides as $index => $slide)
                    <button type="button" data-dot class="h-2 w-2 rounded-full bg-coral {{ $index === 0 ? '' : 'opacity-40' }}" aria-label="{{ $index + 1 }}"></button>
                @endforeach
            </div>
        @endif
    </div>
@endif
