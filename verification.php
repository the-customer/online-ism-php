<?php 

require_once('functions.php');

if(isset($_POST['save'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    connexion($username,$password);
}
