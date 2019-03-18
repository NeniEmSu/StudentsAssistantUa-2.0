<!DOCTYPE html>

<?php

include 'includes/dataBaseHandler.inc.php';

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

?>

<html>

<head>
    <title>Exam</title>

    <!--Stylesheet-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/exam.css">

</head>

<body class="dark-grey">

    <header>
    </header>

    <span data-msg="<?php if (isset($_SESSION[' username'])) {
    echo $_SESSION['username'];
} ?>" id="sessionvar"></span>

    <main>

        <div class="modal fade" id="exam" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center text-black">Attempt Exam</h4>
                    </div>
                    <div class="modal-body">
                        <p class="large text-black"><strong>Exam Duration</strong> : 1 hour</p>
                        <label class="text-black">Choose subject</label>

                        <ul class="sublist">

                            <li id="medbio">Medical Biology</li>


                            <li id="dm">chemistry</li>


                            <li id="coa">Phylosophy</li>




                        </ul>

                        <div class="text-center">
                            <button class="hero-btn start_attempt" href="exam?sub=">Start Attempt <i
                                    class="fa fa-chevron-right icon-hide"></i></button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <label class="text-black">Instructions</label>
                        <p class="text-black">Dont close browser window or reload browser window. If such thing happens
                            you will be logout from exam.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mainExam.js"></script>

</body>

</html>