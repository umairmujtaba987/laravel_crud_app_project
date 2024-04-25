<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/css/app.css'])
    
</head>
<body>
    <div class="container mt-4">
       
    <h1>Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <label >Title:</label>
    <input type="text" name="title" value="{{$post->title}}">
    <textarea name="body"  class="form-control" rows="4" placeholder="Post Body Content" style="mix-width: 100%">{{$post->body}}</textarea>
    <button class="mt-2">Save Changes</button>
    
    </form>
    </div>
</body>
</html>