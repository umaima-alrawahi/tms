<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link href="styles/style.css" rel="stylesheet" />

</head>

<body>
    <script src="js/app.js"></script>

    <img class="wave" src="../img/bg1.png">
    <div class="container">
        <div class="img">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img src="../img/logicon.jpg">
                <h2 class="title">Welcome </h2>
                </br>
                </br>
                </br>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input id="email" class="input" type="email" name="email" placeholder="email" :value="old('email')" required autofocus>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>

                        <input class="input" id="password" type="password" name="password" placeholder="password" required autocomplete="current-password">
                    </div>
                </div>
                </br>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif


                    <button class="btn">
                        {{ __('Log in') }}
                    </button>
                    <a href="{{ url('/register') }}">Register</a>



                </div>




            </form>



        </div>
    </div>




</body>

</html>