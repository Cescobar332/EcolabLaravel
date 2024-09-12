@extends('layout.app')

@section('title')
    PRODUCTS
@endsection

@section('content')
    <div class="container">
        <h2>LISTADO DE PRODUCTOS:</h2>
        {{$products->links()}}
        <div class="row">
            @foreach ($products as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <a href="{{ route('products.show', $item->id) }}">
                            <img src="{{$item->url_image}}" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <div class="card-title">
                                {{$item->name}}
                            </div>
                            <p>{{$item->description}}</p>
                            <button class="btn btn-primary">Agregar al carrito de compras</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
