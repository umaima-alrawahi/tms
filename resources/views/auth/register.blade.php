<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Rigester</title>
    <!----css custom file link-->
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!---Fontawesome CDN link----->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <img class="wave" src="img/bg2.png" />
    <div class="container">
        <div class="img">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h2 class="text-center">Register</h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Name</h5>

                        <input id="name" class="input" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>

                        <input id="email" class="input" type="email" name="email" placeholder="Email" :value="old('email')" required>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-unlock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>


                        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>


                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>



            </form>
        </div>
    </div>
    </div>
    <script src="scripts/java.js"></script>

</body>

</html>