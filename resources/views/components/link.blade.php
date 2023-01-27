<a
    {{ $attributes->merge([
      'href' => '#'
    ])->class([
      'rounded-sm px-2.5 py-1.5 text-xs font-medium' => $size == 'xs',
      'rounded px-3 py-2 text-sm font-medium leading-4' => $size == 'sm',
      'rounded px-4 py-2 text-sm font-medium' => $size == 'md',
      'rounded px-4 py-2 text-base font-medium' => $size == 'lg',
      'rounded px-6 py-3 text-base font-medium' => $size == 'xl',

      'text-white inline-flex items-center border border-transparent shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 bg-primary-400 hover:bg-primary-700' => $color == 'primary',
      'text-primary-700 inline-flex items-center border border-transparent shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 bg-primary-100 hover:bg-primary-200' => $color == 'secondary',
      'text-gray-700 inline-flex items-center border border-gray-300 shadow-sm bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2' => $color == 'white',
      'px-1 underline text-gray-700 hover:text-primary-400 inline-flex items-center shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2' => $color == 'link',
    ]) }}
>
    {{ $slot }}
</a>
