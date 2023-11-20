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
                        <label>Nom actuel</label>
                        <input type="text" name="nomactuel"><br><br>
                        <label>Frequence</label>
                        <input type="text" name="frequence"><br><br>
                        <label>Nom</label>
                        <input type="text" name="nom"><br><br>
                        <input type="submit" value="Ajouter">
                    </div>
		        </form>

                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "root";

                    $nomactuel = $_POST['nomactuel'];
                    $frequence = $_POST['frequence'];
                    $nom = $_POST['nom'];

                    if ($nom != null && $frequence != null && $nomactuel != null) {

                        $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);
                        var_dump($conn);

                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    

                        $requete = "UPDATE `t_typplante` SET `plaNom` = '$nom', `plaFrequece` = '$frequence' , `plaVolume` = '20.00', `plaTempsArro` = '300' WHERE `plaNom` LIKE '$nomactuel';";
                    
                        $resultat = $conn->query($requete);

                    }
                ?>
                </div>
            </div>
        </body>
    </html>