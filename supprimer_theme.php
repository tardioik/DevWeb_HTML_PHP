<html>
<body>
<?php 

$theme=$_POST["theme"];

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 

 


$query2 = "update themes set themes.supprimer=1 where themes.idthemes=$theme ";

echo "<br>$query2<br>";
$result2 = mysqli_query($connect, $query2); 

echo" le theme a bien ete supprimer";
mysqli_close($connect);



?> 
</body>
</html> 
