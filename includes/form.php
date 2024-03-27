<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["name"];
  $email = $_POST["mail"];
  $message = $_POST["message"];

  // Configuration
  $receveur = "arno.lemoil@gmail.com";
  $sujet = "Nouveau message du formulaire de contact";
  $contenu = "Nom: $nom\n\nEmail: $email\n\nMessage: $message";

  // Envoi de l'e-mail
  mail($receveur, $sujet, $contenu);

  // Redirection
  header("Location: index.php");
  exit();
}
?>