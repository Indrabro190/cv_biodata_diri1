@extends('layout.main')
@section('container')
    <h1>Hello home</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" title="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    @endsection
    