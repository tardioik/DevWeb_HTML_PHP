<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
date_default_timezone_set('europe/paris');
$date=date("Y\-m\-d");
echo"$date";
$valider =$_POST['valider'];
$nom = $_POST["nom"]; 
$prenom = $_POST["prenom"]; 
$jour = $_POST["jour"]; 
$mois = $_POST["mois"]; 
$annee = $_POST["annee"];

$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 

if($valider=='oui')
{
$query = "insert into eleves values (NULL, '$nom', '$prenom', '$annee''$mois''$jour', '$date')";
echo"<br>$query<br>";
$result = mysqli_query($connect, $query); 
echo" l'eleve $prenom $nom a été inscrit le $date";
}
else
{
echo"vous n'etes pas inscrit";
}
mysqli_close($connect);
?>
</body>
</html>
