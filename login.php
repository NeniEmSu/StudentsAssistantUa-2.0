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
    <title>Sign In | Students Assistant UA</title>

    <?php
    require 'metaTags.php';
    ?>

    <!-- Open Graph protocol & Sharing meta data -->

    <meta property="og:url" content="https://www.studentsassistantua.com/" />
    <meta property="og:title" content="Sign In | StudentsAssistantUa">
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

    .log-landing {
        display: inline-block;
        margin-top: 5em;
    }

    .contain {
        margin-top: 3rem;
        border-radius: 5px;
        padding: 20px 0 30px 0;
    }

    /* style inputs and link buttons */
    input {
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
        background: #f1f1f1;
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

    input:hover {
        opacity: 1;
        background-color: #ddd;
    }

    .btnLoginPage:hover {
        opacity: 1;
    }

    /* add appropriate colors to fb, twitter and google buttons */
    .fb {
        background-color: #3B5998;
        color: white;
    }

    .google {
        background-color: #dd4b39;
        color: white;
    }

    /* style the submit button */
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Two-column layout */
    .col {
        float: left;
        width: 50%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* vertical line */
    .vl {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        border: 2px solid #ddd;
        height: 175px;
    }

    /* text inside the vertical line */
    .vl-innertext {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 50%;
        padding: 8px 10px;
    }

    /* hide some text on medium and large screens */
    .hide-md-lg {
        display: none;
    }

    .hide-sm {
        display: block;
        text-align: center;
    }

    /* bottom container */
    .bottom-container {
        text-align: center;
        background-color: var(--main-marron-color);
        border-radius: 5px;
    }

    /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 650px) {
        .col {
            width: 100%;
            margin-top: 0;
        }

        /* hide the vertical line */
        .vl {
            display: none;
        }

        /* show the hidden text on small screens */

        .hide-md-lg {
            display: block;
            text-align: center;
        }

        .hide-sm {
            display: none;
        }
    }
    </style>
</head>

<body>
    <div class="wrapper">

        <?php
        require 'header.php';
        ?>

        <div class="log-landing contain">
            <form action="includes/login.php">
                <div class="row">
                    <h1 style="text-align:center;" class="hide-sm">Social Login or Manually Your Pick!</h1>
                    <h2 style="text-align:center;" class="hide-md-lg">Social Login!</h2>
                    <br />
                    <div class="vl">
                        <span class="vl-innertext">or</span>
                    </div>

                    <div class="col">
                        <a href="#" class="google btnLoginPage"><i class="fa fa-google fa-fw">
                            </i> Login with Google
                        </a>
                        <a href="#" class="fb btnLoginPage">
                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                    </div>

                    <div class="col">
                        <div class="hide-md-lg">
                            <p><br />Or sign in manually: <br /> </p>
                        </div>

                        <input type="text" name="username" placeholder="Username" required autofocus>
                        <input type="password" name="password" placeholder="Password" required>
                        <label>Remember me <input type="checkbox" checked="checked" name="remember">
                        </label>

                        <input type="submit" value="Login">
                    </div>

                </div>
            </form>
        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="signup" style="color:white" class="btnLoginPage">Sign up</a>
                </div>
                <div class="col">
                    <a href="forgotPassword" style="color:white" class="btnLoginPage">Forgot password?</a>
                </div>
            </div>
        </div>


        <?php
        require 'footer.php';
        ?>


    </div>


    <!-- JavScript -->

    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>


</body>

</html>