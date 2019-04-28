<HTML>
<HEAD> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<center>
<h1> Supprimer un thème </h1>
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
$result = mysqli_query($connect,"SELECT * FROM themes where themes.supprimer=0 ");

echo "choix du thème à supprimer:";
echo "<FORM METHOD='POST' ACTION='supprimer_theme.php' >";
echo "<SELECT NAME='theme' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) 
{

echo "<option value='$row[0]'>".$row[1]."</option>"; 
}
echo" </select> <br/> ";
echo " <INPUT type='submit' value='Supprimer le  theme '>";
echo "</FORM>";
mysqli_close($connect);
?>
</center>
</body>
</html>
