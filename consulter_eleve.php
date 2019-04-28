<?php
$eleve = $_POST["choixeleve"]; 


$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM eleves where eleves.ideleve=$eleve ");


echo "<FORM METHOD='POST' >";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) 
{
echo" Voici les donnees de l'eleve que vous avez selectionne : <br>";
echo" <br> ";
echo " nom :$row[1] <br>";
echo "prenom :$row[2] <br>";
echo "id eleve :$row[0] <br>"; 
echo "date de naissance :$row[3] <br>";
echo "date d'inscription :$row[4] <br>"; 
}

echo" </FORM>";
mysqli_close($connect);
?>
</body>
</html>
