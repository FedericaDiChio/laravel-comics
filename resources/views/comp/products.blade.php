@extends('layouts.main')

@section('content')
    <section id="products">
        <div class="container">
            <h1>Current Series</h1>
            <div class="container-card">
                @foreach ($products as $product)
                    <div class="card">
                        <figure>
                            <a href="">
                                <img src="{{ $product['thumb'] }}" alt="">
                            </a>
                        </figure>
                        <address>{{ $product['series'] }}</address>
                    </div>  
                @endforeach
            </div>
        </div>
    </section>
@endsection