<?php

    function data($nom, $prenom, $email, $telephone, $message, $imageProfile) {

        if ( $nom == '' || $prenom == '' || $email == '' || $telephone == '' || $message == '' ) {
            echo "Vous n'avez pas remplis tous les champs ! <br> <br>";
        }
        else {
            if ( $nom == "teapot" ) {
                echo "I'm a teapot <br> <br>";
    
                http_response_code(418);
            }
            else {
                $imageProfile = "https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg";

                echo "<img width='50' height='50' src='$imageProfile'>";
                echo "$prenom  $nom <br> <br> " ;
                echo "email : $email <br>";
                echo "Telephone : $telephone <br>";
                echo "Message : $message <br> <br>";
            }
        }

        echo "
            <form id='message' action='index.php' method='post'>
                <input type='submit' value='Retour' />
            </form>
        ";
    }
?>