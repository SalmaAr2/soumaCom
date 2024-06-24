<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Adresse e-mail où envoyer le message
    $to = "salmaarif2002sa@gmail.com";

    // Sujet de l'e-mail
    $email_subject = "Nouveau message de $name: $subject";

    // Contenu de l'e-mail
    $email_body = "Vous avez reçu un nouveau message de $name ($email):\n\n";
    $email_body .= "Sujet: $subject\n\n";
    $email_body .= "Message:\n$message";

    // Entête de l'e-mail
    $headers = "From: $email\n";

    // Envoyer l'e-mail
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Votre message a été envoyé avec succès. Merci !";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    echo "Une erreur s'est produite lors de la soumission du formulaire.";
}
?>


