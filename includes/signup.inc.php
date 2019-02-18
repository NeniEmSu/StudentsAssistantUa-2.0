<?php

// To avoid entry without using sigup-submit
if (isset($_POST['signup-submit'])) {

// For the connection
    require 'dataBaseHandler.inc.php';

// Fetching information for when user signed up
    $type = $_POST['type'];
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

// Error handlers to check if user made mistakes

// check if an input/field was left empty
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($type)) {
  // return user to signup page and carries correctly written fields back
        header("location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
  // stop this code
        exit();
    }

// incase of invalid email and password
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../signup.php?error=invalidmaiuid");
  // stop this code
        exit();
    }

// incase of invalid email
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../signup.php?error=invalidmail&uid=" . $username);
  // stop this code
        exit();
    }

// for invalid password
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../signup.php?error=invaliduid&mail=" . $email);
  // stop this code
        exit();
    }
// for invalid repeated password
    else if ($password !== $passwordRepeat) {
        header("location: ../signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
  // stop this code
        exit();
    }

// for already taken username
    else {

        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

  // check if the sql statement works
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=sqlerror");
    // stop this code
            exit();
        }

  // sending the information to the database
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
    // check if we get a match
            mysqli_stmt_store_result($stmt);
    // check with a function how many results we have inside stmt
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("location: ../signup.php?error=Usertaken&mail=" . $email);
      // stop this code
                exit();
            }
    // FILLING INFORMATION TO DATABASE
            else {

                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, typeUsers) VALUES (?, ?, ?, ?) ";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../signup.php?error=sqlerror");
          // stop this code
                    exit();
                }
        // SAVING INFO AND ENCRYPTING PASSWORD
                else {

          // Hashing password with BCRYPT HASHING METHOD
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $type);
                    mysqli_stmt_execute($stmt);

          // success message and redirection to signup page
                    header("location: ../signup.php?signup=success");
          // stop this code
                    exit();
                }

            }

        }

    }

// Close connection to database
    mysqli_stmt_close($stmt);
    mysql_close($conn);

}

// To avoid entry without using sigup-submit
else {
    header("location: ../signup.php");
  // stop this code
    exit();
}
