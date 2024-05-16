@extends('layouts.main')

@section('title', 'Pagina Principal')

@section('content')

@if($busca != '')
    <p>O usuario esta buscando por um {{$busca}}</p>
@endif
@endsection
