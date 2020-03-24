<?php
$requeteReasons = [
    "1" => 'Demande de rendez-vous',
    "2" => 'Assistance',
    "3" => 'Question Produit',
];
$prenom = htmlentities($_POST['user_name']);
$nom = htmlentities($_POST['name']);
$mail = htmlentities($_POST['user_email']);
$message = htmlentities($_POST['user_message']);
$tel = htmlentities($_POST['user_phone']);
///Merci {Prénom} {Nom} de nous avoir contacté à propos de “{sujet}”.
/// Un de nos conseiller vous contactera soit à l’adresse {e-mail} ou
/// par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande :
///{message}


echo 'Merci '. $prenom . ' ' . $nom .' de nous avoir contacté à propos de : '.$requeteReasons[intval($_POST['user_reasons'])] .'.</br>';
echo 'Un de nos conseiller vous contactera soit à l’adresse '. $mail .' ou par téléphone au '. $tel . ' dans les plus brefs délais pour traiter votre demande :'. '</br>';
echo $message;