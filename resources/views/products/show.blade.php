@extends('layouts.app')

@section('content')
    <ul>
        <li>{{$product->image_url}}</li>
        <li>{{$product->ean_code}}</li>
        <li>{{$product->name}}</li>
        <li>{{$product->description}}</li>
        <li>{{$product->cost}}</li>
        <li>{{$product->highlighted}}</li>    
    </ul>   
@endsection