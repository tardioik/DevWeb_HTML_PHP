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
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 

$query2 = "select count(*) from inscription where inscription.ideleve='$eleve' and inscription.idseance='$seance'";
$result2 = mysqli_query($connect, $query2);
$row = mysqli_fetch_array($result2, MYSQL_NUM);
$compteur = $row[0];

if($compteur>0)
{
echo" tu es deja inscrit a cette seance ";
}
else
{
$query = "insert into inscription values ('$eleve', '$seance', -1 )";

echo "<br>$query<br>";
$result = mysqli_query($connect, $query); 
}
mysqli_close($connect);


?> 
</body>
</html> 
