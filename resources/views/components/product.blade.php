@extends('layouts.main')

@section('content')
<section class="container">
    <h1>{{ $product['title'] }}</h1>
    <div>{{ $product['price'] }}</div>
    <p>{{ $product['description'] }}</p>

    </section>



@endsection
