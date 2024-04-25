@extends("layouts.app")
@section('content')
    
          <div class="border p-5">
            <h1 class="text-center">Register</h1>
            <form action="/registered" method="POST">
                @csrf
                  
                <label class=" mt-5">USERNAME</label>
                    <input name='name' type="text" class="form-control" placeholder="Name">
                   
                <label>EMAIL</label>
                    <input name='email' type="email" class="form-control" placeholder="Email">
                  
                <label>PASSWORD</label>
                    <input name='password' type="password" class="form-control" placeholder="Password">
               
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                     
            </form>
          </div>
          
   
@endsection 