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
  </style>
  <body>
    <h1>Formulaire</h1>
    <form action="" method="GET">
        <label for="">Nom</label>
        <input type="text" name="nom">
        <br><br>
        <label for="">Prenom</label>
        <input type="text" name="prenom">
        <br><br>
        <label for="">age</label>
        <input type="number" name="age">
        <br><br>
        <label for="">Mot de Passe</label>
        <input type="password" name="mdp">
        <br><br>
        <!-- <button>Enregistrer</button> -->
        <input type="submit" value="Enregistrer" name="save">
    </form>
    <hr>
    <?php 
        // if(isset($_GET['save'])){ //Si on a cliquer sur le btn save
        //     echo "<h5>NOM    :".$_GET['nom']."</h5>";
        //     echo "<h5>PRENOM :".$_GET['prenom']."</h5>";
        //     echo "<h5>AGE    :".$_GET['age']."</h5>";
        // }
        //
        if(isset($_GET['save'])){ //Si on a cliquer sur le btn save
    ?>
          <h5>NOM    : <?= $_GET['nom'] ?></h5>
          <h5>PRENOM : <?= $_GET['prenom'] ?></h5>
          <h5>AGE    : <?= $_GET['age'] ?></h5>

    <?php } ?>
    
  </body>
</html>