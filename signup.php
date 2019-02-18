<?php
require "header.php";
?>


<?php
if (isset($_SESSION['name'])) {
  echo '
                <form class="form-signin" action="includes/signup.inc.php" method="POST">
                  <h1 class="h3 mb-3 font-weight-normal">Signup Here</h1>
                    <label for="Username" class="sr-only">Username</label>
                    <input type="Username" name="uid" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Email..." required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password..." required>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pwd-repeat" id="inputPassword" class="form-control" placeholder="Repeat Password..." required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup-submit">Sign up<span data-feather="log-in"></span></button>
                    <p class="mt-5 mb-3 text-muted"></p>
                </form>';
} else {
  echo '
                <form class="form-signin" action="includes/admin.inc.php" method="POST">
                  <h1 class="h3 mb-3 font-weight-normal" style = "text-align: center;">This Page is restricted for Admin only! <br> Please sign in </h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                      <input type="Username" name="uname" id="inputEmail" class="form-control" placeholder="Admin Username..." required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Admin Password..." required>
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login-submit">Sign in<span data-feather="log-in"></span></button>
                  <p class="mt-5 mb-3 text-muted"></p>
              </form>';
}
?>
<?php
require "footer.php"
?>
