<html>
<body>
<?php 

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 

$seance = $_POST["seance"]; 

echo "<br>seance numero $seance<br>";

$query = "SELECT * FROM eleves,inscription,seances where inscription.idseance=$seance and eleves.ideleve=inscription.ideleve ";

echo "<br>$query<br>";

$result = mysqli_query($connect,$query); 

while ($row = mysqli_fetch_array($result, MYSQL_NUM)) 
{
$note = $_POST["$row[0]"];
echo "<br>$row[1] $row[2] note = $note"; 


echo "<br>";

$query2 = "update inscription set inscription.note='$note' where ideleve=$row[0] and idseance=$seance ";

echo "<br>$query2<br>";
$result2 = mysqli_query($connect, $query2); 
}




mysqli_close($connect);



?> 
</body>
</html> 
