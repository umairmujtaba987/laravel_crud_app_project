<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/css/app.css'])
    <!-- Additional CSS/CDNs or scripts -->
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         
            <a class="navbar-brand" href="/">CURD</a>
            <button method="POST" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  
                      @auth   
                        @csrf
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a> 
                        </li>
                        @else
                        
                         <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                        @endauth
                    
                </ul>
            </div>
       
    </nav>
    <!-- page-content -->

            @yield('content')
        

        
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
     
            <span class="text-muted  mt-5 text-center">CURD &copy; {{ date('Y') }}</span>
       
    </footer>
 
</body>
</html>
