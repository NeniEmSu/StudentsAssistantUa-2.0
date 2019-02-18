<?php
    
//    Need to have an already started session to be able to end it.
session_start();
//    Take all session variables created and deletes the values inside them, i.e id and username are deleted from session variables.
session_unset();
//    Desroyes the sessions we have runing in the website.
session_destroy();
//    Redirect to loged out index page.
header("location: ../index.php");
