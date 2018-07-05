
@foreach ($Publicaciones as $key => $value)
<br>
{{$value->usuario->email}}
{{$value->contenido}}

@endforeach
