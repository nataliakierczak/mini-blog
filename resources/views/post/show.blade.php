@extends ('layout')

@section('main-content')

@section ('title', 'Our post')


<title>Document</title>
</head>
<body>

<div class="container">
<h1>{{$post->title}}</h1>
<p>{{$post->content}}</p>
</div>

    @endsection