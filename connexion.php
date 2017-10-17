<?php
require_once('inc/init.inc.php');


// traitement pour la deconnexion :
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion'){
   unset($_SESSION['membre']);
   header('location:connexion.php');
   // si une action est demandee dans l' url.... et que cette action est "deconnexion" alors on procede a la connexion.
}

//traitement pour rediriger l' utilisateur s'il est déja connecté
if(userConnecte()){
  header('location:profil.php');
}
// ->Verifie si le formulaire est vide
//on connecte le membre en enregistrant ses infos dans la seesion
// ->le membre existe til en bdd
// ->es ce que le mot de passe saisi correspond a celui en bdd
// ->enregistrement en session
// ->redirection vers le profil


if (!empty($_POST)) {

  //debug($_POST);
  if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    $resultat = $pdo -> prepare('SELECT * FROM membre WHERE pseudo = :pseudo');

    $resultat -> bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $resultat -> execute();


    if ($resultat -> rowCount() > 0) {// ok le pseudo existe
      $membre = $resultat -> fetch(PDO::FETCH_ASSOC);// on recupere toute les infos du membre sous la forme d'un array
      if (  $membre['mdp'] == md5($_POST['mdp'])) {// si mdp cripte en bdd cripte et saisi == ok alors tout est ok
      // tout est ok on peut connecte l'utilisateur
      foreach ($membre as $indice => $valeur) {
        if ($indice != 'mdp') {
          $_SESSION['membre'][$indice] = $valeur;
        }
      }
      //debug($_SESSION);
      // redirection

      header('location:profil.php');
      }

      else {
        $msg .= '<div class="erreur">Mot de passe erroné.</div>';
      }
    }
    else {
      $msg .= '<div class="erreur">Pseudo erroné.</div>';
    }
  }
  else {
    $msg .= '<div class="erreur">Veuillez renseigner un pseudo cet un mot de passe.</div>';
  }
}



require('inc/header.inc.php');
?>
<h1>connexion</h1>
<?= $msg?>

<form method="post" action="" >
  <?= $msg?>
  <label>pseudo</label>
  <input type="text" name="pseudo" />
  <label>Mot de passe :</label>
  <input type="password" name="mdp"  />
  <input type="submit" value="enregister"/>
</form>


<?php require_once('inc/footer.inc.php');  ?>
