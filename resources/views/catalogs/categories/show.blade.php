@extends('layouts.app')
@section('content')
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                VER DE CATEGORIAS
            </div>
            <div class="panel-body">
                   {!! Field::text('name',$category->name,['label'=>'NOMBRE:','readonly'=>true]) !!}
                    {!! Field::textarea('description',$category->description,['label'=>'DESCRIPCION:',
                                               'rows'=>'3','style'=>'resize:none','readonly'=>true]) !!}

                    <a class="btn btn-danger" href="{{route('catalogos.categories.index')}}">REGRESAR</a>
               
            </div>
        </div>
    </div>
@endsection


