@extends('layouts.app')
@section('content')
    <div class="col-lg-8 col-lg-offset-2">

          <div class="panel panel-primary">
            <div class="panel-heading">
                LISTADO DE CATEGORIAS
            </div>
            <div class="panel-body">
                <div class="col-lg-4 text-center">
                    <a class="btn btn-primary btn-block" 
                        href="{{route('catalogos.categories.create')}}">
                        <i class="fa fa-plus"></i>
                        AGREGAR</a>
                </div>
                <div class="col-lg-8">
                {!! Form::open(['route'=>'catalogos.categories.index', 'method'=>'GET']) !!}
                        <div class="input-group">
                        <input type="text" name="filter" class="form-control"
                         placeholder="Buscar nombres..." value="{{$filter}}">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">BUSCAR!</button>
                        </span>
                        </div><!-- /input-group -->
                {!! Form::close()!!}
                </div>
                <table class="table">
                    <thead>
                        <th>NOMBRES</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </thead>
                    <tbody>
                        @forelse($table as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td><a class="btn btn-primary btn-xs"
                                    href="{{route('catalogos.categories.edit',$item->id)}}"
                                >EDITAR</a>
                                <a class="btn btn-success btn-xs"
                                    href="{{route('catalogos.categories.show',$item->id)}}"
                                >VER</a>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3">SIN REGISTROS</td></tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $table->render() !!}
            </div>
        </div>
    </div>
@endsection