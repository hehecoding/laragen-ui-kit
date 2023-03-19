@props(['name' => 'Untitled', 'icon' => ''])

<div x-data="{
        id:'{{ \Illuminate\Support\Str::slug($name) }}',
        name: '{{ $name }}',
        icon: '{{ $icon }}',
    }"

     x-init="() => {
        tabHeadings.push({
        name: name,
        icon: icon,
        id: id
        });
     }"

     x-show="activeTab===id"

     role="tabpanel"
     :aria-labelledby="`tab-${id}`"
     :id="`tab-panel-${id}`"
>
    {{ $slot }}
</div>
