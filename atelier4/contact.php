<!doctype html>

<?php 
    require __DIR__."/data.php";
?>

<html>

    <head>
        <title>Formulaire de contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <section id="formulaire">
            <?php

                // var_dump($_GET);

                $nom = htmlspecialchars($_POST["nom"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
                $email = htmlspecialchars($_POST["email"]);
                $telephone = htmlspecialchars($_POST["telephone"]);
                $message = htmlspecialchars($_POST["message"]);
                $imageProfile = $_POST["image"];

                data($nom, $prenom, $email, $telephone, $message, $imageProfile);

            ?>
        </section>
    </body>
</html>

