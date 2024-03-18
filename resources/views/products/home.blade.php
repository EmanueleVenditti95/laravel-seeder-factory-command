@extends('layouts.app')

@section('content')
    @foreach ($products as $product)
        <ul>
            <li>{{ $product->category->name }}</li>
            <li>{{ $product->name }}</li>
            <li>{{ $product->description }}</li>
            <li>${{ $product->cost }}</li>
        </ul>
    @endforeach
@endsection
