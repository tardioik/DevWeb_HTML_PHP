<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
date_default_timezone_set('europe/paris');
$date=date("Y\-m\-d");
echo"$date";
$valider =$_POST["valider"];
$theme =$_POST["nom"];
$descriptif =$_POST["descriptif"];

$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 

if($valider=='oui')
{
$query = "update themes set themes.supprimer=0 where themes.nom='$theme' and themes.descriptif='$descriptif' ";

echo"<br>$query<br>";
$result = mysqli_query($connect, $query); 
echo" le theme est activé";
}
else
{
$query = "update themes set themes.supprimer=1 where themes.nom='$theme' and themes.descriptif='$descriptif' ";

echo"<br>$query<br>";
$result = mysqli_query($connect, $query); 
echo"le theme n'est pas activé";
}
mysqli_close($connect);
?>
</body>
</html>
