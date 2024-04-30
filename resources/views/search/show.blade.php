<!-- resources/views/associated/show.blade.php -->

@extends("layouts.frontend"){{-- Adjust this based on your layout structure --}}

@section('content')
    <div class="container">
        <h1>Associated Values</h1>

        <ul>
            @foreach($associatedValues as $associatedValue)
                <li>{{ $associatedValue->name }} {{-- Adjust based on your model --}}</li>
            @endforeach
        </ul>
    </div>
@endsection
