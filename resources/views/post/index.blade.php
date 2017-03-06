@extends('layout')


@section ('title', 'My blog homepage')

@section('main-content')

    <header class="jumbotron hero-spacer">
        <h1>A Warm Welcome!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
        </p>
    </header>

    <hr>


    <body>
<h1>See below the most recent posts from our blog:</h1>
@foreach ($posts as $post)
<ul class="list-unstyled">

    <div class="row text-center">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h4><li><a href="{{action('PostController@show', [$post->id])}}">
                                {{$post->title}}
                            </a></li></h4>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</ul>

<!---@foreach ($posts as $post)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 homepage-posts">
       <h4><li><a href="{{action('PostController@show', [$post->id])}}">
                   {{$post->title}}
               </a></li></h4>
            </div>
@endforeach
</ul>
-->
    </body>

@endsection