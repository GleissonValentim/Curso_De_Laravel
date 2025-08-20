@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum titulo</h1>
@if(5 > 10)
    <p>Maior</p>
@else
    <p>Menor</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Gleisson")
    <p>È igual {{ $nome }} {{ $idade }} {{ $profissao }}</p>
@else
    <p>Não é igual</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
        <p>O igual i é igual a 2</p>
    @endif
@endfor

@php
    $name = "João";
    echo $name;
@endphp

@foreach($nomes as $nome)
    <p> {{ $loop->index }} </p>
    <p> {{ $nome }} </p>
@endforeach

{{-- Este é o comentario do Blade --}}

@endsection
