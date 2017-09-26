@extends('layouts.app')
@section('content')

<div class="col-lg-10 col-lg-offset-1">
<div class="thumbnail">
        <img style="with:100%;height: 200px;" class="thumbnail"
            src="{{route('blog.imagenes',$objBook->picture)}}" 
        alt="IMAGEN NO ENCONTRADA">
        <div class="caption">
            <h3>{{$objBook->title}}</h3>
            <p> {{$objBook->category->name}}</p>
            <p>{{$objBook->description}}</p>
            <p>
                <a href="/home" class="btn btn-primary" role="button">REGRESAR</a> 
                    &nbsp;<i class="fa fa-clock-o fa-spin"></i>
                    {{$objBook->created_at->diffForHumans()}}
            </p>
        </div>
</div>
<div id="disqus_thread"></div>
</div>


<script>

/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-blog-dev-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection

