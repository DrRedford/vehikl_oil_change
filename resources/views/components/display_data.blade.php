@props([
        'title' => 'Current Odometer',
        'data'
])
<div class="relative pl-16 flex items-baseline gap-x-2">
    <dt class="text-base/7 font-semibold text-gray-900">
        {{ $title }}:
    </dt>
    <dd class="mt-2 text-base/7 text-gray-600">
        {{ $data }}
    </dd>
</div>
