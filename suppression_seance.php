<HTML>
<HEAD> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<center>
<h1> Supprimer une séance </h1>
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
$result = mysqli_query($connect,"SELECT * FROM seances,themes where seances.idthemes=themes.idthemes and seances.date>'$date' ");

echo "choix de la séance à supprimer:";
echo "<FORM METHOD='POST' ACTION='supprimer_seance.php' >";
echo "<SELECT NAME='choixseance' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]." ".$row[5]."</option>"; }
echo "<br>";
echo"</select> <br/>";
echo "<INPUT type='submit' value='valider'>";
echo "</FORM>";


mysqli_close($connect);
?>
</center>
</body>
</html>
