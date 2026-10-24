@csrf
<select name="subscribe_id" class="w-full border border-line bg-white px-3 py-3 outline-none focus:border-ink md:w-56">
    <option value="">{{ __('Subscription Type') }}</option>
    <option value="3" @selected((string) request('subscribe_id') === '3')>Ultra vip</option>
    <option value="2" @selected((string) request('subscribe_id') === '2')>Gold</option>
    <option value="1" @selected((string) request('subscribe_id') === '1')>Premium</option>
    <option value="4" @selected((string) request('subscribe_id') === '4')>{{ __('No Subscription') }}</option>
</select>
<select name="quarter" class="w-full border border-line bg-white px-3 py-3 outline-none focus:border-ink md:flex-1">
    <option value="">{{ __('Select quarter') }}</option>
    @foreach ($quarters as $item)
        @php
            $row = is_array($item) ? $item : (array) $item;
            $qid = $row['id'] ?? null;
        @endphp
        <option value="{{ $qid }}" @selected((string) request('quarter') === (string) $qid)>{{ $row['quarter_name'] ?? ($row['name'] ?? '') }}</option>
    @endforeach
</select>
<button type="submit" class="w-full rounded-full bg-coral px-5 py-3 text-sm font-semibold text-paper md:w-auto">{{ __('Filter') }}</button>
