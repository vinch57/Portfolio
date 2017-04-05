<?php
if (isset($_POST['Nom'], $_POST['Email'], $_POST['Message']) && !empty($_POST['Nom']) && !empty($_POST['Email']) && !empty($_POST['Message'])) {
    $corpsMessage = $_POST['Email'].' vous a envoyé -> '.$_POST['Message'];
    if(mail('vincent.klein124@gmail.com', $_POST['Nom'], $corpsMessage)) {
        header('Location: ../contact.php?sent=success');
    } else {
        header('Location: ../contact.php?sent=error');
    }
} else {
    header('Location: ../contact.php?sent=error');
}
?>