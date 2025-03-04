<?php

declare(strict_types=1);
require("./include/functions.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Projet POO</title>
  <link rel="shortcut icon " href="images/logo.png" />
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <header>
    <a href="index.html" title="retourner à l'accueil ">
      <img src="images/logoAc.png" alt="retourner à l'accueil" />
    </a>
    <nav></nav>
  </header>
  <main>
    <h1>
      Horaires de trains en Île-de-France : Consultez les horaires et les
      itinéraires des trains dans la région parisienne
    </h1>

    <section>
      <div class="form-box">
        <h2>Planifiez votre itinéraire</h2>
        <form action="">
          <label for="depart">Départ</label>
          <input type="text" id="depart" name="depart" required list="suggestions" />
          <?php
          echo nomLieux();
          ?>
          <label for="arrive">Arrivé</label>
          <input type="text" id="arrive" name="arrive" required list="suggestions" />
          <label for="quand">Quand</label>
          <input type="datetime-local" id="datetime" name="datetime" value="<?php echo date('Y-m-d\TH:i'); ?>" required placeholder="partir maintenant"/>


          <button type="submit">GO!</button>
        </form>
      </div>
    </section>
  </main>
  <footer>
    <span>Réalisé par: Groupe B2 </span>
  </footer>
</body>

</html>