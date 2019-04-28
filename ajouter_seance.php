<html>
<body>
<?php 
$effectif = $_POST["effectif"]; 
$theme= $_POST["menuchoixtheme"];
$jour = $_POST["jour"]; 
$mois = $_POST["mois"]; 
$annee = $_POST["annee"]; 

date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");
$datesaisi="$annee-$mois-$jour";

echo"<br> la date est : "."'$date'"."<br>";
echo" $datesaisi ";


date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
$query2 = "select count(*) from seances where date='$annee''$mois''$jour' and idthemes='$theme' and seances.date>'$date' ";
$result2 = mysqli_query($connect, $query2);
$row = mysqli_fetch_array($result2, MYSQL_NUM);
$compteur = $row[0];


if($compteur>0)
{
echo" vous ne pouvez pas rajouter cette seance, une seance du meme theme a deja lieu ce jour la";
}
else if ("$datesaisi"<"$date") 
{
echo "Pas possible de creer une seance dans le passe ";
}
else
{
$query = "insert into seances values (NULL, '$annee''$mois''$jour', '$effectif', '$theme')";

echo "<br>$query<br>";
$result = mysqli_query($connect, $query); 
}
mysqli_close($connect);


?> 
</body>
</html> 
