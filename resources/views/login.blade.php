@extends('layouts.app')

@section('content') 
 
      <div class="border p-5">
        <h1 class="text-center">Log in</h1>
        <form action="/userlogin" method="POST">
            @csrf
              
            <label class=" mt-5">USERNAME</label>
                <input name='loginname' type="text" class="form-control" placeholder="Name">
               
               
            <label>PASSWORD</label>
                <input name='loginpassword' type="password" class="form-control" placeholder="Password">
           
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                 
        </form>
      </div>
      

 

@endsection 