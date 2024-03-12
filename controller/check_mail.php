<?php 
    session_start();
    $mail = $_POST["userMail"];
    $valid_mail = false;

    if  (isset($mail) &&
        trim($mail !== "") &&
        !(empty($mail)) &&
        filter_var($mail, FILTER_VALIDATE_EMAIL)
    ){
        $valid_mail = true;
    }
    if ($valid_mail){
        $_SESSION["mail"] = $mail;
        header("Location: ../Vue/subscribe.php");
    }else{
        $errorMessage = "Une erreur est survenue";
        require_once (dirname(__DIR__) . "../Vue/show_error.php");
    }
?>
<pre>
    <?php
    ?>
</pre>