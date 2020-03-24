<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Muahaha</title>
</head>
<body>
<?php require_once("testform.php");
if($_POST && count($errors) === 0 ){
    require_once("thanks.php");
}
else {
?>
<form  method="post" action="" >
    <p>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="name"  name="name" required  value="<?php if(isset($_POST['name'])) echo htmlentities($_POST['name']);?>">
    </p>
    <p><?php echo $errors['name1']; ?></p>

    <p>
        <label  for="Prenom">Prenom :</label>
        <input  type="text"  id="firstname"  name="user_name" required value="<?php if(isset($_POST['user_name'])) echo htmlentities($_POST['user_name']);?>" >
    </p>
    <p><?php  echo $errors['user_name1']; ?></p>

    <p>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required value="<?php if(isset($_POST['user_email'])) echo htmlentities($_POST['user_email']);?>">
    </p>
    <p><?php echo $errors['user_email1']; ?></p>

    <p>
    <label for="phone">Numero de telephone :</label>

    <input type="tel" id="phone" name="user_phone" required value="<?php if(isset($_POST['user_phone'])) echo htmlentities($_POST['user_phone']);?>">
    </p>
    <p><?php echo $errors['user_phone1']; ?></p>

    <p>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required><?php if(isset($_POST['user_message'])) echo htmlentities($_POST['user_message']);?></textarea>
    </p>
    <p><?php echo $errors['user_message1']; ?></p>

    <p>
        <select name="user_reasons" id="reasons-select" required >
            <option value="1">Demande de rendez-vous</option>
            <option value="2">Assistance</option>
            <option value="3">Question Produit</option>
        </select>
    </p>

    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
<?php } ?>
</body>
</html>