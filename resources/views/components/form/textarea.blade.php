@props(["name"])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <textarea class="border border-gray-400 p-2 w-full"
        type="text"
        name="{{ $name }}"
        id="{{ $name }}"
        rows="12"
        required
    >{{ old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />
</div>