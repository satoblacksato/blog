@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
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
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading ">MIS LIBROS</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach($books as $book)
                        <div class="col-lg-4">
                            <div class="thumbnail">
                            <img class="thumbnail"
                             src="{{route('blog.imagenes',$book->picture)}}" 
                            alt="IMAGEN NO ENCONTRADA">
                            <div class="caption">
                                <h3>{{$book->title}}</h3>
                                <p> {{$book->category->name}}</p>
                                <p>{{$book->description}}</p>
                                <p>
                                    <a href="{{route('blog.comentarios',$book->slug)}}" class="btn btn-primary" role="button">COMENTAR</a> 
                                        &nbsp;<i class="fa fa-clock-o fa-spin"></i>
                                        {{$book->created_at->diffForHumans()}}
                                </p>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<create-book></create-book>
{!!csrf_field()!!}
@endsection
@section('masterJS')
    <script src="{{asset('components/create_book.tag')}}" 
        type="riot/tag"></script>

    <script>
        $("#btnPost").on('click',function(){
                riot.mount('create-book',{id:0,
                                         title:'CREAR LIBRO',
                                         token:$("input[name='_token']").val()
                                         });
        }); 
    </script>
@endsection
