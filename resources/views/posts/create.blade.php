<h1>create anew post</h1>


<form action="{{route('posts.store')}}" method="post">
    @csrf
    
    <input type="text" name="title"  class="form-control" placeholder="Enter Title">
    <input type="text" name="content"  class="form-control" placeholder="Enter Content">
    <button type="submit">Submit</button>

</form>
