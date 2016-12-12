<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
    </head>
<body>

<form method="post" action="traitement.php">
<label for="nom">Nom :</label>
<input type="text" id="nom" name="nom" value="">

<label for="prenom">Prénom :</label>
<input type="text" id="prenom" name="prenom" value="">
    
<label for="sexe">Sexe</label> 
<label for="sexe">Homme :</label>
<input type="radio" name="sexe" value="C'est un Homme" checked>
<label for="sexe">Femme :</label>
<input type="radio" name="sexe" value="femme">
<input type="checkbox" name="cb" value="Ah d'accord.">
    
<select name="annee">  
<?php
for($annee=1900;$annee<=2016;$annee++){
    echo "<option value=\"$annee\">$annee</option>";
}
?>
</select>
 
<br /><br />
<label for="loisirs">Loisirs :</label><br /><br />
    <input type="checkbox" name="loisirs[]" value="cinema">Cinéma<br />
    <input type="checkbox" name="loisirs[]" value="sport">Sport<br />
    <input type="checkbox" name="loisirs[]" value="sieste">Sieste<br />
    <input type="checkbox" name="loisirs[]" value="php">PHP<br /><br />
    
<input type="submit" id="bouton" name="bouton" value="Oké"> 
    
<?php
$_SESSION['toto']="Bonjour";
?>
</form>
</body>
</html>