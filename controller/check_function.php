<?php
function checkInput($toCheck) : bool {
    $valid = false;
    if (isset($toCheck)&&
        trim($toCheck) &&
        !(empty($toCheck))){
            $valid = true;
        }
    return $valid;
}
function checkMail($toCheck) : bool{
    $valid = false;
    if(checkInput($toCheck)){
        if(filter_var($toCheck, FILTER_VALIDATE_EMAIL)){
            $valid = true;
        };
    };
    return $valid;
}
?>