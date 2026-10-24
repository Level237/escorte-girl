<footer class="mt-16 bg-ink pb-16 text-paper md:pb-0">
    <div class="mx-auto grid max-w-6xl gap-10 px-4 py-12 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <img src="{{ asset('assets/images/logo-vy.png') }}" alt="" class="mb-4 h-14 w-auto rounded-xl bg-paper px-3 py-2">
            <p class="max-w-xs text-sm leading-6 text-[oklch(0.9_0.02_55)]">
                {{ __('By using the site you accept that the owner of the site is declined from any possible responsibilities whatever their nature') }}
            </p>
        </div>
        <div>
            <p class="mb-3 font-semibold">{{ __('Useful Links') }}</p>
            <ul class="space-y-2 text-sm text-[oklch(0.9_0.02_55)]">
                <li><a href="{{ route('cgu') }}">{{ __('CGU') }}</a></li>
                <li><a href="{{ route('help') }}">{{ __('Help') }}</a></li>
                <li><a href="{{ route('faq') }}">{{ __('Faqs') }}</a></li>
                <li><a href="{{ route('contact') }}">{{ __('Contact us') }}</a></li>
            </ul>
        </div>
        <div>
            <p class="mb-3 font-semibold">{{ __('Ads') }}</p>
            <ul class="space-y-2 text-sm text-[oklch(0.9_0.02_55)]">
                <li><a href="{{ route('ads.category', ['id' => '2']) }}">{{ __('Massage') }}</a></li>
                <li><a href="{{ route('ads.category', ['id' => '3']) }}">{{ __('Adult Products') }}</a></li>
                <li><a href="{{ route('ads.category', ['id' => '1']) }}">{{ __('Dating - Escorts') }}</a></li>
                <li><a href="{{ route('ads.list') }}">{{ __('All ads') }}</a></li>
            </ul>
        </div>
        <div>
            <p class="mb-3 font-semibold">{{ __('Join our Community') }}</p>
            <p class="mb-4 text-sm text-[oklch(0.9_0.02_55)]">{{ __('We rarely write, but only the best content.') }}</p>
            <a href="https://chat.whatsapp.com/DCyINA4wsdyIaDeJ7MYyMV" target="_blank" rel="noopener" class="inline-block rounded-full bg-coral px-4 py-2 text-sm font-semibold">{{ __('Join') }}</a>
            <p class="mt-4 text-xs text-[oklch(0.82_0.02_55)]">{{ __('We will never share your contact details.') }}</p>
        </div>
    </div>
    <div class="border-t border-white/10">
        <p class="mx-auto max-w-6xl px-4 py-4 text-sm text-[oklch(0.82_0.02_55)]">&copy; {{ date('Y') }} Viens Yamo</p>
    </div>
</footer>

<nav class="fixed inset-x-0 bottom-0 z-30 grid grid-cols-3 border-t border-line bg-paper py-2 text-center text-xs font-semibold md:hidden">
    <a href="{{ isset($user) ? route('db.escort.index') : route('login') }}" class="py-1">{{ __('My Account') }}</a>
    <a href="{{ route('ads.create') }}" class="py-1 text-coral">{{ __('Create ad') }}</a>
    <a href="{{ route('ads.list') }}" class="py-1">{{ __('Ads') }}</a>
</nav>
