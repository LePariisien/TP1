<?php

 // Initialisation du cURL
$curl = curl_init();

// Spécifie l'URL sur laquelle pointer
curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/appYqMEbQPWnrmZBW/Gourde');

// Evite d'afficher sur la page le résultat
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$authorization = "Authorization: Bearer keyxy71KVZEh46MiQ";
// Envoie en header l'autorisation (clé API )
curl_setopt($curl, CURLOPT_HTTPHEADER, array('content-type: application/json', $authorization));

// Execute la session cURL
$resultat = curl_exec($curl);


// Ferme la session cURL
curl_close($curl);

// Initialisation du cURL
$curl = curl_init();

// Spécifie l'URL sur laquelle pointer
curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/appYqMEbQPWnrmZBW/Gourde');

// Evite d'afficher sur la page le résultat
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$authorization = "Authorization: Bearer keyxy71KVZEh46MiQ";
// Envoie en header l'autorisation (clé API )
curl_setopt($curl, CURLOPT_HTTPHEADER, array('content-type: application/json', $authorization));

//

// Convertir en php le JSON
$resultat = json_decode($resultat, true);

// Affiche le résultat 
//   echo '<pre>';
//   var_dump($resultat);
//   echo '</pre>';


