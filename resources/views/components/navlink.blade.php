@props(['active' => false, 'type' => 'a'])

@if ($type == 'button')
    <button {{ $attributes->merge(['class' => 'nav-link' . ($active ? ' active' : '')]) }}>{{ $slot }}</button>
@else
    <a {{ $attributes->merge(['class' => 'nav-link' . ($active ? ' active' : '')]) }}>{{ $slot }}</a>
@endif
