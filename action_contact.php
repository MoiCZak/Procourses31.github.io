<?php

    $name = $_POST["nom"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    $toEmail = "zakariboy31@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $objet, $message, $mailHeaders)) {
        echo "Votre message a bien été envoyé !";
        header('Location: index.html');
    }else{
        echo "Erreur lors de l'envoi de l'e-mail.";
        header('Location: index.html');
    }
?>