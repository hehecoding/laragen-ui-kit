@props([
    'color' => 'primary', // available options: primary, success, error
    'block' => false,
    'rounded' => 'normal',
    'disabled' => false,
    'icon' => false,
    'iconBefore' => null,
    'iconAfter' => null,
    'loading' => false,
    'size' => 'normal',
    'variant' => 'default',
    'href' => null,
    'type' => 'submit'
])

@php
        $colors = [
            'primary' => 'primary',
            'success' => 'green',
            'error' => 'red',
            'gray' => 'gray',
            'blue' => 'blue'
        ];

        $sizes = [
            'xs' => 'px-2.5 py-1.5 text-xs leading-4',
            'sm' => 'px-3 py-2 text-sm leading-4',
            'normal' => 'px-4 py-2 text-base leading-5',
            'lg' => 'px-4 py-2 text-base leading-6',
            'xl' => 'px-6 py-3 text-xl leading-7',
        ];

        $roundedClasses = [
            'sm' => 'rounded-sm',
            'normal' => 'rounded',
            'lg' => 'rounded-lg',
            '0' => 'rounded-none',
            'pill' => 'rounded-full',
        ];

        $variantClasses = [
            'default' => 'bg-' . $colors[$color] . '-400 text-white hover:bg-' . $colors[$color] . '-900',
            'tonal' => 'bg-' . $colors[$color] . '-100 text-' . $colors[$color] . '-400 hover:bg-' . $colors[$color] . '-300 hover:text-white',
            'outlined' => 'border border-' . $colors[$color] . '-400 text-' . $colors[$color] . '-400 hover:bg-' . $colors[$color] . '-400 hover:text-white',
            'plain' => 'bg-transparent text-' . $colors[$color] . '-400 hover:text-' . $colors[$color] . '-900',
            'text' => 'underline bg-transparent text-' . $colors[$color] . '-400 hover:text-' . $colors[$color] . '-900 hover:bg-' . $colors[$color] . '-100',
        ];

        $tag = $href ? 'a' : 'button';

        $classes = 'inline-flex items-center justify-center font-medium';
        $classes .= ' ' . $roundedClasses[$rounded];
        $classes .= ' ' . $variantClasses[$variant];
        $classes .= ' ' . ($block ? 'w-full' : '');
        $classes .= ' ' . ($disabled || $loading ? 'opacity-50 cursor-not-allowed' : 'hover:opacity-90');
        $classes .= ' ' . ($iconBefore || $iconAfter ? 'flex' : '');
        $classes .= ' ' . ($loading ? 'relative' : '');
        $classes .= ' ' . ($sizes[$size] ?? $sizes['normal']);
@endphp

<{{ $tag }} {{ $href ? 'href=' . $href : '' }} {{ $attributes->merge(['class' => $classes, 'disabled' => $disabled || $loading]) }} {{ $tag === 'button' ? 'type=' . $type : '' }}>
    @if ($loading)
        <i class="fas fa-spinner fa-spin"></i>
    @else
        @if ($iconBefore)
        <span class="{{ $icon ? 'mx-auto' : 'mr-2' }}">
            <i class="{{ $iconBefore }}"></i>
        </span>
        @endif

        @if($icon)
            <i class="{{ $icon }}"></i>
        @else
            {{ $slot }}
        @endif

        @if ($iconAfter)
        <span class="{{ $icon ? 'mx-auto' : 'ml-2' }}">
            <i class="{{ $iconAfter }}"></i>
        </span>
        @endif
    @endif
</{{$tag}}>
