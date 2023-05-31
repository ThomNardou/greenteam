<?php
// Récupérez la valeur d'humidité envoyée dans la requête HTTP GET
$humidity = $_GET["humidity"];

// Configuration de la connexion à la base de données MySQL
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db_arroseur";

try 
{
  // Créez une connexion PDO à la base de données MySQL
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  // Configurez PDO pour renvoyer les erreurs SQL
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Ajoutez la valeur d'humidité à une table MySQL et le binding est mis en place
  // pour proteger la requête contre une injection.
  $stmt = $conn->prepare("INSERT INTO t_humidity (humValues) VALUES (:humidity)");
  $stmt->bindParam(':humidity', $humidity);
  
  // Sans le binding
  //$stmt = $conn->prepare("INSERT INTO t_humidity (humValues) VALUES ('$humidity')"); // exemple d'attaque : http://localhost/add_humidity.php?humidity=10');DROP TABLE t_humidity;--

  
  $stmt->execute();
  
  http_response_code(200);
  echo "La valeur d'humidité a été ajoutée à la base de données";
} 
catch(PDOException $e) 
{
  http_response_code(500);
  echo "Erreur lors de l'ajout de la valeur d'humidité : " . $e->getMessage();
}

// Fermez la connexion à la base de données MySQL
$conn = null;
?>
