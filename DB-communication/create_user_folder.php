<?php 
    function createUserFolder($userID){
        mkdir(dirname(__DIR__)."../img/userfiles/".$userID);
        mkdir(dirname(__DIR__)."../img/userfiles/".$userID."/logo");
        mkdir(dirname(__DIR__)."../img/userfiles".$userID."/sign");
    }
?>