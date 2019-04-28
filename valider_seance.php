<?php
$seance = $_POST["idseance"]; 


date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");





$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');

$query = "SELECT * FROM eleves,inscription where inscription.idseance=$seance and eleves.ideleve=inscription.ideleve and inscription.note='-1' ";

echo "<br>$query<br>";

$result = mysqli_query($connect,$query); 

echo "eleves de cette seance a noter: <br>";

echo " <br>";

echo "<FORM METHOD='POST' ACTION='noter_eleves.php' >";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) 
{
echo "$row[1] $row[2] "; 
echo " <input type='text' name=$row[0]> <br>";
}
echo"<input type='hidden' name='seance' value='$seance'>";
echo "<INPUT type='submit' value='valider'>";
echo" </FORM>";
mysqli_close($connect);
?>
</body>
</html>
