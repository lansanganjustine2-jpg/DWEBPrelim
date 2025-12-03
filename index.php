<?php 
$username = "Justine";
$greeting = "Welcome to Perfume Shop, " .$username ."!";
$offer = ["Perfumes", 3, 600, 450];
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $usual_price - $offer_price;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Perfume Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Perfume Store</h1>
    <h2><?= $greeting ?></h2>

    <div class = "saving">
        <p>You Save: P<?= $saving ?></p>
    </div>

    <p>You can buy <?= $offer[1] ?> a packs of <?= $offer[0]?> and get the special discount in our shop in a bundle price!</p>

    <p>Discounted Bundle Price: P<?= $offer_price ?></p>

    <p>Normal Price: P<?= $usual_price?></p>

    <?php include "includes/footer.php"; ?>