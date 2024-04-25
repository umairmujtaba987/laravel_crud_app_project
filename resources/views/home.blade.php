@extends("layouts.app")
@section('content')
@auth
<div class="container mt-4">
    <h2>Create New Post</h2>
    <form action="/create-post" method="post">
        @csrf
        <input type="text" name="title" placeholder="Post title"   >
        <textarea name="body"  class="form-control" rows="4" placeholder="Post Body Content" style="mix-width: 100%"></textarea>
        <button class="mt-2">Save Post</button>
    </form>
</div>

<div class="container mt-4 mb-4" >
    <h2 class="text-center mb-4">My Blog Posts</h2>
 
    @foreach ($posts as $post)
    <div class="container mt-4 card mb-3" style="background-color: #2e2d2d;">
        <div class="card-body container border"style="color: #ffffff; ">
            <h3 class="card-title">{{$post['title']}}</h3>
            <p class="card-text">{{$post['body']}}</p>
            <p><a href="/edit-post/{{$post->id}}" class="btn btn-primary">Edit</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>

            </form>
        </div>
    </div>
    
    @endforeach 
</div>


@else
    
    <h1 class="display-4 text-center mt-5">Welcome to CURD APP</h1>
    <div class="border" >
        <form action="/register" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form> 
            <form action="/login" method="GET">
               @csrf 
                <button type="submit">Log in</button> 
            </form>
    </div> 
@endauth
@endsection
 