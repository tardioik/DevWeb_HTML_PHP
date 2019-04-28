<html>
<body>
<?php 
$eleve = $_POST["choixeleve"]; 
$seance = $_POST["choixseance"]; 


date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");
echo"<br> la date est : "."'$date'"."<br>";



date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to
mysql'); 
$query = "delete from inscription  where inscription.idseance='$seance' and inscription.ideleve='$eleve' ";

echo "<br>$query<br>";
$result = mysqli_query($connect, $query); 
echo" l'eleve a ete desinscrit";


?> 
</body>
</html> 
