@extends('layouts.app')
@section('content')
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                CREACION DE CATEGORIAS
            </div>
            <div class="panel-body">
                {!! Form::open(['route'=>'catalogos.categories.store']) !!}
                    {!! Field::text('name',null,['label'=>'NOMBRE:']) !!}
                    {!! Field::textarea('description',null,['label'=>'DESCRIPCION:',
                                               'rows'=>'3','style'=>'resize:none']) !!}

                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                    <a class="btn btn-danger" href="{{route('catalogos.categories.index')}}">REGRESAR</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


