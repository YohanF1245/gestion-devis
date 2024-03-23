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
function checkSiret($toCheck) : bool{
    $valid = false;
    if(checkInput($toCheck)){
        if(is_numeric($toCheck) && strlen($toCheck) === 14){
            $valid = true;
        }
    }
    return $valid;
}
function checkFile($toCheck) : string {
    $valid = "true";
    echo print_r($toCheck);
    if(isset($toCheck) && $toCheck["error"] ===0){
        $valid = ($toCheck["size"]);
        if($toCheck["size"] > 2000000){
            $valid = "toobig";
        }

    }
    $fileInfo = pathinfo($toCheck['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    // if (!in_array($extension, $allowedExtensions)) {
    //     $valid =  "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
    // }
    return $valid;
}
?>
