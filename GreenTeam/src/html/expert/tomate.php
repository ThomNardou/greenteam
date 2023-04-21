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
                    <h1>Tomate</h1>
                    <h2>Conseil</h2>
                    <p>Voici quelques conseils pour une meilleure cultivation :</p>
                    <ul>
                        <li>un sol riche</li>
                        <li>le plant exposé au soleil</li>
                        <li>semis plantés en fin d'hiver sous abri</li>
                        <li>les récoltes se font en été</li>
                        <li>l'humidité doit d'être de 60%</li>
                        <li>doit être arrosée 3 fois par semaine</li>
                    </ul>
                    <h2>Valeur actuelle</h2>

                    <?php

                        $servername = "localhost";

                        $username = "root";

                        $password = "root";

                        $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $requete = 'SELECT * FROM t_typplante WHERE plaNom LIKE "tomate"';
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
                    
                    <!-- <p>Valeur numérique du taux d'humidité dans la terre : </p>
                    <p>Fréquence d'arrosage : </p> -->
                </div>
                <div id="imageTomate">
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
                <a href="../standard/tomate.html">mode standard</a>
                <p>page d'une plante au hasard</p>
            </address>
        </footer>
        </div>
    </body>
</html>