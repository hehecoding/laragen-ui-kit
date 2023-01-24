<input

    {{ $attributes->merge([
        'type' => 'text',
        'class' => 'form-control',
    ])->class([
        'error' => !!$error,
    ]) }}

    maxlength="255"
/>
