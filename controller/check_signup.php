<?php 
require_once(__DIR__."\check_function.php");
session_start();
$signup_data = $_POST;
$can_put_in_db = true;
foreach ($signup_data as $key => $value) {
    switch ($key) {
        case 'usermail':
            if(!(checkMail($value))){
                $can_put_in_db  = false;
            }
            break;
        case "siret" : 
            if(!(checkSiret($value))){
                $can_put_in_db = false;
            }
        default:
            if(!checkInput($value)){
                $can_put_in_db = false;
            }
            break;
    }
}
switch ($_FILES['signFile']['error']) {
    case UPLOAD_ERR_OK:
        break;
    case UPLOAD_ERR_NO_FILE:
        throw new RuntimeException('No file sent.');
    case UPLOAD_ERR_INI_SIZE:
    case UPLOAD_ERR_FORM_SIZE:
        throw new RuntimeException('Exceeded filesize limit.');
    default:
        throw new RuntimeException('Unknown errors.');
}
print_r($_FILES["signFile"]["name"]);
// echo(checkFile($_FILES["logoFile"]));
// echo(checkFile($_FILES["signFile"]));
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
key : logoFile value : = false -->