<?php
    // Chargez les classes du modèle et du contrôleur
    require_once 'Model/LoginModel.php';
    require_once 'Controller/Logincontroller.php'; 
    require_once 'style.php';
    // Initialisez le contrôleur
   $controller = new LoginController();
    // Si le formulaire est soumis, vérifiez les identifiants de connexion
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $controller->login($_POST['email'], $_POST['password']);
    }

    // Affichez la vue de connexion
    require_once ('View/LoginView.php');
    


?>
