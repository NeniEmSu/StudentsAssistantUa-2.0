<?php

// To avoid entry without using login-submit
if (isset($_POST['login-submit'])) {

   //For the connection
    require 'dataBaseHandler.inc.php';

     //Fetching information for when user signed up
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

     //check if an input/field was left empty
    if (empty($mailuid) || empty($password)) {
       //return user to login page and carries correctly written fields back
        header("location: ../index.php?error=emptyfields");
       //stop this code
        exit();
    }

     //check if a match exists in database
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);

       //check if the sql statement works
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror");
         //stop this code
            exit();
        }

       //to pass in the parameters that were sent by the user to the database
        else {

            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);

         //taking the result from the database
            $result = mysqli_stmt_get_result($stmt);

         //check if we got a result from the database
            if ($row = mysqli_fetch_assoc($result)) {

           //To hash the password and check if it matches
                $pwdCheck = password_verify($password, $row['pwdUsers']);

           //check if the user should be loged in or not
                if ($pwdCheck == false) {
                    header("location: ../index.php?error=wrongpwd");
            // stop this code
                    exit();
                }
           //To log user in since password was right
                else if ($pwdCheck == true) {


             //STARTING A SESSION
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("location: ../index.php?LOGIN=Success");
             //stop this code
                    exit();
                }
           //if all else goes wrong
                else {
                    header("location: ../index.php?error=wrongpassword");
             //stop this code
                    exit();
                }
            }

         //if  no data was gotten from the database
            else {
                header("location: ../index.php?error=nouser");
           //stop this code
                exit();
            }

        }
    }

} else {
    header("location: ../index.php");
   //stop this code
    exit();
}
