@extends('layouts.main')

@section('title', 'Pagina Principal')

@section('content')

@if($id != null)
    <p>O id do aluno é {{ $id }}</p>
@endif

@endsection
