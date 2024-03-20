<?php
    $host = "localhost";
    $login = "root";
    $password = "";
    $dataBase = "casCofonie";
    $conDB = new PDO("mysql:host=".$host."; dbname=".$dataBase.";charset=utf8", $login, $password);

    if (!empty($_POST))
    {
        $valid = (boolean) true;

        if (isset($_POST["userIdentifier"]) && isset($_POST["userPassword"]) && isset($_POST["userPasswordConfirmation"]))
        {
            // Informations du form
            $userIdentifier = strip_tags($_POST["userIdentifier"]);
            $userPassword = strip_tags($_POST["userPassword"]);
            $userPasswordConfirmation = strip_tags($_POST["userPasswordConfirmation"]);

            // Vérification email (valide ou non)
            if (!filter_var($userIdentifier, FILTER_VALIDATE_EMAIL))
            {
                $valid = false;
            } 
            else 
            {
                // Vérification de l'email (utilisé ou non)
                $sqlRequest = "SELECT userIdentifier FROM user WHERE userIdentifier = :userIdentifier";
                $query = $conDB->prepare($sqlRequest);
                $query->bindValue(":userIdentifier", $userIdentifier);
                $query->execute();
                $user = $query->fetch();

                // Si l'email est déjà utilisé
                if ($user)
                {
                    $valid = false;
                }
            }

            if ($userPassword != $userPasswordConfirmation)
            {
                $valid = false;
                $msgError = "Les mots de passe ne sont pas les mêmes !";
            }

            if ($valid)
            {
                echo 'Top a la vachette';
                // Hashage du mot de passe
                $userHashPassword = password_hash($userPassword, PASSWORD_ARGON2ID);

                // Insertion de l'utilisateur dans la DB
                $sqlRequest = "INSERT INTO user (userIdentifier, userPassword) VALUES (:userIdentifier, :userPassword)";
                $query = $conDB->prepare($sqlRequest);
                $query->bindValue(":userIdentifier", $userIdentifier);
                $query->bindValue(":userPassword", $userHashPassword);
                $query->execute();

                // Création de la session
                $_SESSION["user"] = [
                    "identifier" => $userIdentifier
                ];

                header("Location: index.php");
            }
        }
    }
?>