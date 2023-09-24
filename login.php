<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title>Formulaire</title>
  </head>
  <style>
    *{
        font-size: 1.3rem;
    }
    label{
        display: block;
    }
    small,a{
        font-size: 0.8rem;
    }
    small{
        color: red;
    }
  </style>
  <body>
    <h1>Connexion</h1>
    <?php if(isset($_GET['connexion']) && $_GET['connexion']==0){ ?>
    <small>Le login et/ou le mot de passe invalide!!!</small>
    <?php 
        } 
        if(isset($_GET['login'])){
            $login = $_GET['login'];
        }
    ?>

    <form action="verification.php" method="POST">
        <label for="">Username</label>
        <input type="text" name="username" value="<?= $login ?>">
        <br><br>
        <label for="">Mot de Passe</label>
        <input type="password" name="password">
        <br><br>
        <!-- <button>Enregistrer</button> -->
        <input type="submit" value="Enregistrer" name="save">
        <p>
            <a href="register.php">Cliquer pour creer un compte</a>
        </p>
    </form>
  </body>
</html>