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
                        <a href="../standard/ciboulette.html">Mode standard</a>
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
                    <h1>Ciboulette</h1>
                    <h2>Conseil</h2>
                    <p>Voici quelques conseils pour une meilleure cultivation :</p>
                    <ul>
                        <li>Planter au soleil</li>
                        <li>Planter profondément (5 à 10 cm)</li>
                        <li>Arroser lorsque le sol redevient sec</li>
                        <li>Ne pas trop arrosé</li>
                        <li>Attendre que les tiges mesurent 18/20 cm avant la récolte</li>
                        <li>Laisser 3cm après l'avoir coupé pour une repousse des plus optimales</li>
                    </ul>
                    <h2>Valeur actuelle</h2>
                    <?php

                        $servername = "localhost";

                        $username = "root";

                        $password = "root";

                        $conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $requete = 'SELECT * FROM t_typplante WHERE plaNom LIKE "ciboulette"';
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

                    <br><br><button><img src="/resources/Images/1244017.png" alt=""><a href="../formulaireDeModification.php">Modifier</a></button>

                </div>
                <div id="imageCiboulette">
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
                <a href="../standard/ciboulette.html">mode standard</a>
            </address>
        </footer>
        </div>
    </body>
</html>