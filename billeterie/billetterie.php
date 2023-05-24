<?php
require '../connexion_bdd.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Nos offres</title>
        <link href="billetterie.css" rel="stylesheet">

                <section class="offres">
                    <div class="contenant-offres">
                        <?php 
                        $requete = $con ->prepare("SELECT * FROM billeterie");
                        $requete->execute();
                        $cse= $requete->fetchAll();
                        foreach($cse as $billeterie) { 
                        ?>
                        <div class="cases-offres">
                            <div class="ligne">
                                <div class="rectangle-offre"><p>OFFRE</p></div>
                                <p class="date">Publié le 11 décembre 2022</p>
                            </div>
                            <div class="texte-offre"><p><?= $billeterie['billet_texte']?><p></div>
                            <div class="savoir-plus"><a onclick="openModalOffre(<?= $billeterie['billet_id'] ?>)" href="#" id="myBtn">Voir l'offre<img src="images/fleche.png" alt="icone fleche vers la droite"></a></div>
                            <div id="myModalOffre-<?= $billeterie['billet_id'] ?>" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span onclick="closeModalOffre(<?= $billeterie['billet_id'] ?>)" class="close">&times;</span>
                                    <div class="header-modal">
                                        <h1><?= $billeterie['billet_nom']?></h1>
                                        <p>Publiée le date</p>
                                    </div>
                                    <div class="contenant-slider2">
                                        <div class="slider2">
                                            <div class="fleche-gauche2"><img src="images/fleche.png"></div>
                                            <div class="contenant-image-slider2">
                                                <img src="images/partenaires/leonidas.png" class="slide-image leonidas1" alt="">
                                                <img src="images/partenaires/leonidas2.png" class="slide-image leonidas2" alt="">
                                                <img src="images/partenaires/leonidas1.png" class="slide-image leonidas3" alt="">
                                            </div>
                                            <div class="fleche-droite2"><img src="images/fleche.png"></div>
                                        </div>

                                        <div class="cont-btn">
                                            <div class="btn-nav2" data-index="1"></div>
                                            <div class="btn-nav2" data-index="2"></div>
                                            <div class="btn-nav2" data-index="3"></div>
                                        </div>
                                    </div>
                                    <div class="body-modal">
                                        <p><?= $billeterie['billet_texte']?></p>
                                    </div>
                                    <div class="footer-modal">
                                        <a class="lien-offre" href="#">Lien vers l'offre</a>
                                    </div>
                                    <script src="modale.js" defer></script>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                </section>
            </div>
        </main>
        <script src="script.js" defer></script>
        <script src="modale.js" defer></script> 
    </body>
</html>
