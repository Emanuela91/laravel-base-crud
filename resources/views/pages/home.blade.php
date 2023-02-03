@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($saints as $saint)
            <li>
                {{-- creo un link per andare poi alla pagina corrispondente al santo --}}
                <a href="/saint/{{$saint -> id}}">
                    {{$saint -> nome}} - Miracoli: {{$saint -> numero_miracoli}} 
                </a>
            </li>
        @endforeach
    </ul>
@endsection