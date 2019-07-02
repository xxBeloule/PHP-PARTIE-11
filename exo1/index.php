<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-hVpXlpdRmJ+uXGwD5W6HZMnR9ENcKVRn855pPbuI/mwPIEKAuKgTKgGksVGmlAvt" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $addition = $_POST['addition'];
    $soustraction = $_POST['soustraction'];
    $multiplication = $_POST['multiplication'];
    $division = $_POST['division'];
    $chiffre1 = $_POST['chiffre1'];
    $chiffre2 = $_POST['chiffre2'];
    // Les choix de l'utilisateurs sont répertoriés ici, chaque condition execute une opération.
    if ($addition) {
      $resultat = $chiffre1 + $chiffre2;
    }
    if ($soustraction) {
      $resultat = $chiffre1 - $chiffre2;
    }
    if ($multiplication) {
      $resultat = $chiffre1 * $chiffre2;
    }
    if ($division) {
      $resultat = $chiffre1 / $chiffre2;
    }
    ?>
    <div class="container text-center">
      <div class="jumbotron jumbotron-fluid m-5 p-5 text-center">
        <h1>Exercice 1</h1>
        <p>Compléter le fichier fourni pour que la calculatrice fonctionne.
          Bonus : Ajouter un bouton de remise à zéro.</p>
      </div>
      <h1>Une calculatrice en PHP</h1>
    <form action="index.php" method="post">
      <input type="number" name="chiffre1" value="<?= $_POST['chiffre1']?>"/>
      <input type="number" name="chiffre2" value="<?= $_POST['chiffre2']?>"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <p>Résultat : <?= $resultat ?> </p>
    </form>
    </div>
  </body>
</html>
