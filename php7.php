<?php
include('include/start.php');
?>

<!-- Veille technologique -->
<!-- En-tête -->
<div id="article_hub">
    <div class="container">
        <div class="row">
            <center><h3>De PHP 5 à PHP 7<em>- Article</em></h3></center>
        </div>
    </div>
</div>

<div class="container">
    <p>
        Ces dernières années, la communauté autour de PHP s'est professionnalisée et a mis à disposition des développeurs de nombreux outils pour améliorer 
        l’utilisation du langage et la maintenance de leurs applications. La sortie de PHP 7, qui succédera à PHP 5,
        fut annoncée comme un événement majeur. Pour quelles raisons ? 
        Allons voir ce qui se cache sous le capot de PHP 7 sans plus tarder !
    </p>
    <br/>
    <h2>Les nouveautés</h2>
    <hr class="divider">
    <p>
        PHP 7 propose un bon nombre de nouveautés qui devraient plaire à la plupart des développeurs :
    </p>
    <br/>
    <center><img class="img-responsive" src="img/php7newfeatures.jpg" alt="Les nouveautés de php 7"/></center>
    <br/>
    <br/>
    <p>
        En effet, j'ai retenu les nouvelles fonctionnalités telles que « abstract syntax tree » qui permet de 
        réaliser des optimisations du code à la volée pour peu que la méthode de lecture du contenu soit uniforme.
    </p>
    <p>
        Un gain en termes de performances non négligeable émerge donc :
    </p>
    <br/>
    
    <div align='center'>
            <img class="img arrondie" src="img/phprequestsbenchmark.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img class="img arrondie" src="img/stat-benchmark.png"/>
    </div>
    
    <p>
        A savoir que désormais le typage est de la partie ! Pour la première fois php intègre le typage statique des variables
        cependant il faut savoir que ces fonctionnalités sont facultatives et qu'il est toujours possible d'utiliser le
        typage dynamique présent jusque dès lors afin d'éviter les éventuels soucis d'intégration sur des projets existants.
    </p>
    <br/>
    <br/>
    <center><img class="img-responsive" src="img/stricttype.png" alt="Le typage strict"/></center>
    <br/>
    <br/>
    <h2>Qui est déjà prêt chez les CMS et Frameworks ?</h2>
    <hr class="divider">
    <p>
        <ul>
            <li>- La version actuelle 1.7 de <a href="https://www.prestashop.com/fr/">Prestashop</a> fonctionne parfaitement avec PHP 7</li>
            <li>- <a href="https://symfony.com/">Symfony</a> est prêt depuis la version 2.3</li>
            <li>- <a href="https://www.drupal.org/home">Drupal 8 </a> intègre désormais PHP 7</li>
        </ul>
    </p>
    <br/>
    <br/>
    <center><img class="img-responsive" src="img/phpsmall.png" alt="Mascotte php"/></center>
</div>

<?php
include('include/end.php');
?>
