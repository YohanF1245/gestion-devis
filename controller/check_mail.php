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
        echo("le mail est valide");
    }else{
        echo("le mail est invalide");
    }
?>
<pre>
    <?php 
    ?>
</pre>