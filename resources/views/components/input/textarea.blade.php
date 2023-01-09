<textarea
    {{ $attributes->merge([
      'class' => 'form-control',
    ])->class([
      'error' => !!$error,
    ]) }}
    maxlength="255"
></textarea>
