<?php
require('../include/connexion_bdd.php');

$erreur = [];
    if(empty($_POST) === false)
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(empty($_POST['nom']))
        {
            $erreur['nom'] = "Veuillez saisir votre nom";
        }
        if(empty($_POST['prenom']))
        {
            $erreur['prenom'] = "Veuillez saisir votre prénom";
        }
        if(empty($_POST['email']))
        {
            $erreur['email'] = "Veuillez saisir un email";
        }
        else
        {
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
            {
                $erreur['email'] = "Veuillez saisir un email valide";
            }
        }
        if(empty($_POST['message']))
        {
            $erreur['message'] = "Veuillez saisir votre message";
        }
    }

    if(empty($erreur)){
        try{
            $sth = $con -> prepare("INSERT INTO message (nom_message, prenom_message, adresse_mail_message, contenu_message) 
                VALUES (:nom_message, :prenom_message, :adresse_mail_message, :contenu_message)");
            $sth->bindParam(':nom_message', $_POST['nom']);
            $sth->bindParam(':prenom_message', $_POST['prenom']);
            $sth->bindParam(':adresse_mail_message', $_POST['email']);
            $sth->bindParam(':contenu_message', $_POST['message']);
    
            $sth->execute();
    
            echo 'Votre demande a bien été prise en compte';
        }
        catch (PDOException $exception)
        {
            echo 'erreur';
        }
    }
    
//var_dump($erreur);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    
</body>
</html>
<div id="container-formulaire">
    <div id="formulaire">
        <div id="titre">
            <h1>Contactez Nous !</h1>
        </div>
        <form id="contact" method="POST" action="#">
            <div class="item-contact">
                <input class="input" type="text" name="nom" placeholder="Nom">
                
                <?php
                if(isset($erreur['nom']))
                {
                    ?><div class="erreur">
                        <p class="message-erreur"><?php echo $erreur['nom']; ?></p>
                    </div><?php
                }
                else
                {
                    echo "";
                }
                ?>
            </div>

            <div class="item-contact">
                <input class="input" type="text" name="prenom" placeholder="Prénom">

                <?php
                if(isset($erreur['prenom']))
                {
                    ?><div class="erreur">
                        <p class="message-erreur"><?php echo $erreur['prenom']; ?></p>
                    </div><?php
                }
                else
                {
                    echo "";
                }
                ?>

            </div>

            <div class="item-contact">
                <input class="input" type="email" name="email" placeholder="E-mail">

                <?php
                if(isset($erreur['email']))
                {
                    ?><div class="erreur">
                        <p class="message-erreur"><?php echo $erreur['email']; ?></p>
                    </div><?php
                }
                else
                {
                    echo "";
                }
                ?>
            </div>

            <div id="item-message">
                <textarea id="input-message" type="text" name="message" placeholder="Entrez votre message"></textarea>

                <?php
                if(isset($erreur['message']))
                {
                    ?><div class="erreur">
                        <p class="message-erreur"><?php echo $erreur['message']; ?></p>
                    </div><?php
                }
                else
                {
                    echo "";
                }
                ?>

            </div>

            <div class="item-contact">
                <input id="submit" type="submit">
                <?php
                //if(isset($_POST) === false)
                //{
                //    echo "Votre demande ne peut pas être prise en compte";
                //}
                //else
                //{
                //    echo "Votre demande a bien été prise en compte";
                //}
                ?>
            </div>
        </form>
    </div>
</div>