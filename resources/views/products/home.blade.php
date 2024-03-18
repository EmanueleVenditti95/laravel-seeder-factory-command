@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gap-3">
            @foreach ($products as $product)
                <ul class="card col-2 d-flex-column align-items-center">
                    <li>{{ strtoupper($product->category->name) }}</li>
                    <li>${{ $product->cost }}</li>
                    <li class="fw-bold fs-5">{{ ucwords($product->name) }}</li>
                    <li class="fs-6 fw-light text-center">{{ $product->description }}</li>
                </ul>
            @endforeach
        </div>
    </div>



    <style lang="scss" scoped>
        .card {
            border: none;
            background-color: black;
            color: white;
            
        }
    </style>
@endsection
