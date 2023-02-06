<form
    novalidate
    method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
    action="{{$action}}"
    {{$attributes->except(['action', 'method', 'novalidate'])}}
>
    @csrf
    @if(!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif
    {{ $slot }}
</form>
