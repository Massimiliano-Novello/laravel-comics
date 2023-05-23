@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($books as $book)
                <div class="col">
                    <img src="{{ $book['thumb'] }}" alt="">
                    <div class="card">
                        <h3>{{ $book['series'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

