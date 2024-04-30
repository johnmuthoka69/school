<!-- resources/views/search/results.blade.php -->

@extends("layouts.frontend"){{-- Adjust this based on your layout structure --}}

@section('content')
    <div class="container">
        <h1>Search Results</h1>

        @foreach($results as $model => $items)
            @if($items->count() > 0)
                <h2>{{ ucfirst($model) }}</h2>
                <ul>
                    @foreach($items as $item)
                        <li>
                            <p>
                                <a href="{{ route('show_associated', ['model' => $model, 'id' => $item->id]) }}">
                                    {{ $item->name }}
                                </a>
                                found in {{ ucfirst($model) }}
                            </p>
                            @if(isset($item['location']))
                                <p>Location: {{ $item['location'] }}</p>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No results found for {{ ucfirst($model) }}.</p>
            @endif
        @endforeach
    </div>
@endsection
