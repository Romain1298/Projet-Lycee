<?php
require 'connexion_bdd.php';
if(empty($_GET['id_part'])===false){
    $requete = $con ->prepare("SELECT * FROM partenaire WHERE partenaire_id=:id");
    $requete->bindParam('id',$_GET['id_part']);
    $requete->execute();
    $partenaire= $requete->fetch();
    ?>
    <div class="popup open-popup" id="popup">
        <h5><?= $partenaire['partenaire_nom']?></h5>
        <img src="Leonidas.png">
        <p><?= $partenaire['partenaire_texte']?></p>
        <p><?= $partenaire['partenaire_lien']?></h5><br>
        <button type="button" onclick="closePopup()">OK</button>
    </div>
    <?php
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="modal.css">
        <title>Partenaires</title>
    </head>
    <body>
        <section class="page_partenaire">
        <?php 
            $requete = $con ->prepare("SELECT * FROM partenaire");
            $requete->execute();
            $cse= $requete->fetchAll();
            foreach($cse as $partenaire) { 
        ?>
            <div class="partenaire">
                <div class="nom_partenaire">
                    <h5 class="nom_part"><?= $partenaire['partenaire_nom']?></h5>    
                </div>
                <div class="image_partenaire">
                    <a href="modal.php?id_part=<?= $partenaire['partenaire_id']?>" class="btn"><img src="Leonidas.png"></a>
                </div>
            </div>
        <?php } ?>
        </section>
    </body>
</html>

<script>
    let popup = document.getElementById("popup");

    function openPopup(){
        popup.classList.add("open-popup");
    }

    function closePopup(){
        popup.classList.remove("open-popup");
    }
</script>