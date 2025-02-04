<?php
//Activer la session
session_start();

//include './vendor/autoload.php';
include './env.php';
include './utils/connexion.php';
include './utils/utils.php';

include './controller/headerController.php';
include 'controller/categorieController.php';
include 'controller/accountController.php';
$bdd = connexion();

renderHeader();
ajouterCategory($bdd);
renderAccounts($bdd);
include './vue/footer.php';

