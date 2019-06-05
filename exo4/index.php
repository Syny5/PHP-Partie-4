<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 4</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 4 - Exercice 4</h1>
                <p class="lead">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
                  <ul>
                    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
                    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
                    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
                  </ul>
                </p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
                function compare($nbr1,$nbr2){
                  if($nbr1 > $nbr2){
                    $result='Le premier nombre est plus grand.';
                  }
                  elseif($nbr1 < $nbr2){
                    $result='Le premier nombre est plus petit.';
                  }
                  else{
                    $result='Les deux nombres sont identiques.';
                  }
                  return $result;
                }
                echo compare(10,5);
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
