<!DOCTYPE html>
<html lang="en">
<head>
    <title>TABLEAU-CLIENT</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" style="text/css" href="client.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container">

         <div class="row"> 
             <div class="col-md-12"> 
                 <h1>CLIENT</h1>
                <div class="card">
                    <div class="card-header" >
                    <table class="espace">
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">NOM</th>
                        <th scope="col">PRENOM</th>
                        <th scope="col">MAIL</th>
                        <th scope="col">GOURDE</th>
                    </tr>
                    </table>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <th>1</th>
                        </div>
                        <div class="mb-3">
                            <tht>2</th>
                        </div>
                        <div class="mb-3">
                            <th>3</th>
                        </div>

                    </div>
                </div> 
             </div> 
         </div> 
    </div>

<br>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>GOURDE</h1>
                <div class="card">
                    <div class="card-header">
                    <table class="espace">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">BOUTEILLE</th>
                            <th scope="col">QUANTITÉ</th>
                            <th scope="col">PRIX</th>
                            <th scope="col">TAILLE</th>
                            <th scope="col">MATIERE PREMIERE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

include 'airtable.php';

foreach ($resultat['records'] as $key => $record) {
    echo '<tr>';

        echo '<td>'.$key.'</td>';
        echo '<td>'.$record['fields']['Bouteille'].'</td>';

        echo '<td>'.$record['fields']['Qte'].'</td>';
        ?>
        <!-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        0</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">1</button>
          <button class="dropdown-item" type="button">2</button>
          <button class="dropdown-item" type="button">3</button>
        </div> -->
      </div>
      <?php
        echo '<td>'.$record['fields']['Prix (from data_bouteille 2)'][0].'</td>';

        echo '<td>'.$record['fields']['Taille (from data_bouteille 2)'][0].'</td>';

        echo '<td>'.$record['fields']['Matière premiere (from data_bouteille 2)'][0].'</td>';



    echo '</tr>';


    // echo '<pre>';

    // // print_r($record['fields']);

    // print_r($record['fields']['Bouteille']);

    // echo '</pre>';

}
?>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>DATA-BOUTEILLE</h1>
                <div class="card">
                    <div class="card-header">
                    <table class="espace">
                    <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">NAME</th>
                        <th scope="col">PRIX</th>
                        <th scope="col">TAILLE</th>
                        <th scope="col">MATIERE PREMIERE </th>
                        <th scope="col">QUANTITE</th>
                        <th scope="col">GOURDE</th>
                        <th scope="col">STOCKAGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    
// include 'airtable.php';

// foreach ($resultat['records'] as $key => $record) {
    // echo '<tr>';
        // echo '<td>'.$key.'</td>';
        // echo '<td>'.$record['fields']['Bouteille'].'</td>';
        // echo '<td>'.$record['fields']['Prix (from data_bouteille 2)'].'</td>';
    // echo '</tr>';
}
                    //?>
                    </table>
                    </div>


                </div>
            </div>
        </div>
    </div> -->
<!-- <table class="table"> -->
<!--
    <thead>
        <tr>
            <th scope="cole">N°</th>
            <th scope="cole">NOM</th>
            <th scope="cole">PRENOM</th>
            <th scope="cole">MAIL</th>
            <th scope="cole">GOURDE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
        </tr>
        <tr>
            <th scope="row">2</th>
        </tr>
        <tr>
            <th scope="row">3</th>
        </tr>





    </tbody> -->


  </body>
</html>