<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/login style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="yabegitu">
        <h3 id="text1" class="end1">Let’s get started now!</h3>
        <h3 id="text2" class="end2">Or <a href="/register">create</a> an account if not registered yet</h3>
    </div>

    <div class="login-page">
        <div class="form">
            <div class="lingkaran rounded-circle">
                <h1>G</h1>
            </div>
            <form class="login-form" action="/login/login" method="POST">
                @csrf
                <input type="email" value="{{ Session::get('email') }}" name="email" id="email" class="form-control"  placeholder="name@example.com">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <button>Sign In</button>
                <p class="message">Don’t have account? <a href="/register">Sign up</a></p>
                <a class="w-100 btn btn-lg btn-primary" type="submit" href="{{ url('login/google') }}">Sign In</a>
            </form>
        </div>
    </div>
    <main class="form-signin w-100 m-200">
    </main>
    <script src="/js/login.js"></script>
</body>

</html>
