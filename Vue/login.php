<?php  
    require_once dirname(__DIR__) . "../DB-communication/db_connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../CSS/bs-color-override.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<body class="min-vh-100">
    <div class="container-fluid bg-pd-blue" style="height
    :15vh!important">
</div>
<div class="container mt-5">
    <div class="row">
        <div class="offset-4 col-4 d-flex justify-content-center">
            <img class="img-fluid w-25" src="../img/smart-devis-logo.svg">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4 offset-4">
            <h2 class="text-center text-pd-yellow">CONNEXION</h2>
        </div>
    </div>
    <form class="col-4 offset-4" action="controller/check_mail.php" method="POST">
        <div class="mb-3">
            <label for="userMail" class="form-label">Entrez votre e-mail :</label>
            <input type="email" class="form-control" id="userMail" name="userMail" value="<?php echo$_SESSION["mail"]?>">
        </div>
        <div class="mb-3">
            <label for="userPass" class="form-label">Entrez votre mot de passe :</label>
            <input type="password" class="form-control" id="userPass" name="userPass">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary ">Connexion ou créer un compte</button>
        </div>
    </form>
</div>
<div class="container-fluid bg-pd-blue position-absolute bottom-0" style="height:15vh!important">
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>