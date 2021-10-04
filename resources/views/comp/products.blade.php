@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Current Series</h1>
        <div class="container-card">
            @foreach ($products as $product)
                <div class="card">
                    <figure>
                        <img src="{{ $product['thumb'] }}" alt="">
                    </figure>
                    <address>{{ $product['series'] }}</address>
                </div>  
            @endforeach
        </div>
    </div>
@endsection