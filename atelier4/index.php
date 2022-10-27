<!doctype html>

<html>

    <head>
        <title>Formulaire de contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <form id="formulaire" action="contact.php" method="post" >
            <h3>Formulaire<h3>
            <input name="nom" placeholder="Nom">
            <input name="prenom" placeholder="Prénom" value="Sasuke">
            <input name="email" placeholder="Adresse email" value="uchiwa.sasuke@konoha.jp">
            <input name="telephone" placeholder="Numéro de téléphone" value="+33 6 99 99 99 99">
            <input name="message" placeholder="Message" value="Razengan">
            <input type="file" name="image"/>
            <input type="submit" value="Envoyer" />
        </form>

    </body>
</html>