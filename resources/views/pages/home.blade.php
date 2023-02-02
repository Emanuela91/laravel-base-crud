@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($saints as $saint)
            <li>{{$saint -> nome}} - Miracoli: {{$saint -> numero_miracoli}} </li>
        @endforeach
    </ul>
@endsection