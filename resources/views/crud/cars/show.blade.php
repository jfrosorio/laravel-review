@extends('layouts.app')

@section('page_title', 'Car detail: ' . $car->name)

@section('content')
    <p>
        <strong>Name:</strong> {{ $car->name }}
    </p>
@endsection
