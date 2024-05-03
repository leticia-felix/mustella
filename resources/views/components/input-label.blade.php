@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-basic-gray']) }}>
    {{ $value ?? $slot }}
</label>
