<?php


$seance=$_POST["choixseance"];


$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM eleves,inscription where inscription.idseance=$seance and eleves.ideleve=inscription.ideleve ");

echo "eleve:";
echo "<FORM METHOD='POST' ACTION='desinscrire_seance.php' >";
echo"<input type='hidden' name='choixseance' value='$seance'>";
echo "<SELECT NAME='choixeleve' size='4'>";

while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]." ".$row[2]."</option>"; }
echo "<br>";
echo"</select>";
echo "<INPUT type='submit' value='valider'>";
echo "</FORM>";


mysqli_close($connect);
?>
</body>
</html>
