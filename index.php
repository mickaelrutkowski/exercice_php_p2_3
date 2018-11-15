<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $gender = "homme";
     settype($gender, "string");
  $age = 0;
     settype($age, "integer");
  //settype definir le type de variable

  if ($gender == "homme" && $age < 18)
 {
    echo "Vous etes un homme êtes vous etes mineur";
 }
 // sinon si votre age est superieur ou egal a 18 alors vous etes majeur
 else
 {
    echo "Vous êtes un homme et vous etes majeur";
 }
 // sinon vous n'avez pas du rentré votre age car la variable ne contient pas de nombre
 ?>
</body>
</html>
