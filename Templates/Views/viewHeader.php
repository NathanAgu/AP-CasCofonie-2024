<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Templates/Assets/Css/style.css">

    <title>Page Cofonie TEST</title>
</head>
<body>
    <h1 align="center">Page TEST d'Affichages</h1><br>
    <table>
        <tr>
            <td>Ammendement</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajout</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="remove">
                    <button type="submit">Suppression</button>
                </form>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Article</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="article">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="article">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajout</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="article">
                    <input type="hidden" name="action" value="remove">
                    <button type="submit">Suppression</button>
                </form>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Text</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="text">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="text">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajout</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="text">
                    <input type="hidden" name="action" value="remove">
                    <button type="submit">Suppression</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="text">
                    <input type="hidden" name="action" value="generalText">
                    <button type="submit">Affichage Textes-Articles-Amendements</button>
                </form>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Institution</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="institution">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <td>
                <form action="index.php" method=GET>
                    <input type="hidden" name="view" value="institution">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajouter</button>
                </form>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Organe</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="organ">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <!-- <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajout</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="remove">
                    <button type="submit">Suppression</button>
                </form>
            </td> -->
        </tr>
    </table>
    <table>
        <tr>
            <td>Role</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="role">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <!-- <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajout</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="remove">
                    <button type="submit">Suppression</button>
                </form>
            </td> -->
        </tr>
    </table>
    <table>
        <tr>
            <td>TypeInstitution</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="typeInstitution">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
            <!-- <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Ajout</button>
                </form>
            </td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="amendment">
                    <input type="hidden" name="action" value="remove">
                    <button type="submit">Suppression</button>
                </form>
            </td> -->
        </tr>
    </table>
    <table>
        <tr>
            <td>Vote</td>
            <td>
                <form action="index.php" method="GET">
                    <input type="hidden" name="view" value="vote">
                    <input type="hidden" name="action" value="display">
                    <button type="submit">Affichage</button>
                </form>
            </td>
        </tr>
    </table>
    <br><br>
</body>
</html>