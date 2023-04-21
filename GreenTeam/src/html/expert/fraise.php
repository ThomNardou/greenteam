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
                        <a href="../accueilExpert.html">Page d'accueil</a>
                        <a href="tomate.php">Tomate</a>
                        <a href="menthe.php">Menthe</a>
                        <a href="fraise.php">Fraise</a>
                        <a href="basilc.php">Basilic</a>
                        <a href="ciboulette.php">Ciboulette</a>
                        <a href="../standard/faise.html">Mode standard</a>
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
                    <h1>Fraise</h1>
                    <h2>Conseil</h2>
                    <p>Voici quelques conseils pour une meilleure cultivation :</p>
                    <ul>
                        <li>Un fraisier dure 5 ans</li>
                        <li>Terre humide</li>
                        <li>Arrosage toutes les semaines en fonction de la température</li>
                        <li>Ne pas laisser la terre secher</li>
                        <li>Utiliser de l'eau à température ambiante (eau de pluie idéal)</li>
                        <li>Arroser fréquemment en petites quantités</li>
                        <li>Attention à l'excès d'eau</li>
                        <li>Arroser directement au pied du plant</li>
                    </ul>
                    <h2>Valeur actuelle</h2>
                    <?php

                        $servername = "localhost";

                        $username = "root";

                        $password = "root";

                        $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $requete = 'SELECT * FROM t_typplante WHERE plaNom LIKE "fraise"';
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
                </div>
                <div id="imageFraise">
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
                <a href="../standard/faise.html">mode standard</a>
            </address>
        </footer>
        </div>
    </body>
</html>