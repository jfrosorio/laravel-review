@extends('layouts.app')

@section('page_title', 'Cars')

@section('content')
    <table>
        <thead>
            <tr>
                <th scope="col">Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->name }}</td>
                    <td>
                        <a href="{{ route('cars.show', $car) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
