

<form action="{{action('CommentController@store')}}" method="post"  class="form-inline">
{{ csrf_field() }}


    <label class="sr-only" for="inlineFormInput">Comment</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="My comment to the post" name="title">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


