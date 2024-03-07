<?php

$entrepriseCurl = curl_init();
curl_setopt($entrepriseCurl, CURLOPT_URL, "https://api.insee.fr/entreprises/sirene/V3/siret/38406883900016");
curl_setopt($entrepriseCurl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($entrepriseCurl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($entrepriseCurl, CURLOPT_HTTPHEADER, array("Authorization: Bearer 879ba605-9700-38da-95e9-b5350cb6cf73"));

$result = curl_exec($entrepriseCurl);
$data = json_decode($result,true);
echo "<pre>";
echo print_r($data);
echo "</pre>";
$dumpedDatas = var_dump($data);
$nomEntreprise = $data["etablissement"]["uniteLegale"]["denominationUniteLegale"];
$arrayAdress = $data["etablissement"]["adresseEtablissement"];

function buildAdress($adressArray): string{
$adress = "";
    foreach ($adressArray as $key => $value) {
        $adress .= " ".$value;
    }

return $adress;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script/apitest.js" defer></script>
</head>
<body>
    <h1>Détail de l'entreprise</h1>
    <h2>Nom de l'entreprise : <?php echo($nomEntreprise)?></h2>
    <h2>Adresse de l'entreprise : <?php echo(buildAdress($arrayAdress))?></h2>
</body>
</html>