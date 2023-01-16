<h1>edit anew post</h1>


<form action="{{route('posts.update', $post->id)}}" method="post">
    @method('PUT')
    @csrf

    <input type="text" name="title" value="{{$post->title}}"  class="form-control" placeholder="Enter Title">
    <input type="text" name="content" value="{{$post->content}}" class="form-control" placeholder="Enter Content">
    <button type="submit">Submit</button>

</form>
