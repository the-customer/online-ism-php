<?php 
// error_reporting(E_ALL & ~E_DEPRECATED);
// ini_set("display_errors", 1);


//variable : il faut commencer par le symbole $
$nom = 'DIOP';
$age = 120;

//constante
// const nom = 'NIANG'; //ou bien
define('nom','NIANG');

// $nom = "FAYE";

// echo nom;
//tableaux:

// $tab = array('NIANG','DIOP','FAYE',true,23,4.5); // ou bien
$tab = ['NIANG','DIOP','FAYE',true,23,4.5]; 

// print_r($tab);

//Pour voir la structure et le contenu d'une variable
// echo '<pre>';
// var_dump($tab);
// echo '</pre>';

// LES TABLEAUX:
// En php il existe deux types de tableau:
// 1 - LES TABLEAUX NUMEROTES : les cellule sont numerotées
//En php un tableau peut avoir plusieurs types de valeus : meme des tableux inmbriques
$pers1 = ["Moussa","Diop",19,"Pikine"];
$pers2 = ["Toto","Ba",20,"Dakar"];
$pers3 = ["Rama","Ndiaye",29,"Guediawaye"];
//afficher le nom de rama
// echo $pers3[0]. ' ' .$pers3[1];
//Parcourir les donnees de toto:
// count($nomTableau) => permet d'avoir la taille du tableau
// for ($i=0; $i < count($pers2); $i++) { 
//   echo $pers2[$i].' - ';
// }
//
// foreach ($pers2 as $val) {
//   echo $val.' - ';
// }
//Mettre toutes les personne dans un meme tableau
$personnes = [
  $pers1,
  $pers2,
  $pers3
];
// 2 - LES TABLEAUX ASSOCIATIFS : les cellule sont nommées
$pers1 = [
  'firstname'   => 'Rama',
  'lastname'    => 'Diop',
  'age'         => 12,
  'Town'        => 'Dakar'
];

// echo $pers1['firstname']; // pour afficher la cellule firstname
// foreach ($pers1 as $key => $value) {
//   echo $key.' : '.$value . '<br/>';
// }
//
$users = [
  [
    'username'  => 'toto',
    'password'  => 'toto123',
  ],
  [
    'username'  => 'tata',
    'password'  => 'passer'
  ],
  [
    'username'  => 'titi',
    'password'  => 'titititi'
  ]
];

foreach ($users as $user) {
  foreach ($user as $key => $value) {
    echo $key . ' : '.$value. '<br/>';
  }
  echo '<p>-------------------</p>';
}

//Formulaire avec les deux variable super-gloabel : voir le fichier formulaire.

// echo '<pre>';
// var_dump($personnes);
// echo '</pre>';
?>


<!-- <h1>NOM : <?= $nom ?></h1> -->

<!-- <p>
  Mon nom est <?= $nom ?> et j'ai <?= $age ?> ans
</p> -->