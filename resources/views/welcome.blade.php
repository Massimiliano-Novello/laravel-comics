@extends('layouts.app');

@section('content')
<section class="my_card py-4">
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card">
                    <img src="{{ $book['thumb'] }}" alt="">
                        <h3>{{ $book['series'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

