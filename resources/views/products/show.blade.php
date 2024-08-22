@extends('layout.app')

@section('title')
    SHOW
@endsection

@section('content')
    <?php if ($category) {
        echo 'Producto: ' . $product . ' con la categoría: ' . $category;
    } else {
        echo 'Producto: ' . $product;
    }
    ?>
@endsection
