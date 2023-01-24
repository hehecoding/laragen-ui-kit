<select
    {{ $attributes->merge([
        'class' => 'form-control',
        ])->class([
            'error' => !!$error
        ]) }}
>
    {{ $slot }}
</select>
