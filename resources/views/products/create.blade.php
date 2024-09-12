@extends('layout.app')

@section('title')
    CREATE
@endsection

@section('content')
    <div class="container">
        <h1>CREAR PRODUCTO</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre: </label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción: </label>
                <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripción" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio: </label>
                <input type="number" name="precio" class="form-control" placeholder="Digite solo números" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoría: </label>
                <select class="form-select" name="categoria">
                    <option value="">---Seleccionar---</option>
                    @foreach ($categorias as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input class="btn btn-success" type="submit" value="Guardar información"></input>
        </form>
    </div>
@endsection
