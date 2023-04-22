<!DOCTYPE html>
    <html>
        <head>
            <title>TheGreenTeam</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../../resources/css/style.css">
        </head>
        <body>
            <div id="container">
                <!-- <header>
                        <div id="title">
                            <h1><img src="../../resources/Images/logo.png" alt="" style="height: 100px; align-self: center;"></h1>
                        </div>
                </header> -->

                <form method="post">
                    <div id="formulaire">
                        <label>Nom actuel</label>
                        <input type="text" name="nomactuel">
                        <label>Frequence</label>
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
                    $nomactuel = $_POST['nomactuel'];

                    
                    $requete = "UPDATE `t_typplante` SET `plaNom` = '$nom', `plaFrequece` = '$frequence' , `plaVolume` = '20.00', `plaTempsArro` = '300' WHERE `plaNom` LIKE '$nomactuel';";
                    var_dump($requete); //Permet de voir ce que le programme envoie
                    
                    // $resultat = $conn->query($requete);
                    if ($requete)
                        echo "<p id=testPhp>Le contact a été ajouté</p>";
                    else
                        echo "<p id=Test2>Erreur</p>";
                
                ?>
                </div>
            </div>
        </body>
    </html>