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
                        <a href="../standard/basilic.html">Mode standard</a>
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
                    <h1>Basilic</h1>
                    <h2>Conseil</h2>
                    <p>Voici quelques conseils pour une meilleure cultivation :</p>
                    <ul>
                        <li>Ne supporte pas le gel</li>
                        <li>Terre humide</li>
                        <li>Arroser le matin</li>
                        <li>Enlever les bourgeons</li>
                    </ul>
                    <h2>Valeur actuelle</h2>
                    <?php

                        $servername = "localhost"; //Ne pas changer le localhost

                        $username = "root";

                        $password = "root";

                        $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $requete = 'SELECT * FROM t_typplante WHERE plaNom LIKE "basilic"';
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
                <div id="imageBasilic">
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
                <a href="../standard/basilic.html">mode standard</a>
            </address>
        </footer>
        </div>
    </body>
</html>