<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <p>Créer une variable age et l'initialiser avec une valeur.  
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. 
    Dans le cas contraire, afficher Vous êtes mineur.</p>

    <?php
      $age = 21;
      
      if($age >= 18 ) {
          echo 'vous êtes majeur';
      }
      else {
          echo 'vous êtes mineur';
      }

    ?>


</body>
</html>