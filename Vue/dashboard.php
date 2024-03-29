<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include dirname(__DIR__,1) ."\Includes\header.php"?>
    <div class = "container">
        <div class="row">
            <div class="col-4 margin-4">
                <button class="btn bg-pd-green h-100 w-100 my-4 text-white fw-bold">AJOUTER UN CLIENT</button>
            </div>
            <div class="col-4 margin-4">
                <button class="btn bg-pd-blue h-100 w-100 my-4 text-white fw-bold">CRÉER UN DEVIS</button>
            </div>
            <div class="col-4 margin-4">
                <button class="btn bg-pd-yellow h-100 w-100 my-4 text-white fw-bold">GÉNÉRER UNE FACTURE</button>
            </div>
        </div>
        <div class="row">
        <div class="col-6 my-5">
                <canvas id="myChart"></canvas>
                <div class="row my-5">
                    <div class="col-6 bg-pd-red h-100 px-0">
                            <p class="py-3  fs-4  text-white text-center">Rentrée</p>
                            <hr class="text-white mx-auto w-75 hr hr-blurry">
                            <p class="  fs-1 text-white text-center">537.3 €</p>
                    </div>
                    <div class="col-6 bg-pd-green h-100 px-0">
                            <p class="py-3 fs-4 text-white text-center">Sortie</p>
                            <hr class="w-75 mx-auto text-white hr hr-blurry">
                            <p class="  fs-1 text-white text-center">537.3 €</p>
                    </div>
                </div>
        </div>
        
        <div class="col-5 offset-1 my-5 py-3 bg-pd-blue text-white ps-5">
            <p>Derniers devis</p>
            <hr>
            <p>18/05/2024</p>
            <p>D0001 - 125€</p>
            <hr>
            <p>18/05/2024</p>
            <p>D0002 - 125€</p>
            <hr>
            <p>18/05/2024</p>
            <p>D0003 - 125€</p>
            <hr>
            <p>18/05/2024</p>
            <p>D0004 - 125€</p>
            <hr>
         </div>
         </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
    <!-- <script src="../script/revenue-chart.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>