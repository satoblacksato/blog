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

                                <a href="#" action="delete" class="btn btn-danger btn-xs"
                                    url="{{route('catalogos.categories.destroy',$item->id)}}"
                                >ELIMINAR</a>
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
    {!!Form::open(['method'=>'DELETE','id'=>'frmDelete'])!!}
    {!!Form::close()!!}
@endsection
@section('masterJS')
    <script>
        $("a[action=delete]").on('click',function(){
            var _url=$(this).attr('url');
                swal({
                    title: "",
                    text: "Est\u00E1s seguro que deseas eliminar el registro",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "SI",
                    cancelButtonText: "NO",
                    closeOnConfirm: true,
                    closeOnCancel: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $("#frmDelete").attr('action',_url);
                        $("#frmDelete").submit();
                    }
                });
        });
    </script>
@endsection