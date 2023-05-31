<?php

//Include necessary files to draw line chart

require_once ('jpgraph-4.4.1/src/jpgraph.php');

require_once ('jpgraph-4.4.1/src/jpgraph_line.php');

//Set the data

// to replace with data from the db_arroseur
$data = array(10,6,16,23,11,9,5);

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