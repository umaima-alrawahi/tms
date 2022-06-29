<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Rigester</title>
    <!----css custom file link-->
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!---Fontawesome CDN link----->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
    <img class="wave" src="img/bg2.png" />
    <div class="container">
      <div class="img">
      </div>
      <div class="login-content">
                <form action="signup.php" method="POST" autocomplete="">
                    <h2 class="text-center">Register</h2>
                   
                     <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Name</h5>
                        <input class="input" placeholder="Name" type="text" name="name"  required >
                        </div>
          </div>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="div">
              <h5>Email</h5>
                        <input class="input" type="email" name="email" placeholder="Email"  required >">
                        </div>
          </div>

  <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <input class="input" type="email" name="email" placeholder="Email" required >
            </div>
          </div>

  <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5> Email to Send OTP code</h5>
              <input class="input" type="email" name="email" placeholder="Email" required >
            </div>
          </div>

          
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-unlock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    </div>
                    <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Confirm Password</h5>
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    </div>
                    <div class="input-div one">
            <div class="i">
              <i class="fa-solid fa-user-gear"></i>
            </div>
            <div class="div">
            <h5><label for="rule">Rule:</label></h5>
                    <select name="rule" id="rule" required>
                        <option value="">          </option>
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <input class="btn" type="submit" name="signup" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script src="scripts/java.js"></script>

</body>
</html>