<?php
include('include/start.php');
?>

<!-- Veille technologique -->
<!-- En-tête -->
<div id="propos_hub">
    <div class="container">
        <div class="row">
            <h3>Ma recherche en matière de veille technologique</h3>
        </div>
    </div>
</div>

<div>
    <center>
        <a href="lima.php"><h4>Lima, le cloud privé pour tous</h4></a>
        <figure>
            <section class="veille">
                <a href="lima.php"><img class="arrondie" src="img/limacloud.jpg" alt=""></a>
            </section>
        </figure>
        <br/>
        <br/>

        <a href="raspberry.php"><h4>Le nouveau kit officiel Raspberry Pi</h4></a>
        <figure>
            <section class="veille">
                <a href="raspberry.php"><img class="arrondie" src="img/raspberry.jpeg" alt=""></a>
            </section>
        </figure>
        <br/>
        <br/>

        <a href="crgen4.php"><h4>Le grand Est numérique, 4ème édition !</h4></a>
        <figure>
            <section class="veille">
                <a href="crgen4.php"><img class="arrondie" src="img/gen4logo.jpg" alt=""></a>
            </section>
        </figure>
        <br/>
        <br/>

        <a href="php7.php"><h4>De PHP 5 à PHP 7</h4></a>
        <figure>
            <section class="veille">
                <a href="php7.php"><img class="arrondie" src="img/php7.png" alt=""></a>
            </section>
        </figure>
        <br/>
        <br/>
        
        <a href="phantomjs.php"><h4>Jouez avec vos pages web avec Phantom JS !</h4></a>
        <figure>
            <section class="veille">
                <a href="phantomjs.php"><img class="arrondie" src="img/phantomjs.jpg" alt=""></a>
            </section>
        </figure>
        <br/>
        <br/>
        
    </center>
    <br/>
    <br/>
    <br/>
    <div class="row">

        <div class="col-xs-5">
            <iframe frameborder="0" src="tagcloud.html" scrolling="no" height="360" width="550"></iframe>
        </div>
        <div id="logoshake" class="col-xs-2">
            <img src="img/rsslogo.png" alt="logo RSS"/>
        </div>
        <div class="col-xs-5">
            <iframe frameborder="0" src="flux.php" scrolling="yes" height="360" width="550"></iframe>
        </div>
    </div>
</div>




<?php
include('include/end.php');
?>

