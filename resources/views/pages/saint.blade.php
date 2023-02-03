@extends('layouts.main-layout')

@section('content')
<h1>{{$saint -> nome}}</h1>
<h2>Miracoli: {{$saint -> numero_miracoli}}</h2>
<h3>Nato a: {{$saint -> luogo_nascita}}</h3>
<h3>Benedetto il: {{$saint -> data_benedizione}}</h3>

@endsection