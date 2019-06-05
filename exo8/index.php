<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 8</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 4 - Exercice 8</h1>
                <p class="lead">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
                  Tous les paramètres doivent avoir une valeur par défaut.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              function addition($nbr1=0, $nbr2=0, $nbr3=0){
                $result = $nbr1 + $nbr2 + $nbr3;
                return $result;
              }
              echo addition(5, 6, 7);
            ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
