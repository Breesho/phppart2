<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <p>Créer deux variables age et gender.
     La variable gender peut prendre comme valeur :

      - Homme
      - Femme

    En fonction de l'âge et du genre afficher la phrase correspondante :
    - Vous êtes un homme et vous êtes majeur
    - Vous êtes un homme et vous êtes mineur
    - Vous êtes une femme et vous êtes majeure
    - Vous êtes une femme et vous êtes mineur </p>

    <?php
      $age = 21;
      $gender = "Homme";
        if($age >= 21 && $gender == "Homme") {
            echo "Vous êtes un homme et vous êtes majeur";
        }else {
            echo "Vous êtes un homme et vous êtes mineur";
        }

        $age = 21;
        $gender = "Femme";
          if($age >= 21 && $gender == "Femme") {
              echo "Vous êtes une Femme et vous êtes majeur";
          }else {
              echo "Vous êtes une Femme et vous êtes mineur";
          }
    ?>


</body>
</html>