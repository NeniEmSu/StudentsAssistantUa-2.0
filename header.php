<header>

    <div class="container">
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <div class="menu-branding">
            <a href="index.php" class="logo"><img src="img/StudentsAssistantUA.png" alt="StudentsAssistantUA logo"></a>
        </div>
        <nav class="menu">
            <ul class="menu-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exampractice.php">Exam practice</a>
                </li>
            </ul>
            <button id="modalBtn2" class="btn clear-btn sign-in">Sign in</button>
            <button id="modalBtn" class="btn small-btn sign-up">Sign up</button>
            <div id="simpleModal" class="modal">
                <div class="modal-content">

                    <div class="modal-header"><span class="closeBtn">+</span>
                        <h1>Lets Get You Started!</h1>
                    </div>

                    <form class="form-signup" action="includes/signup.inc.php" method="POST">
                        <h2 class="h3 mb-3 font-weight-normal">Signup Here</h2>

                        <label for="Username" class="sr-only">Username</label>
                        <br />
                        <input type="Username" name="uid" id="inputEmail" class="form-control" placeholder="Username"
                            required autofocus>
                        <br />
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <br />
                        <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Email..."
                            required autofocus>
                        <br />
                        <label for="inputPassword" class="sr-only">Password</label>
                        <br />
                        <input type="password" name="pwd" id="inputPassword" class="form-control"
                            placeholder="Password..." required>
                        <br />
                        <label for="inputPassword" class="sr-only">Password</label>
                        <br />
                        <input type="password" name="pwd-repeat" id="inputPassword" class="form-control"
                            placeholder="Repeat Password..." required>
                        <br /><br />
                        <button class="btn small-btn sign-up" type="submit" name="signup-submit">Sign
                            up<span data-feather="log-in"></span></button>
                        <br /><br />
                        <p class="mt-5 mb-3 text-muted">Already Have an Account?</p><button id="modalBtn2"
                            class="btn clear-btn sign-in">Sign in</button>

                        <br /><br />

                    </form>
                </div>
            </div>

            <div id="simpleModal2" class="modal2">
                <div class="modal-content">

                    <div class="modal-header"><span class="closeBtn2">+</span>
                        <h2>Lets Get You Back In.</h2>
                    </div>

                    <form class="form-signin" action="includes/login.inc.php" method="POST">
                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">You are logged out <br>
                            Please sign in </h1>
                        <br />
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <br />
                        <input type="Username" name="mailuid" id="inputEmail" class="form-control"
                            placeholder="Username..." required autofocus>
                        <br />
                        <label for="inputPassword" class="sr-only">Password</label>
                        <br />
                        <input type="password" name="pwd" id="inputPassword" class="form-control"
                            placeholder="Password..." required>
                        <br />
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <br />
                        <button class="btn small-btn sign-in" type="submit" name="login-submit">Sign in<span
                                data-feather="log-in"></span></button>
                        <br /><br />
                        <p class="mt-5 mb-3 text-muted">Don't have an account?</p>
                        <button id="modalBtn2" class="btn clear-btn sign-in">Sign up</button>
                        <br /><br />
                    </form>


                </div>
            </div>


        </nav>

        <div class="hamburger-menu">
            <div class="hamburger-menu-nav">
                <div class="hamburger-menu-nav-navigation">
                    <h3>Main Navigation</h3>
                    <ul>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="index.php">Home</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="about.php">About</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="hamburger-menu-nav-resources">
                    <h3>Study Resources</h3>
                    <ul>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">Compiled Study Notes</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="exampractice.php">Exam Practice</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">Practical Skills Preparatory Material</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">Research Works</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">Medical Calculators</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">Pdf Text Book Library</a>
                        </li>
                    </ul>

                </div>

                <div class="hamburger-menu-nav-license">
                    <h3>Licensing Examinations </h3>
                    <ul>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">KROK 1 </a>
                        </li>

                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">KROK 2 </a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">IELTS</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">MDCN</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">MDCG</a>
                        </li>
                        <li class="hamburger-menu-nav-item">
                            <a class="hamburger-menu-nav-link" href="#">PLAB</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</header>