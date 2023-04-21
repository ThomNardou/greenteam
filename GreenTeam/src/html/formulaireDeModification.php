<!DOCTYPE html>
    <html>
        <head>
            <title>TheGreenTeam</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../../resources/css/style.css">
        </head>
        <body>
            <div id="container">
                <header>
                        <div id="title">
                            <h1><img src="../../resources/Images/logo.png" alt="" style="height: 100px; align-self: center;"></h1>
                        </div>
                </header>

                <form method="post">
                    <div id="formulaire">

                        <label>Prénom</label>
                        <input type="text" name="prenom">
                        <label>Nom</label>
                        <input type="text" name="nom">
                        <input type="submit" value="Ajouter">
                    </div>
		        </form>

                <?php
                    $servername = "localhost";

                    $username = "root";

                    $password = "root";

                    $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $nom = $_POST['nom'];
                    $frequence = $_POST['prenom'];

                    $requete = "INSERT INTO t_typplante VALUES('" . $nom . "','" . $frequence . "')";
                    $resultat = $conn->query($requete);
                    if ($resultat)
                        echo "<p>Le contact a été ajouté</p>";
                    else
                        echo "<p>Erreur</p>";
                
                ?>
                </div>
            </div>
        </body>
    </html>