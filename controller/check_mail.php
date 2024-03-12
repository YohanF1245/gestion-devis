<?php 
    require_once(__DIR__."\qcheck_function.php");
    session_start();
    $mail = $_POST["userMail"];
    $valid_mail = false;

    if  (checkMail($mail)){
        $valid_mail = true;
    }
    if ($valid_mail){
        $_SESSION["mail"] = $mail;
        header("Location: ../Vue/signup.php");
    }else{
        $errorMessage = "Une erreur est survenue";
        require_once (dirname(__DIR__) . "../Vue/show_error.php");
    }
?>