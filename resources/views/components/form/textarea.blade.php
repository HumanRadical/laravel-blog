@props(["name"])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <textarea class="border border-gray-200 p-2 w-full rounded"
        type="text"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{ $attributes(["rows" => 12]) }}
    >{{ old($name, $slot) }}</textarea>
    <x-form.error name="{{ $name }}" />
</div>