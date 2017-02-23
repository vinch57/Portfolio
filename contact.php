<?php
include('include/start.php');
?>
<!-- Contact -->
<div id="propos_hub">
    <div class="container">
        <div class="row">
            <h3>Me Contacter</h3>
        </div>
    </div>
</div>

<!-- Formulaire Contact -->
<div class="container" id="contact">
    <div class="row">
        <h1 class="centered">Merci de votre visite</h1>
        <hr>
        <br>
        <br>
        <div class="col-lg-4">
            <h3>Me contacter</h3>
            <span class="fa fa-home"></span> Adresse: 16, rue de la chapelle<br/>
            <span class="fa fa-phone"></span> Téléphone fixe: 0382501939<br/>
            <span class="fa fa-mobile"></span> 0678954266<br/>
            <span class="fa fa-envelope"></span><a href="#"> vincent.klein124@gmail.com</a><br/>
            <span class="fa fa-twitter"></span><a href="#"> @vincentklein11</a><br/>
            <span class="fa fa-facebook"></span><a href="#"> vincent.klein.148</a><br/>
            <span class="fa fa-code"></span><a href="https://fr.linkedin.com/in/vincent-klein-67aa22134"> LinkedIn<a/>
        </div>
        <div class="col-lg-4">
            <h3>Me contacter par email</h3>
            <p>Une question, une idée, des suggestions ? Contactez-moi ici !</p>
            <p>
            <form class="form-horizontal" role="form" action="scripts/send_mail.php" method="post">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="inputEmail1" name="Email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="text1" name="Nom" placeholder="Nom">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="text1" name="Message" placeholder="Message">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-theme">Envoyer</button>
                    </div>
                </div>
            </form>
            </p> 
        </div>

        <div class="col-lg-4">
            <h3>Pourquoi me contacter ?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>
</div>

<!-- Script Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>

<?php
include('include/end.php');
?>