<button
    {{ $attributes->merge([
      'class' => 'btn',
      'type' => 'submit'
    ])->class([
    //  'py-2 px-4 text-sm' => $size == 'default',
    //  'py-2 px-3 leading-4 text-sm' => $size == 'sm',
    //  'py-1 px-2 leading-2 text-xs' => $size == 'xs',
      'btn-primary' => $theme == 'primary',
    ]) }}
>
    {{ $slot }}
</button>
