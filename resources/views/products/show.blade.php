@extends('layouts.app')

@section('content')
    <ul>
        <li class="text-center my-2">{{ucwords($product->name)}}</li>
        <li class="d-flex justify-content-center">
            <img class="w-25" src="{{$product->image_url}}" alt="">
        </li>
        <li>EAN code : {{$product->ean_code}}</li>
        <li>Category : <span style='color:{{$category[0]->color}}'>{{$category[0]->name}}</span></li>        
        <li>{{$product->description}}</li>
        <li>$ {{$product->cost}}</li>
        <li>Feature active : 
            <span class="{{($product->highlighted) ? 'green' : 'red'}}">
                {{($product->highlighted) ? 'Yes' : 'No'}}
            </span>
        </li>    
    </ul>
    
<style lang="scss" scoped>
    .green {
        color: rgb(18, 212, 18);
    }

    .red {
        color: red;
    }
</style>    
@endsection