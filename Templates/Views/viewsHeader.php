<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Cofonie</title>
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="index.php" class="navbar-brand"><img src="Templates/Assets/Img/Drapeau.png" style="width: 7%; "></a>
                    </div>

                    <div class="navbar-collapse collapse " id="mobile_menu">
                        <ul class="nav navbar-nav" style="margin-left: 20%; margin-top: 0%;">
                            <li class="active"><a href="index.php">Acceuil</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">A propos de nous <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?vue=baptiste">Baptiste</a></li>
                                    <li><a href="index.php?vue=nathan">Nathan</a></li>
                                    <li><a href="index.php?vue=marie">Marie</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?vue=texte&action=visualiser">Textes</a></li>
                            <li><a href="index.php?vue=loi&action=visualiser">Lois</a></li>
                            <li><a href="index.php?vue=amendement&action=visualiser">Amendements</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Rechercher" class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

