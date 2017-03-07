<?php
include('include/start.php');
?>

<!-- Portfolio -->
<!-- En-tête -->
<div id="propos_hub">
    <div class="container">
        <div class="row">
            <h3>Portfolio</h3>
        </div>
    </div>
</div>

<!-- Intro -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="centered">Vous trouverez ici tout le contenu spécifique à mon Portfolio (expériences réalisées en entreprise et en études)</p>
        </div>
    </div>
</div>
<br/>

<!-- Bloc Image -->
<div class="container-fluid">
    <div class="row">
        
        <!-- **********************
        ****** PROJET BMG *********
        ************************-->

        <div class="col-lg-4 col-sm-4">
            <div class="grille masque">
                <figure>
                    <section class="portfolio">
                        <img class="img-responsive" src="img/bmg.png" alt="">
                    </section>
                    <figcaption>
                        <a data-toggle="modal" data-target="#myModal" class="btn btn-theme">Aperçu</a>
                    </figcaption>
                </figure>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title centered" id="myModalLabel">BMG</h4>
                        </div>
                        <div class="modal-body">
                            <h4 class="centered">Aperçu du projet</h4>
                            <img src="img/bmg.png" alt="">
                            <h5 class="centered">Description du projet</h5>
                            <p>
                                La bibliothèque municipale de Groville avait besoin d'une solution web pour la gestion des oeuvres ainsi que les prêts et retours client.
                                Nous avons développé un site répondant au besoin.
                            </p>
                            
                                J'ai contribué au développement de la partie Back Office et plus particulièrement
                                sur les vues permettant l'ajout d'un client, le contrôleur permettant de gérer les clients.
                                <ul>
                                    <li>Utilisation du patron de conception MVC.</li>
                                    <li>Plusieurs couches d'abstraction permettant une meilleure maintenabilité du code</li>
                                </ul>
                                Activités du référentiel concernées:<br/>
                                - D4.1 -Conception et réalisation d’une solution applicative
                                <ul>
                                    <li>A4.1.3 Conception ou adaptation d’une base de données</li>
                                    <li>C4.1.3.1 Modéliser le schéma de données nécessaire à la mise en place de la solution applicative</li>
                                    <li>A4.1.8 Réalisation des tests nécessaires à la validation d’éléments adaptés ou développés</li>
                                </ul>
                                D4.2 - Maintenance d’une solution applicative
                                <ul>
                                    <li>A4.2.2 - Adaptation d’une solution applicative aux évolutions de ses composants</li>
                                </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div><!-- Fin fenêtre modale -->	
        </div><!-- Fin premier bloc -->

        <!-- **********************
        **STAGE FIN PREMIERE ANNEE*
        ************************-->
        
        <div class="col-lg-4 col-sm-4">
            <div class="grille masque">
                <figure>
                    <section class="portfolio">
                        <img class="img-responsive" src="img/dmconceptlogo.jpg" alt="">
                    </section>
                    
                    <figcaption>
                        <a data-toggle="modal" data-target="#myModal_C" class="btn btn-theme">Aperçu</a>
                    </figcaption>
                </figure>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal_C" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title centered" id="myModalLabel">Stage de première année chez DM Concept</h4>
                        </div>
                        <div class="modal-body">
                            <h4 class="centered">Fonction au sein du projet</h4>
                            <iframe src="https://docs.google.com/presentation/d/1NA2jlfcRTfH2Hma9TFVxJnWaZYQs32cPvfqavHFSHgE/embed?start=false&loop=true&delayms=15000" frameborder="0" width="570" height="389" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                            <h5 class="centered">Description du projet</h5>
                            <p>
                                J'ai effectué mon stage de première année de BTS SIO au sein de l'EURL DM Concept.
                                J'ai pu y découvrir de nombreuses facettes du métier de développeur qui ne se limitent pas simplement au code.
                            </p>
                            Activités du référenciel concernées:<br/>
                            D4.1 - Conception et réalisation d’une solution applicative
                            <ul>
                                <li>Proposition d’une solution applicative</li>
                                <li>Définition des caractéristiques d’une solution applicative</li>
                                <li>Réalisation des tests nécessaires à la validation d’éléments adaptés ou développés</li>
                                <li>Rédaction d’une documentation technique</li>
                                <li>Rédaction d’une documentation d’utilisation</li>
                            </ul>
                            A4.1.7 Développement, utilisation ou adaptation de composants logiciels
                            <ul>
                                <li>C4.1.7.1 Développer les éléments d’une solution</li>
                                <li>C4.1.7.2 Créer un composant logiciel</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div><!-- Fin fenêtre modale -->	
        </div><!-- Fin premier bloc -->
        
        <!-- **********************
        **STAGE FIN DEUXIEME ANNEE*
        ************************-->
        
        <div class="col-lg-4 col-sm-4">
            <div class="grille masque">
                <figure>
                    <section class="portfolio">
                        <img class="img-responsive" src="img/prestonmobile.png" alt="">
                    </section>
                    <figcaption>
                        <a data-toggle="modal" data-target="#myModal_B" class="btn btn-theme">Aperçu</a>
                    </figcaption>
                </figure>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal_B" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title centered" id="myModalLabel">Stage de deuxième année chez DM Concept</h4>
                        </div>
                        <div class="modal-body">
                            <h4 class="centered">Synthèse de l'expérience réalisée</h4>
                            <iframe src="https://docs.google.com/presentation/d/1rry_NHKf73-RNHKOUCoaLlEY46f9VBoQis9tiLtRsAY/embed?start=false&loop=true&delayms=15000" frameborder="0" width="570" height="389" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                            <h5 class="centered">Description du projet</h5>
                            <p>
                                J'ai effectué mon stage de deuxième année de BTS SIO au sein de l'EURL DM Concept.
                                J'ai été immergé dans le développement de modules prestashop et j'ai pu développer mon autonomie.
                            </p>
                            Activités du référentiel concernées:<br/>
                            <ul>
                                <li>D1.1 Analyse de la demande (analyse du cahier des charges d’un service à produire)</li>
                                <li>D4.1 Conception et réalisation d’une solution applicative</li>
                                <li>A4.1.1 Proposition d’une solution applicative</li>
                                <li>D4.2 Maintenance d’une solution applicative</li>
                                <li>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative</li>
                                <li>A4.1.9 Rédaction d’une documentation technique, utilisateur</li>
                            </ul>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div><!-- Fin fenêtre modale -->	
        </div><!-- Fin premier bloc -->	

        

    </div><!-- Fin row -->
    <br/>
    <br/><!-- Espace entre Row_I et Row_II -->

    <div class="row">
        
        <!-- **********************
        ******PROJET GSB FRAIS*****
        ************************-->
        
        <div class="col-lg-4 col-sm-4">
            <div class="grille masque">
                <figure>
                    <section class="portfolio">
                        <img class="img-responsive" src="img/gsbfraishomepng.png" alt="">
                    </section>
                    <figcaption>
                        <a data-toggle="modal" data-target="#myModal_D" class="btn btn-theme">Aperçu</a>
                    </figcaption>
                </figure>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal_D" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title centered" id="myModalLabel">Projet GSB Frais</h4>
                        </div>
                        <div class="modal-body">
                            <h4 class="centered">Fonction au sein du projet</h4>
                            <img src="img/gsbfraistab.png" alt="">
                            <h5 class="centered">Description du projet</h5>
                            <p>
                                L'entreprise GSB Frais souhaitait porter une attention nouvelle à sa force commerciale dans un double objectif:
                                obtenir une vision plus réfulière et efficace de l'activité menée sur le terrain auprès des praticiens,
                                mais aussi redonner confiance aux équipes malmenées par les fusions récentes.
                            </p>
                            <p>
                                Moi et mon équipe avons été chargés du développement de diverses fonctionnalités sur 
                            </p>
                            Activités du référentiel concernées:<br/>
                            - D4.1 -Conception et réalisation d’une solution applicative
                            <ul>
                                <li>A4.1.3 Conception ou adaptation d’une base de données</li>
                                <li>A4.1.8 Réalisation des tests nécessaires à la validation d’éléments adaptés ou développés</li>
                            </ul>
                            D4.2 - Maintenance d’une solution applicative
                            <ul>
                                <li>A4.2.2 - Adaptation d’une solution applicative aux évolutions de ses composants</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div><!-- Fin fenêtre modale -->	
        </div><!-- Fin premier bloc -->

        <div class="col-lg-4 col-sm-4">
            <div class="grille masque">
                <figure>
                    <img class="img-responsive" src="img/Cover.jpg" alt="">
                    <figcaption>
                        <a data-toggle="modal" data-target="#myModal_E" class="btn btn-theme">Aperçu</a>
                    </figcaption>
                </figure>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal_E" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title centered" id="myModalLabel">Nom du projet</h4>
                        </div>
                        <div class="modal-body">
                            <h4 class="centered">Fonction au sein du projet</h4>
                            <img src="img/Cover.jpg" alt="">
                            <h5 class="centered">Description du projet</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div><!-- Fin fenêtre modale -->	
        </div><!-- Fin premier bloc -->

        <div class="col-lg-4 col-sm-4">
            <div class="grille masque">
                <figure>
                    <img class="img-responsive" src="img/Cover.jpg" alt="">
                    <figcaption>
                        <a data-toggle="modal" data-target="#myModal_F" class="btn btn-theme">Aperçu</a>
                    </figcaption>
                </figure>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal_F" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title centered" id="myModalLabel">Nom du projet</h4>
                        </div>
                        <div class="modal-body">
                            <h4 class="centered">Fonction au sein du projet</h4>
                            <img src="img/Cover.jpg" alt="">
                            <h5 class="centered">Description du projet</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div><!-- Fin fenêtre modale -->
        </div><!-- Fin premier bloc -->	
    </div><!-- Fin row -->
</div><!-- Fin container -->

<?php
include('include/end.php');
?>