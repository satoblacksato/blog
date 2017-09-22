@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="/img/book.png" style="width: 150px;
    height: 120px;"/>

            <button class="btn btn-primary btn-block">
                <i class="fa fa-book"></i>
            PUBLICAR</button>
         <hr/>
            <div class="list-group">
                <a href="#" class="list-group-item">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading ">MIS LIBROS</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
