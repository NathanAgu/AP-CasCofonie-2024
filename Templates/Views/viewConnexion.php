<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Assets/Css/connexion.css">
    <title>Connexion LegiCo</title>
</head>
<body>
    <div class="container">
        <div class="form--user__icon">
            <div class="icon--img">
                <span class="glyphicon glyphicon-user"></span>
            </div>
        </div>
        <h4 class="text-center">Connexion</h4>
        <form action="index.php?view=connexion&action=connexion">
            <div class="form-group">
                <label for="email"> <span class="glyphicon glyphicon-user"></span>Adresse Mail</label>
                <input type="email" class="form-control" id="email" placeholder="exemple@email.com" name="email">
            </div>
            <div class="form-group">
                <label for="pwd"> <span class="glyphicon glyphicon-lock"></span>Mot De Passe</label>
                <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd">
            </div>
            <a href="#">Mot de passe perdu ?</a><br>
            <a href="#">Créer un compte</a><br><br>
            <button type="submit" class="btn btn-default">Connexion</button>
        </form>
    </div>
</body>
</html>