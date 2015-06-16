<?php 
// Variables que contienen la informacion a enviar
$text=$_POST["Error"];
$option=$_POST["Erroroption"];
$subject="Nuevo reporte de error tipo: " . $option;   
// envia email
$to = "pedrobastarrica@gmail.com";
$headers = "From: reporterror@galileo.com";

mail($to,$subject,$text,$headers);

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="jumbotron">
<h1>
GRACIAS!
</h1>
<h2>
Tu reporte fue enviado.
<a href="/moodle">Click aqui para volver.</a>
<p>
En un webserver mandaria email.
</h2>
</div>
</div>
</body>
</html>
