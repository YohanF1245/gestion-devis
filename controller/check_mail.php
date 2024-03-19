<?php 
    require_once(__DIR__."\check_function.php");
    require_once(dirname(__DIR__)."..\DB-communication\checkDB_mail.php");
    session_start();
    $mail = $_POST["userMail"];
    $valid_mail = false;

    if  (checkMail($mail)){
        $valid_mail = true;
    }
    if ($valid_mail){
        $_SESSION["mail"] = $mail;
        if(checkMail_inDB($mail)){
            header("Location: ../Vue/login.php");
        }else{
            header("Location: ../Vue/signup.php");
        }
    }else{
        $errorMessage = "Une erreur est survenue";
        require_once (dirname(__DIR__) . "../Vue/show_error.php");
    }
?>