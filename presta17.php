<?php
include('include/start.php');
?>

<!-- Veille technologique -->
<!-- En-tête -->
<div id="article_hub">
    <div class="container">
        <div class="row">
            <center><h3>Mettez votre boutique en ligne Prestashop à jour vers la version 1.7 ! <em>- Article</em></h3></center>
        </div>
    </div>
</div>

<div class="container">
    <p>
        La nouvelle version de Prestashop est là ! Au vu de certaines évolutions majeures du CMS,
        il est important de se mettre à jour !
        C'est lors de mon deuxième stage en entreprise que j'ai pu effectuer un travail d'identification 
        des nouveautés apportées par rapport à la version 1.6 au niveau de la création de modules principalement,
        où est spécialisé DM Concept.
    </p>
    <br/>
    <h2>Un regard sur les nouveautés</h2>
    <hr class="divider">
    <p>
        Outre la possibilité pour les designers de créer un thème enfant ou l'intégration en partie de Symfony,
        Prestashop 1.7 à le don d'étonner !
    </p>
    <br/>
    <center><img class="img-responsive" src="img/preston17.jpg" alt="preston"/></center>
    <br/>
    <h2>Nouvelle interface de création fiche produit</h2>
    <hr class="divider">
    <p>
        Cette nouvelle interface offre une meilleure ergonomie et permet aux vendeurs d'effectuer cette tâche plus rapidement que jamais !
    </p>
    <br/>
    <center><img class="img-responsive" src="img/psproduct.png" alt="Nouvelle interface création produit"/></center>
    <br/>
    <h2>Nouvelle page modules</h2>
    <hr class="divider">
    <br/>
    <p>
        Les modules ou "Addons" de Prestashop font partie intégrante d'une boutique en ligne avec Prestashop.
        De ce fait, la page modules à été entièrement repensée pour véritablement accompagner le vendeur dans la
        gestion de ses modules au quotidien. En effet les nouveaux onglets permettent de naviguer facilement entre les
        différentes sections.
    </p>
    <br/>
    <center><img class="img-responsive" src="img/modules.png" alt="Nouvelle page modules"/></center>
    <br/>
    <p>
        D'un point de vue développeur, les modules créés sur une version antérieure à 1.7 risquent de poser des soucis de compatibilité.
        En effet les normes de développement ainsi que l'architecture à respecter s'est trouvée légèrement modifiée.
        Par exemple, un module, pour être validé par Prestashop avant mise sur le marché, doit répondre à la norme PSR-2.
        Aussi le développeur dispose maintenant de deux hooks pour l'affichage de liens dans le menu, displayNav et displayNav2.
        Les templates fonctionnent maintenant avec TWIG utilisé de base dans Symfony.
    </p>
    <br/>
    <h2>Un back-office optimisé</h2>
    <hr class="divider">
    <p>
        Le back office a été étudié pour faciliter la navigation, notamment en épurant les menus et en regroupant les sous menus 
        en diverses catégories : vendre, améliorer et configurer.
        Les versions précédentes de Prestashop souffraient d'un soucis d'ergonomie à ce niveau, l'administrateur passait son temps
        à naviguer dans les menus avant de trouver la section qu'il cherchait, Prestashop 1.7 regle ce soucis avec ce menu plus ludique.
    </p>
    <br/>
    <center><img class="img-responsive" src="img/backoffice.png" alt="back office"/></center>
    <br/>
    <h2>Nouveau thème classique !</h2>
    <hr class="divider">
    <p>
        Au nouveau thème de ne pas nous déçevoir !
        Le nouveau thème de base installé dans Prestashop est maintenant bien plus convivial et orienté "flat", ce qui peut inciter
        les vendeurs à le conserver pour leur boutique pour son côté épuré et fort agréable ou le modifier à leur gré !
    </p>
    <br/>
    <center><img class="img-responsive" src="img/psnewdesign.png" alt="thème"/></center>
    <br/>
    <br/>
</div>

<?php
include('include/end.php');
?>
