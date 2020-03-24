<?php
if ($_POST){


    $errors = [];

    ///Start Validation
    if(empty($_POST['name'])){
        $errors['name1'] = 'Vous devez entrer un Nom ';
    }
    if(empty($_POST['user_name'])){
        $errors['user_name1'] = 'Vous devez entrer un Prénom ';
    }
    if(empty($_POST['user_email'])){
        $errors['user_email1'] = 'Vous devez entrer un Email ';
    }   elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors['user_email1'] = 'Veuillez renseigner un Email valide.';
    }
    if(empty($_POST['user_phone'])){
        $errors['user_phone1'] = 'Vous devez entrer un numéro de téléphone ';
    }   elseif (strlen($_POST['user_phone']) !== 10) {
        $errors['user_phone1'] = 'Veuillez saisir un numéro valide.';
    }   elseif (preg_match('/[^0-9]/', $_POST['user_tel'])) {
        $errors['user_phone1'] = 'Veuillez saisir un numéro valide.';
    }
    if(empty($_POST['user_message'])){
        $errors['user_message1'] = 'Vous devez écrire un message ';
    }

    /// Chek errors

}
?>