<?php
require("../include/connexion_bdd.php");
$query = $con->prepare("SELECT * FROM message");
$query->execute();
$elements = $query->fetchAll();
if (isset($_POST['delete'])) 
{
    $formulaire = $_POST['delete'];
    
    if (isset($formulaire['id'])) 
    {
        try 
        {
            $delete = $con->prepare('DELETE FROM message WHERE id_message = :id');
            $delete->bindParam(':id', $formulaire['id']);
            $delete->execute();

        } catch (\Exception $exception) {
            var_dump($exception);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backoffice</title>
    <link rel="stylesheet" href="backoffice.css">
</head>
<body>
    <div id="content-modal">
        <div id="modal-delete">
            <h1 id="titre-modal-delete">Etes vous sur de vouloir supprimer cette ligne ?</h1>
            <div id="button-oui-non">
                <form action="#" method="POST">
                    <input type="hidden" name="delete[nom]" value="<?php echo $liste["nom_message"] ?>">
                    <input type="hidden" name="delete[id]" value="<?php echo $liste["id_message"] ?>">
                    <button id="button-oui" onclick="">Oui</button>
                </form>
                <form action="#" method="POST">
                    <button id="button-non" onclick="">Non</button>
                </form>
            </div>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Partenariats</a></li>
            <li><a href="#">Billeterie</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th style="width: 10%">Nom</th>
                <th style="width: 10%">Prénom</th>
                <th style="width: 25%;">E-Mail</th>
                <th>Contenu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($elements as $liste)
        { ?>
            <tr>
                <td><?php echo $liste['id_message'] ?></td>
                <td style="width: 10%"><?php echo $liste['nom_message'] ?></td>
                <td style="width: 10%"><?php echo $liste['prenom_message'] ?></td>
                <td style="width: 25%"><?php echo $liste['adresse_mail_message'] ?></td>
                <td><?php echo $liste['contenu_message'] ?></td>
                <td>
                    <button id="delete" onclick="modal()" >SUPPRIMER</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>
        function modal(){
            var div = document.getElementById("content-modal")
            div.style.display = "flex";
        }
    </script>

</body>
</html>
