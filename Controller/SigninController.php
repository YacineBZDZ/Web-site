<?php

require_once('../Model/SigninModel.php');
require_once('../View/SigninView.php');

if(isset($_POST['submit'])) {
    $signinmodel = new signinmodel();
    $signinmodel->addUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['category_formation'], $_POST['name_uni'], $_POST['type_user']);
    
    $signinview= new signinview();
    $signinview->showMessage('Les données ont été enregistrées avec succès !');
} else {
    $signinview= new signinview();
    $signinview->showForm();   
}
?>
