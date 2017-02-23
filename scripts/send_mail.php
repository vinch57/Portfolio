<?php
if (isset($_POST['Nom'], $_POST['Email'], $_POST['Message'])) {
    mail('vincent.klein124@gmail.com', $_POST['Nom'], $_POST['Message']);
    header('Location: ../contact.php');
} else {
    echo '<div class="alert alert-danger">Oups, il semble y avoir un soucis dans votre demande.</div>';
}
?>