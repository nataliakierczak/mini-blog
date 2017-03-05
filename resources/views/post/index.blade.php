@extends('layout')


@section ('title', 'My blog homepage')

@section('main-content')

<body>
<h1>See below the most recent posts from our blog:</h1>
<ul class="list-unstyled">

@foreach ($posts as $post)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 homepage-posts">
       <h4><li><a href="{{action('PostController@show', [$post->id])}}">
                   {{$post->title}}
               </a></li></h4>
            </div>
@endforeach
</ul>

</body>

@endsection