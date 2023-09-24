<?php
require_once('db.php');


function connexion($login,$pass){
    global $users;
    
    foreach ($users as $user) {
        if($user['username']==$login && $user['pass'] == $pass){
            header('Location:home.php');
            die;
        }
    }
    header('Location:login.php?connexion=0&login='.$login);
}


function getProduitbyNumero($numero){
    global $produits;
    foreach ($produits as $produit) {
        if($produit['numero'] == $numero){
            return $produit;
        }
    }
    return null;
}