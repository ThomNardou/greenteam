<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>TheGreenTeam</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../resources/css/style.css">
    </head>
    <body>
        <div id="container">
            <header>
                <div class="menu">
                    <input type="checkbox" id="hamburger">
                    <label id="hamburger-logo" for="hamburger">☰</label>
                    <nav>
                    <a href="../html/accueilExpert.html">Page d'accueil</a>
                            <a href="../expert/tomate.php">Tomate</a>
                            <a href="../expert/menthe.php">Menthe</a>
                            <a href="../expert/fraise.php">Fraise</a>
                            <a href="../expert/basilic.php">Basilic</a>
                            <a href="../expert/ciboulette.php">Ciboulette</a>
                            <a href="../Acceuil.html">Mode standard</a>
                    </nav>
                </div>
                <div id="title">
                    <h1><img src="../../../resources/Images/logo.png" alt="" style="height: 100px; align-self: center;"></h1>
                </div>
            </div>
        </header>
        <main>
            <section class="infoPlante">
                <div class="inf">
                    <h1>Menthe</h1>
                    <h2>Conseil</h2>
                    <p>Voici quelques conseils pour une meilleure cultivation :</p>
                    <ul>
                        <li>La terre ne doit jamais être sèche</li>
                        <li>Espacer les plants de menthe entre elle (30 à 45 cm) car ses racines étouffent les racines d'autres plantes</li>
                        <li>Planter en avril/mai (lorsqu'il commence à faire plus chaud)</li>
                        <li>Planter les semis en mars</li>
                        <li>Couper les tiges pour avoir de plus grandes feuilles</li>
                    </ul>

                    <?php

                        $servername = "localhost";

                        $username = "root";

                        $password = "root";

                        $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $requete = 'SELECT * FROM t_typplante WHERE plaNom LIKE "menthe"';
                        $statement = $conn->prepare($requete);
                        $statement->execute();

                        while($row = $statement->fetch())
                        {
                            $varnom = "<p>Nom : " . $row['plaNom'] . "</p>";
                            $varfrequence = "Fréquence d'arrosage : " . $row['plaFrequece'];
                        }

                        echo $varnom;
                        echo $varfrequence;

                    ?>

                    <h2>Valeur actuelle</h2>
                    <p>Valeur numérique du taux d'humidité dans la terre : </p>
                </div>
                <div id="imageMenthe">
                </div>
            </section>
        </main>
        <footer>
            <address id="info">
                <p>Numero</p>
                <p>adresse</p>
                <p>mail</p>
            </address>
            <address>
                <a href="../standard/menthe.html">mode standard</a>
                <p>page d'une plante au hasard</p>
            </address>
        </footer>
        </div>
    </body>
</html>