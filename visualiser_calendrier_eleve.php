<?php


date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");
echo"<br> la date est : "."'$date'"."<br>";


$eleve = $_POST["choixeleve"]; 


$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM themes,seances,inscription where inscription.ideleve='$eleve' and inscription.note=-1 and themes.idthemes=seances.idthemes and inscription.idseance=seances.idseance ");


while ($row = mysqli_fetch_array($result, MYSQL_NUM)) 
{
echo " $row[1] $row[5] <br>";
}


mysqli_close($connect);
?>
</body>
</html>
