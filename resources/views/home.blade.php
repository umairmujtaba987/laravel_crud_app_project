<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats you are login</p>
    <form action="/logout" method="POST">
    @csrf
    <button>Log out</button>
    </form>

    @else
    <div style="border: 3px solid black">
        <h1>Register </h1>
            <form action="/register" method="POST">
               @csrf
                <input name='name' type="text" placeholder="name">
                <input name='email' type="email" placeholder="email">
                <input name='password' type="password" placeholder="password">
                <button>Register</button>
            </form>
    </div>
    <div style="border: 3px solid black">
        <h1>Login </h1>
            <form action="/login" method="POST">
               @csrf
                <input name='loginname' type="text" placeholder="name">
                <input name='loginpassword' type="password" placeholder="password">
                <button>Log in</button>
            </form>
    </div>
   
    @endauth
    

</body>
</html>