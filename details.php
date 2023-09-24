<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title>Details</title>
  </head>
  <style>
    .info{
        /* border: 1px solid; */
        width: fit-content;
        padding: 10px;
        border-radius: 10px;
    }
    .info span{
        display: block;
        margin-bottom: 5px;
    }
    .info .label{
        font-size: 14px;
        font-weight: bold;
        color: #777;
        font-style: italic;
    }
    .info .data{
        font-size: 24px;
    }

    body{
        
    }

    img{
        width: 200px;
        height: 200px;
        border-radius: 50%;
        box-shadow: 3px 3px 33px #777;
    }
  </style>
  <body>
  <?php 
    include_once('menu.php'); 
    require_once('db.php');
    require_once('functions.php');
    //
    $numero = $_GET['produit'];
    $produit = getProduitbyNumero($numero);
  ?>

    <h1>Details Produit</h1>
    <div class="info">
        <span class="label">libelle</span>
        <span class="data">
            <img src="<?= $produit['image'] ?>" alt="Produit <?= $numero ?>">
        </span>
    </div>
    <div class="info">
        <span class="label">libelle</span>
        <span class="data"><?= $produit['libelle'] ?></span>
    </div>
    <div class="info">
        <span class="label">Prix</span>
        <span class="data"><?= $produit['prix'] ?></span>
    </div>
    <div class="info">
        <span class="label">Quantite</span>
        <span class="data"><?= $produit['qte'] ?></span>
    </div>
    <div class="info">
        <span class="label">Description</span>
        <span class="data"><?= $produit['description'] ?></span>
    </div>
  </body>
</html>