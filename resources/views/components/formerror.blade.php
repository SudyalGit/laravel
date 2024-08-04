@props(['name'])

@error($name)
    <span class="red small-text">{{ $message }}</span>
@enderror
