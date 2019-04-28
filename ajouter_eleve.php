<html>
<head>
</head>
<body>
<?php 
$nom = $_POST["nom"]; 
$prenom = $_POST["prenom"]; 
$jour = $_POST["jour"]; 
$mois = $_POST["mois"]; 
$annee = $_POST["annee"]; 


date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d");
echo"<br> la date est : "."'$date'"."<br>";

echo"bienvenue Monsieur/Madame $nom";


date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj'; 
$dbname = 'nf92a040';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');

$query2 = "select count(*) from eleves where nom='$nom' and prenom='$prenom'";
$result2 = mysqli_query($connect, $query2);
$row = mysqli_fetch_array($result2, MYSQL_NUM);
$compteur = $row[0];

if($compteur>0)
{
echo" Il y a deja une personne inscrite avec le meme nom et prenom";
echo"<br>";
echo"Voulez vous quand meme vous inscrire ?";
echo"<form method='post' action='validation_eleve.php'>";

echo"<input type='hidden' name='nom' value='$nom'>";
echo"<input type='hidden' name='prenom' value='$prenom'>";
echo"<input type='hidden' name='jour' value='$jour'>";
echo"<input type='hidden' name='mois' value='$mois'>";
echo"<input type='hidden' name='annee' value='$annee'>";

echo"<input type='radio' name='valider' value='oui'>oui";
echo"<input type='radio' name='valider' value='non'>non";
echo"<input type='submit' value='valider'>";
echo"</form>";
}
else
{
$query= "insert into eleves values(NULL, '$nom', '$prenom', '$annee''$mois''$jour', '$date')";

echo"<br>$query<br>";
$result = mysqli_query($connect, $query); 

echo" l'eleve $prenom $nom  a ete inscrit le $date";
}
mysqli_close($connect);

?> 
</body>
</html> 
