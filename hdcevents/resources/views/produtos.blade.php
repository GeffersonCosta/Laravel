@extends('layouts.main')
@section('title', 'Protudos')
@section('content')
<h1>Página de produtos</h1>


@if($busca != '')
<p>O usuário está buscando por: {{$busca}}</p>
@endif

@endsection
