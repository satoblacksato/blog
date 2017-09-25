@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="/img/book.png" style="width: 150px;
    height: 120px;"/>

            <button id="btnPost" class="btn btn-primary btn-block">
                <i class="fa fa-book"></i>
            PUBLICAR</button>
         <hr/>
            <div class="list-group">
                @foreach($categories as $category)
                    <a href="#" class="list-group-item">{{$category->name}}</a>
                @endforeach
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

<create-book></create-book>

@endsection
@section('masterJS')
    <script src="{{asset('components/create_book.tag')}}" 
        type="riot/tag"></script>

    <script>
        $("#btnPost").on('click',function(){
                riot.mount('create-book',{id:0});
        }); 
    </script>
@endsection
