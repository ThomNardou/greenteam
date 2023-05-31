<?php
// Configuration de la connexion à la base de données MySQL
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db_arroseur";
//Include necessary files to draw line chart

require_once ('jpgraph-4.4.1/src/jpgraph.php');

require_once ('jpgraph-4.4.1/src/jpgraph_line.php');

//Set the data
$conn = new PDO("mysql:host=$servername;dbname=db_arroseur", $username, $password);

                    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// to replace with data from the db_arroseur
$stmt = $conn->prepare("SELECT humValues FROM t_humidity");
$stmt->execute(); 
$data = array();

while ($row = $stmt->fetch())
{
	$data[] = $row['humValues'];
}
//Declare the graph object


$graph = new Graph(400,250);

//Clear all

$graph->ClearTheme();

//Set the scale

$graph->SetScale('textlin');

//Set the linear plot

$linept=new LinePlot($data);

//Set the line color

$linept->SetColor('green');

//Add the plot to create the chart

$graph->Add($linept);

//Display the chart

$graph->Stroke();

?>