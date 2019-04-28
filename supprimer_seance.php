<html>
<body>
<?php 

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


$query2 = "delete from inscription  where inscription.idseance='$seance' ";
$query = "delete from seances where seances.idseance='$seance' ";

echo "<br>$query2<br>";
echo "<br>$query<br>";
$result2 = mysqli_query($connect, $query2); 
$result = mysqli_query($connect, $query); 
echo" l'eleve a ete desinscrit";


?> 
</body>
</html> 
