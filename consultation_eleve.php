<HTML>
<HEAD> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<center>
<h1> Consultation des élèves </h1>
</center>
<LINK REL="stylesheet" HREF="formulaire.css" type="text/css">
</HEAD> 
<BODY>
<center>
<?php
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM eleves");

echo "choix de l'élève:";
echo "<FORM METHOD='POST' ACTION='consulter_eleve.php' >";
echo "<SELECT NAME='choixeleve' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]." ".$row[2]."</option>"; }
echo "<br>";
echo"</select> <br/>";
echo "<INPUT type='submit' value='valider'>";
echo "</FORM>";


mysqli_close($connect);
?>
</center>
</body>
</html>
