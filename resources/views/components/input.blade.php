@props([
    'label' => 'Current Odometer',
    'type' => 'number',
    'value' => '',
    'name' => 'current_odometer'
])

<div class="sm:col-span-4">
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-900">{{ $label }}</label>
    <div class="mt-2">
        <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" required
               class="block w-full rounded-md bg-white px-3 pt-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>
