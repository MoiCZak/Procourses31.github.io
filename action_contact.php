<?php
if(!empty($_POST["send"])) {
    $name = $_POST["firstname"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    $toEmail = "";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $objet, $message, $mailHeaders)) {
        echo "Votre message a bien été envoyé !";
        header('index.html');
    }else{
        echo "Erreur lors de l'envoi de l'e-mail.";
        header('index.html');

    }
}else{
    echo"Tous les champs doivent être complétés !";
    header('index.html');

}


?>