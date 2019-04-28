<?php

date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");





$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');

$result = mysqli_query($connect,"SELECT * FROM seances,themes where seances.idthemes=themes.idthemes");
echo "seance:";
echo "<FORM METHOD='POST' ACTION='validation_seancenote.php' >";
echo "<SELECT NAME='idseance' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]." ".$row[5]."</option>"; }
echo "<br>";
echo"</select>";
echo "<INPUT type='submit' value='valider'>";
echo "</FORM>";


mysqli_close($connect);
?>
</body>
</html>
