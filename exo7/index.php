<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 7</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 4 - Exercice 7</h1>
                <p class="lead">Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
                <ul>
                  <li>Homme</li>
                  <li>Femme</li>
                </ul>
                <p>La fonction doit renvoyer en fonction des paramètres :</p>
                <ul>
                  <li>Vous êtes un homme et vous êtes majeur</li>
                  <li>Vous êtes un homme et vous êtes mineur</li>
                  <li>Vous êtes une femme et vous êtes majeur</li>
                  <li>Vous êtes une femme et vous êtes mineur</li>
                </ul>
                <p>Gérer tous les cas.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              function type($age,$gender){
                if($age >= 18 && $gender = 'homme'){
                  $result = 'Vous êtes un homme et vous êtes majeur.';
                }
                elseif($age < 18 && $gender = 'homme'){
                  $result = 'Vous êtes un homme et vous êtes mineur.';
                }
                elseif($age >= 18 && $gender = 'femme'){
                  $result = 'Vous êtes une femme et vous êtes majeure.';
                }
                else{
                  $result = 'Vous êtes une femme vous êtes mineure.';
                }
                return $result;
              }
              echo type(20, 'homme');
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
