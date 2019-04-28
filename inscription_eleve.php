<HTML>
<HEAD> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<center>
<h1> Inscription d'un élève </h1>
</center>
<LINK REL="stylesheet" HREF="formulaire.css" type="text/css">
</HEAD> 
<BODY>
<center>
<?php
date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");

$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM eleves");

echo "eleve: <br/> "; 
echo "<FORM METHOD='POST' ACTION='inscrire_eleve.php' >";
echo "<SELECT NAME='choixeleve' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]." ".$row[2]."</option>"; }
echo "<br/>";
echo"</select>";
$result = mysqli_query($connect,"SELECT * FROM seances,themes where seances.idthemes=themes.idthemes and seances.date>'$date'");
echo " <br/> seance: <br/>";
echo "<FORM METHOD='POST' ACTION='inscrire_eleve.php' >";
echo "<SELECT NAME='choixseance' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]." ".$row[5]."</option>"; }
echo "<br>";
echo"</select> <br/>";
echo "<INPUT type='submit' value='inscription'>";
echo "</FORM>";


mysqli_close($connect);
?>
</center>
</body>
</html>
