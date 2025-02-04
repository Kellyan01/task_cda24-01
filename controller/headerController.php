<?php
function renderHeader(){
    $nav = '';
    if(isset($_SESSION['id'])){
       $nav='<a href="myAccount.php">Mon Compte</a>
            <a href="deco.php">Se Déconnecter</a>';
    }
    include './vue/header.php';
}