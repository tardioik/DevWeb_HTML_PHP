<HTML>
<HEAD> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<center>
<h1> Ajout d'une seance </h1>
</center>
<LINK REL="stylesheet" HREF="formulaire.css" type="text/css">
</HEAD> 
<BODY>
<center>
<form method='POST' ACTION="ajouter_seance.php"> 
date de la seance:

Jour
<select name="jour" size='10'>
          <option value="01">1</option>
           <option value="02">2</option>
            <option value="03">3</option>
             <option value="04">4</option>
              <option value="05">5</option>
               <option value="06">6</option>
                <option value="07" >7</option>
                 <option value="08">8</option>
                  <option value="09">9</option>  
	<option value="10">10</option>
                   <option value="11">11</option> 
 <option value="12">12</option>
                   <option value="13">13</option> 
 <option value="14">14</option>
                    <option value="15">15</option>  
<option value="16">16</option>
                     <option value="17">17</option>  
<option value="18">18</option>
                      <option value="19" >19</option>
                       <option value="20">20</option>  
<option value="21">21</option>
                        <option value="22">22</option>  
<option value="23">23</option>
                          <option value="24">24</option>
                           <option value="25">25</option>
                              
<option value="26">26</option>
                          
<option value="27">27</option>
                              <option value="28">28</option>
                               <option value="29" >29</option>
                                <option value="30">30</option>   
<option value="31">31</option>  </select></td>

Mois
  <td><select name="mois" size='5' >  
    <option value="01">Janvier</option>
     <option value="02">Février</option>
       <option value="03">Mars</option>
        <option value="04">Avril</option>
         <option value="05">Mai</option>
          <option value="06">Juin</option>
           <option value="07" >Juillet</option>
            <option value="08">Aout</option>
             <option value="09">Septembre</option>
              <option value="10">Octobre</option>  <option value="11">Novembre</option> 
              <option value="12">Décembre</option></select></td>
Année
<td><select  name="annee"   size='10'>  > 
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>

</select>
<br/> 
<br/>
effectif:<input name="effectif">

<br/>
<br/>
<?php
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a040'; 
$dbpass = '2QZahoUj';
$dbname = 'nf92a040'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM themes where themes.supprimer=0 ");

echo "theme:";
echo "<FORM METHOD='POST' ACTION='ajouter_seance.php' >";
echo "<SELECT NAME='menuchoixtheme' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {

echo "<option value='$row[0]'>".$row[1]."</option> <br/>"; }
echo "</select> <br/>";
echo "<INPUT type='submit' value='Enregistrer seance'>";
echo "</FORM>";

mysqli_close($connect);
?>

</center>
</body>
</html>
