<?php
$name = "Justine L.";
$greeting = "Hello!";

if (!empty($name)) {
    $greeting = "Hello!, " .$name;
}

$product = "Perfume's";
$cost = "250";
$totals = [];

for ($counter = 1; $counter<= 15; $counter++){
    $subtotal = $cost * $counter;
    $discount = ($cost/100) * ($counter *4);
    $totals[$counter] = $subtotal - $discount;
}
?>

<?php require "includes/header.php";?>

<h2><?= $greeting ?></h2>
<h3><?= $product ?></h3>
<p>Hi! Welcome to Perfume's Shop, where you can buy a bundle packs of it, and get discount! </p>

<table>
    <tr>
        <th>Quantity</th>
        <th>Total Price (with discount)</th>
    </tr>

    <?php foreach ($totals as $quantity => $price): ?>
        <tr>
            <td>
                <?php echo $quantity ?> pack <?php echo ($quantity == 1? "" : "s") ?>
            </td>

            <td>
                P<?= number_format($price, 2) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include "includes/footer.php"; ?>
 