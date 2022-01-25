<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'adresse1@mail.com';
$to = 'adresse2@mail.com';
// $message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.


$headers = "From: adresse1@mail.com";
/*
if (mail($to, 'le sujet', $message, $headers)) {
    echo "Email envoyé avec succès à $to ...";
} else {
    echo "Échec de l'envoi de l'email...";
}
*/


/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.
$message = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio esse facilis hic magni mollitia officia quasi quidem, rem sed velit. 
Eligendi facilis ipsam nemo optio praesentium qui quidem repellendus vitae?";
$message = wordwrap($message, 70, "\r\n");

if (mail($to, 'le sujet', $message, $headers)) {
    echo "Le message a bien été envoyé. Merci !";
    file_put_contents("mail.txt", "$message, $to <br>");
    echo file_get_contents("mail.txt");
} else {
    echo "Une erreur est survenue lors de l'envoi du mail";
}