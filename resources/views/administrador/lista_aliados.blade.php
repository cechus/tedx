@extends('layouts.admin')
@section('content')
    {{--<form>
        <p>
            <input type="text" name="nombre">
        </p>
        <p>
            <select name="categoria">
                <option value="GOLD">GOLD</option>
                <option value="PLATINIUM">PLATINIUM</option>
            </select>
        </p>
        <p>
            <input type="file">
        </p>
    </form>--}}

    <div class="section scrollspy" id="contact">
        <div class="container">
            <div class="row">
                <h2>Aliados</h2>
            </div>
            <div class="row">
                <table class="bordered responsive-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lista_aliados as $aliado)
                    <tr>
                        <td>{!! $aliado->id !!}</td>
                        <td>{!! $aliado->nombre !!}</td>
                        <td>{!! $aliado->imagen !!}</td>
                        <td>{!! $aliado->categoria !!}</td>
                        <td>{!! $aliado->descripcion !!}</td>
                        <td>
                            <a href="{{ route('aliado',[$aliado->id]) }}">Editar</a>
                            <a href="{!! route('eliminar_aliado',[$aliado->id]) !!}">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
