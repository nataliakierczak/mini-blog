@extends('layout')


@section ('title', 'My blog homepage')

@section('main-content')

<body>
<h1>See below the most recent posts from our blog:</h1>
<ul>

@foreach ($posts as $post)
        <li><a href="{{action('PostController@show', [$post->id])}}">
            {{$post->title}}
            </a></li>
@endforeach
</ul>

</body>

@endsection