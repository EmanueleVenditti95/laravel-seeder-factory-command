@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gap-3">
            @foreach ($products as $product)
                <ul class="card col-2 d-flex-column align-items-center">
                    <li style = 'color:{{$product->category->color}}'>
                        {{ strtoupper($product->category->name) }}
                    </li>
                    <li>${{ $product->cost }}</li>
                    <li class="fw-bold fs-5">
                        <a href="{{route('products.show',$product)}}">{{ ucwords($product->name) }}</a>
                    </li>
                    <li class="fs-6 fw-light text-center">
                        {{ \Illuminate\Support\Str::limit($product->description, 100,'...') }}
                    </li>
                </ul>
            @endforeach
        </div>
    </div>



    <style lang="scss">
        .card {
            border: none;
            background-color: black;
            color: white;            
        }
    </style>
@endsection
