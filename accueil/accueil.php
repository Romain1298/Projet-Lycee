<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <title>LSV Projet</title>
</head>
<body>
    <div id="container-menu-deroulant">
        <div id="menu-deroulant">
            <div id="container-button-hide">
                <button id="hide-menu-deroulant" onclick="hideHamburger()"><img src="../images/croix.png" alt=""></button>
            </div>
            <ul id="nav-hamburger">
                <li><a href="../accueil/accueil.php">Accueil</a></li>
                <li><a href="../partenariats/partenariats.php">Partenariats</a></li>
                <li><a href="../billeterie/billeterie.php">Billeterie</a></li>
                <li><a href="../contact/contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <header>
        <div id="font-logo">
            <div class="container-logo">
                <img class="img-lsv" src="../images/LSV.png" alt="Lycée St-Vincent">
            </div>
            <div id="container-info">
                <div id="info-accueil">
                    <img id="home" src="../images/homeIcon.png" alt="home">
                    <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                    <p>Accueil</p>
                </div>
                <div id="info-acces-rapide">
                    <p id="acces-rapide">Accès rapide</p>
                    <div id="info-offre-billeterie-contacter">
                        <div id="info-offre-billeterie">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Accueil</p>
                        </div>
                        <div id="info-contacter">
                            <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            <p>Offres / Billeterie</p>
                        </div>
                    </div>
                </div>
                <div id="info-contact">
                    <p id="information-contact">Informations de contact</p>
                    <div id="info-tel-email-lieu">
                        <div id="info-tel">
                            <div class="content-chevron-droit">
                                <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            </div>
                            <p>Par téléphone : <a id="tel" href="#">+33303030303</a></p>
                        </div>
                        <div id="info-email">
                            <div class="content-chevron-droit">
                                <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            </div>
                            <p>Par email : <a id="email" href="#">cse@lyceestvincent.fr</a></p>
                        </div>
                        <div id="info-lieu">
                            <div class="content-chevron-droit">
                                <img class="chevron-droit" src="../images/chevron-droit.png" alt="chevron">
                            </div>
                            <p>Au lycée : <a id="lieu" href="#">Bureau du CSE (1er étage bâtiment Saint-Vincent)</a></p>
                        </div>
                    </div>
                </div>
                <div id="partenaires">
                    <p id="nos-partenaires">Nos partenaires</p>
                    <div id="rectangle">
                        <div id="content-img-rectangle">
                            <div id="slider-gauche">
                                <img id="chevron-gauche-slider" src="../images/chevron-gauche.png" onclick="plusSlides(-1)" alt="chevron">
                            </div>
                            <div class="content-img-partenaire">
                                <img class="rectangle-img" src="../images/Leonidas.png" alt="image">
                            </div>
                            <div class="content-img-partenaire">
                                <img class="rectangle-img" src="../images/leonidas_blanc.png" alt="leonidas">
                            </div>
                            <div class="content-img-partenaire">
                                <img class="rectangle-img" src="../images/history_logo_leonidas_new.jpg" alt="leonidas">
                            </div>
                            <div id="slider-droit">
                                <img id="chevron-droit-slider" src="../images/chevron-droit.png" onclick="plusSlides(1)" alt="chevron">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="all-partenaire">
                <p><a href="#">Découvrir tous nos partenaires</a></p>
            </div>
        </div>
        <div id="font-bleu">
            <div id="menu-hamburger" onclick="showMenuHamburger()">
                <span class="trait"></span>
                <span class="trait"></span>
                <span class="trait"></span>
            </div>
            <nav>
                <li id="accueil"><a href="../accueil/accueil.php">Accueil</a></li>
                <li id="partenariats"><a href="../partenariats/partenariats.php">Partenariats</a></li>
                <li id="billeterie"><a href="../billeterie/billeterie.php">Billeterie</a></li>
                <li id="li-contact"><a href="../contact/contact.php">Contact</a></li>
            </nav>
        </div>
    </header>

    <section id="container-offre">
        <div id="content-container-offre">
            <div class="rectangle_7">
                <p class="cse_paragraphe">CSE Lycée Saint-Vincent</p>
                <p class="cse_contenu">Nous vous souhaitons la bienvenue sur le site du comité social et économique du lycée Saint-Vincent à <br> Senlis.
                    <br>Découvrez <a class="surli" href="#">l’équipe</a> et le <a class="surli" href="#">rôle</a> et missions de votre CSE.</p>
            </div>

            <div class="der_offres">
                <p>Dernières offres de la billeterie</p>
            </div>

            <div class="rectangle_8">
                <div class="petit_rectangle">
                    <p class="offre_rectangle">OFFRE</p>
                </div>

                <div>
                    <p class="public">Publié le 11 décembre 2022</p>
                </div>

                <div>
                    <p class="texte1">Profitez de -20% sur une sélection de parfum, en partenariat avec l’enseigne Nocibé de <br> Senlis. <br> Merci de vous rendre au bureau du CSE pour pouvor passer commande</p>
                    
                    <p><a class="savoir" href="#">EN SAVOIR PLUS</a></p>
                    <img class="d" src="../images/chevron-droit.png" alt="droit">
                </div>

            </div>


            <div class="rectangle_9">
                <div class="petit_rectangle">
                    <p class="offre_rectangle">OFFRE</p>
                </div>

                <div>
                    <p class="public">Publié le 09 décembre 2022</p>
                </div>

                <div>
                    <p class="texte1">Achetez dès à présent votre sapin de noël en profitant du partenariat entre le lycée Saint-<br>Vincent<br><br>
                        et l’association des Scouts De L’oise <br><br> Prix commun à tous : 30€ le petit sapin, 40€ le grand.</p>
                    
                    <p><a class="savoir" href="#">EN SAVOIR PLUS</a></p>
                    <img class="d" src="../images/chevron-droit.png" alt="droit">
                </div>

            </div>

            <div class="rectangle_10">
                <div class="petit_rectangle">
                    <p class="offre_rectangle">OFFRE</p>
                </div>

                <div>
                    <p class="public">Publié le 10 novembre 2022 - Jusqu’au 30/01/2023</p>
                </div>

                <div>
                    <p class="texte1">Offre négociée au près de Léonidas, profitez de - 10% toute l’année sur l’ensemble des <br> chocolats dans la boutique de Senlis <br><br>
                        Famille nombreuse (5 enfants et plus) : -5% supplémentaire</p>
                    
                    <p><a class="savoir" href="#">EN SAVOIR PLUS</a></p>
                    <img class="d" src="../images/chevron-droit.png" alt="droit">
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div id="content-footer">
            <div id="content-footer-img">
                <div class="container-logo">
                    <img class="img-lsv" src="../images/LSV.png" alt="Lycée St-Vincent">
                </div>
            </div>
            <div id="titre-cse-raccourcis">
                <div id="titre-cse">
                    <p id="cse-lsv">CSE Lycée Saint-Vincent</p>
                </div>
                <div id="raccourcis">
                    <div class="chevron-blanc-raccourcis">
                        <div class="chevron-blanc">
                            <span class="trait-blanc-incline30deg"></span>
                            <span class="trait-blanc-incline-30deg"></span>
                        </div>
                        <div id="raccourcis-partenariats">
                            <p><a href="../accueil/accueil.php">Accueil</a></p>
                        </div>
                    </div>
                    <div class="chevron-blanc-raccourcis">
                        <div class="chevron-blanc">
                            <span class="trait-blanc-incline30deg"></span>
                            <span class="trait-blanc-incline-30deg"></span>
                        </div>
                        <div id="raccourcis-partenariats">
                            <p><a href="../partenariats/partenariats.php">Partenariats</a></p>
                        </div>
                    </div>
                    <div class="chevron-blanc-raccourcis">
                        <div class="chevron-blanc">
                            <span class="trait-blanc-incline30deg"></span>
                            <span class="trait-blanc-incline-30deg"></span>
                        </div>
                        <div id="raccourcis-billeterie">
                            <p><a href="../billeterie/billeterie.php">Billeterie</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="../script.js"></script>
</body>
</html>