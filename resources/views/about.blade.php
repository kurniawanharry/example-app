@extends('layouts.main')
@section('container')
    <div class="text-center">
        <h1 class="mb-3">About</h1>
        <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle mb-3">
        <h3>{{ $name }}</h3>
        <h3>{{ $email }}</h3>
    </div>

@endsection
