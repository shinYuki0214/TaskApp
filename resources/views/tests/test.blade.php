test <br>

{{{$values}}} <br>

@foreach ($values as $value)
    {{$value->id}} <br>
    {{$value->text}}
@endforeach