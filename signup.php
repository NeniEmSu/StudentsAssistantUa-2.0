<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="title" content="Students Assistant UA" />
    <meta name="description"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work." />
    <meta name="keywords"
        content="test practice, exam preparations, examinations, student assistant, students assistant , medical university, students assistant app, student assistant app, student assistant application, a student research assistant, student assistant benefits, student assistant exam, student assistant evaluation, student assistant high school, student assistant library, student assistant research, student assistant training, student assistant teacher, practice test for postal exams 473 free, practice test for nursing exams, medical assistant practice test for written exams, ukrainian medical schools ranking, best ukrainian medical school,  ukraine, education, learn, classes, exam preparation, students, assistant, studentsassistant, ternopil, kiev, test-practice, international students, medical university, study in ukraine, study smart, mcq practice, directions to school buildings, study notes, study tips, educational, tdmu, tdmuexams, tdmu exam practice" />
    <meta name="robots" content="index, follow" />
    <title>Sign Up | Students Assistant UA</title>

    <?php
    require 'metaTags.php';
    ?>

    <!-- Open Graph protocol & Sharing meta data -->

    <meta property="og:url" content="https://www.studentsassistantua.com/" />
    <meta property="og:title" content="Sign Up | StudentsAssistantUa">
    <meta property="og:description"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work.">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.studentsassistantua.com/img/mainHero.jpg " />
    <meta property="og:image:url" content="https://www.studentsassistantua.com/img/mainHero.jpg " />
    <meta property="og:image:secure_url" content="https://www.studentsassistantua.com/img/mainHero.jpg " />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@studentsassistantua" />
    <meta name="twitter:site:id" content="@studentsassistantua" />
    <meta name="twitter:creator" content="@studentsassistantua" />
    <meta name="twitter:creator:id" content="@studentsassistantua " />
    <meta name="twitter:url" content="https://www.studentsassistantua.com" />
    <meta name="twitter:title"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work | StudentsAssistantUa" />
    <meta name="twitter:description"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work." />
    <meta name="twitter:image" content="https://www.studentsassistantua.com/img/mainHero.jpg " />

    <!-- Css -->

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <!-- Webfonts Css -->

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />

    <style>
    * {
        box-sizing: border-box;
    }

    .sign-landing {
        display: inline-block;
        margin-top: 5em;
    }

    .contain {
        margin-top: 3rem;
        border-radius: 5px;
        padding: 20px 0 30px 0;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        border-radius: 4px;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=email]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button.loginbtn,
    button.signupbtn {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
        font-size: 17px;
    }

    button.loginbtn:hover,
    button.signupbtn:hover {
        opacity: 1;
    }

    /* Extra styles for the cancel button */
    button.loginbtn {
        background-color: var(--main-marron-color);
        color: white;
        font-size: 17px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    button.signupbtn {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;

    }

    /* Float cancel and signup buttons and add an equal width */
    .loginbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .fb {
        background-color: #3B5998;
        color: white;
        padding: 1rem;
        margin: 1rem 0;
    }

    .google {
        background-color: #dd4b39;
        color: white;
        padding: 1rem;
        margin: 1rem 0;
    }

    .btnLoginPage {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none;
    }


    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 600px) {

        .loginbtn,
        .signupbtn {
            width: 100%;
        }


    }
    </style>
</head>

<body>

    <div class="wrapper">
        <?php
        require 'header.php';
        ?>
        <main>

            <div class="sign-landing contain">
                <form action="includes/signup.inc.php" method="POST">

                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="Username"><b>Username</b></label>
                    <input type="text" name="uid" id="inputUsername" placeholder="Username" required autofocus>

                    <label for="inputEmail"><b>Email</b></label>
                    <input type="email" name="mail" id="inputEmail" placeholder="Enter Email" required>

                    <label for="inputPassword"><b>Password</b></label>
                    <input type="password" name="pwd" id="inputPassword" placeholder="Enter Password" required>

                    <label for="inputPassword-repeat"><b>Repeat Password</b></label>
                    <input type="password" name="pwd-repeat" id="inputPasswordRepeat" placeholder="Repeat Password"
                        required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="terms.php" style="color:dodgerblue">Terms &
                            Privacy</a>.</p>

                    <div class="clearfix">
                        <a href="login.php"><button type="button" class="loginbtn">Log In Instead!</button></a>
                        <button type="submit" name="signup-submit" class="signupbtn">Sign Up</button>
                    </div>
                    <div>
                        <a href="#" class="google btnLoginPage"><i class="fa fa-google fa-fw">
                            </i> Sign Up with Google
                        </a>
                        <a href="#" class="fb btnLoginPage">
                            <i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
                        </a>
                    </div>
                </form>
        </main>

        <?php
        require 'footer.php';
        ?>

    </div>
    <!-- JavScript -->

    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>


</body>

</html>