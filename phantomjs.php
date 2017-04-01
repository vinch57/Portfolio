<?php
include('include/start.php');
?>


<div id="article_hub">
    <div class="container">
        <div class="row">
            <center><h3>Jouez avec vos pages web avec Phantom JS ! <em>- Article</em></h3></center>
             
        
        </div>
    </div>
</div>


<div class="container">
    <p>
        Vous avez toujours rêvé de lancer un simple script en ligne de commande qui automatise des actions sur un site web ? 
        Alors Phantom JS est fait pour vous !
    </p>
    <h2>C'est quoi Phantom JS ?</h2>
    <hr class="divider">
    <p>
        PhantomJS, c'est tout simplement, un outil qui va interpréter un de vos scripts JS pour aller chercher
        par exemple une page web et vous permettre de la manipuler sans jamais quitter votre ligne de commande.
        Il est donc capable de charger les images, scripts et CSS. Ainsi que de les exécuter parfaitement normalement.
    </p>
    <br/>
    <br/>
    <center><img class="img-responsive" src='img/phantomjswall.png' alt='Phantom JS'/></center>
    <br/>
    <br/>
    <p>
        J'ai moi même pu utiliser cet outil lors de mon premier stage de BTS pour récupérer des informations
        contenues dans une page web et les envoyer dans le logiciel du système de gestion de l'entreprise JIRA Desktop
        via l'API REST qui venait d'être mise à disposition peu de temps avant le début de mon stage.
    </p>
    <p>
        Pour l'utiliser, il suffit simplement de télécharger la bibliothèque depuis <a href='http://phantomjs.org/'>http://phantomjs.org/</a>
        et de définir la variable path windows afin d'utiliser l'outil en console.
    </p>
    <p>
        A savoir que Phantom JS peut fonctionner conjointement avec un autre outil intitulé Casper JS qui offre les mêmes fonctionnalités
        que Phantom JS mais avec une syntaxe plus simple d'utilisation mais aussi Slimer JS qui offre un aperçu graphique des actions qui s'effectuent
    </p>
    <br/>
    <div align='center'>
        <img class="img arrondie" src="img/casperjs.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img class="img arrondie" src="img/slimerjs.png"/>
    </div>
    <br/>
    <br/>
    <p>
        J'ai vraiment apprécié l'utilisation de ces outils pendant mon stage, ils ne sont pas nécessairement utiles tout le temps
        mais une fois que l'on a essayé, on peut se retrouver à les utiliser assez souvent !
    </p>
</div>



<?php
include('include/end.php');
?>