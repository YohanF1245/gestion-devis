<?php 
require_once(__DIR__."\check_function.php");
session_start();
$signup_data = $_POST;
$can_put_in_db = true;
$can_upload_sign = false;
$can_upload_logo = false;
$errorArray;
//mkdir(dirname(__DIR__)."../img/userfiles");
foreach ($signup_data as $key => $value) {
    switch ($key) {
        case 'usermail':
            if((checkMail($value) === false)){
                $errorArray[$key] = "is-invalid";
                $can_put_in_db  = false;
            }else{
                $errorArray[$key] = "is-valid";
            }
            break;
        case "siret" : 
            if(!(checkSiret($value))){
                $errorArray[$key] = "is-invalid";
                $can_put_in_db = false;
            }else{
                $errorArray[$key] = "is-valid";
            }
        default:
            if(checkInput($value)){
                $can_put_in_db = false;
                $errorArray[$key] = "is-invalid";
            }else{
                $errorArray[$key] = "is-valid";
            }
            break;
    }
}
if(isset($_FILES["logoFile"]) && $_FILES["logoFile"]["error"]===0){
    switch (checkFile($_FILES["logoFile"])) {
        case 'tooBig':
            $errorMessage = "Fichier logo trop volumineux ! ";
            $errorArray["logoFile"] = "is-invalid";
            break;
        case "wrongExtension" : 
            $errorMessage = "L'extention du fichier logo n'est pas supportée ! ";
            $errorArray["logoFile"] = "is-invalid";
            break;
        case "true" : 
            $can_upload_logo = true;
            $errorArray["logoFile"] = "is-valid";
            break;
    }
}
if(isset($_FILES["signFile"]) && $_FILES["signFile"]["error"]===0){
    switch (checkFile($_FILES["signFile"])) {
        case 'tooBig':
            $errorMessage = "Fichier signature trop volumineux ! ";
            $errorArray["signFile"] = "is-invalid";
            break;
        case "wrongExtension" : 
            $errorMessage = "L'extention du signature logo n'est pas supportée ! ";
            $errorArray["signFile"] = "is-invalid";
            break;
        case "true" : 
            $can_upload_sign = true;
            $errorArray["signFile"] = "is-valid";
            break;
    }
}
if($signup_data["password"] != $signup_data["passwordConfirm"]){
    $can_put_in_db = false;
}

if($can_put_in_db){
    $dataSet = array(
        "datas" => $signup_data
    );
}else{
    $_SESSION["errorFields"] = $errorArray;
    header("Location: ../Vue/signup.php");
}

?>
<pre>
    <?php 
    ?>
</pre>
<!-- 
key : userMail value : yohan.ferdin@hotmail.fr = true
key : password value : aezrty = true
key : passwordConfirm value : azerty = true
key : businessName value : squaresoft = true
key : siret value : 1326548789566321 = true
key : signFile value : Capture d'écran 2023-08-21 175828.png = true
key : logoFile value : = false 

    Array
(
    [name] => Capture d55((  'écran 2023-07-25 231545.png
    [full_path] => Capture d55((  'écran 2023-07-25 231545.png
    [type] => image/png
    [tmp_name] => C:\xampp\tmp\phpAF27.tmp
    [error] => 0
    [size] => 6776
)

-->