<?php

    function checkUser_inDB($user) : bool{
        require_once(__DIR__ . "/db_connect.php");
        $returnState = false;
        $usersStatement = $mysqlClient -> prepare("SELECT * FROM users ");
        $usersStatement ->execute();
        $userList = $usersStatement -> fetchAll();
        foreach ($userList as $user) {
            if($user["mail"] === $user){
                $returnState = true;
            }
        }
        return $returnState;
    }
?>