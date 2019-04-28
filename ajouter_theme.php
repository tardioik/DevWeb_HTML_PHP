<html>
<HEAD> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</HEAD> 
<body>
<?php 
$theme = $_POST["theme"]; 
$descriptif = $_POST["descriptif"]; 


date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");
echo"<br> la date est : "."'$date'"."<br>";



date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to
mysql'); 
$query2 = "select count(*) from themes where nom='$theme' and descriptif='$descriptif'";
$result2 = mysqli_query($connect, $query2);
$row = mysqli_fetch_array($result2, MYSQL_NUM);
$compteur = $row[0];

if($compteur>0)
{
echo" Il y a deja un theme similaire qui a ete enregistrer, souhaitez vous qu'il soit activé?";
echo"<br>";
echo"<form method='post' action='activation_theme.php'>";
echo"<input type='hidden' name='nom' value='$theme'>";
echo"<input type='hidden' name='descriptif' value='$descriptif'>";
echo"<input type='radio' name='valider' value='oui'>oui";
echo"<input type='radio' name='valider' value='non'>non";
echo"<input type='submit' value='valider'>";
echo"</form>";
}
else
{
$query = "insert into themes values (NULL, '$theme', 0 , '$descriptif')";

echo "<br>$query<br>";
$result = mysqli_query($connect, $query); }

mysqli_close($connect);


?> 
</body>
</html> 
