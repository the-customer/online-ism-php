<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title>Produit</title>
    <style>
        table tr th{
            background-color: black;
            color: white;
            font-size: 1.5rem;
            padding: 0.2rem;
        }
        table tr{
            text-align: center;
        }
    </style>
  </head>
  <body>
  <?php 
    include_once('menu.php'); 
    require_once('db.php');
  ?>
    <h2>Liste des produits</h2>
    <hr>
    <table border="1" width="100%">
        <tr>
            <th>Numero</th>
            <th>Libelle</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>action</th>
        </tr>
        <?php foreach ($produits as $produit) { ?>
        <tr>
            <td><?= $produit['numero'] ?></td>
            <td><?= $produit['libelle'] ?></td>
            <td><?= $produit['prix'] ?></td>
            <td><?= $produit['qte'] ?></td>
            <td><a href="details.php?produit=<?= $produit['numero'] ?>">details</a></td>
        </tr>
        <?php } ?>

    </table>
  </body>
</html>