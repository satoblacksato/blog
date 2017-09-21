@extends('layouts.app')
@section('content')
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                EDITAR DE CATEGORIAS
            </div>
            <div class="panel-body">
                {!! Form::open(['route'=>['catalogos.categories.update',$category->id],'method'=>'PUT']) !!}
                    {!! Field::text('name',$category->name,['label'=>'NOMBRE:']) !!}
                    {!! Field::textarea('description',$category->description,['label'=>'DESCRIPCION:',
                                               'rows'=>'3','style'=>'resize:none']) !!}

                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                    <a class="btn btn-danger" href="{{route('catalogos.categories.index')}}">REGRESAR</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


