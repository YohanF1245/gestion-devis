<?php

    function checkMail_inDB($mail) : bool{
        require_once(__DIR__ . "/db_connect.php");
        $mail = strtolower($mail);
        $returnState = false;
        $usersStatement = $mysqlClient -> prepare("SELECT * FROM users ");
        $usersStatement ->execute();
        $userList = $usersStatement -> fetchAll();
        foreach ($userList as $user) {
            if($user["mail"] === $mail){
                $returnState = true;
            }
        }
        return $returnState;
    }
?>