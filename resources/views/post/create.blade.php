@extends ('layout')

@section('main-content')

@section ('title', 'Our post')

<form action="{{action('PostController@store')}}" method="post"  enctype="multipart/form-data" yclass="form-inline">
    {{ csrf_field() }}
   <!-- <div class="col-10">
Title of the blog post<input type="text" name="title"></div>
    <div class="col-10">
        Content of the blog post<textarea name="content" id="" cols="30" rows="10"></textarea></div>
<button type="submit">Create</button>-->

            <label class="sr-only" for="inlineFormInput">Title</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Title of my article" name="title">

        <label class="sr-only" for="inlineFormInput">Content</label>
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Content of my article" name="content">

            <input type="file" name="featured-image">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</form>

@endsection