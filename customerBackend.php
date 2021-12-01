<style>
<?php include 'style.css';?>
</style>
<?php
$bookNum = $_POST["bookNum"];
$basketballNum = $_POST["basketballNum"];
$backpackNum = $_POST["backpackNum"];
$email = $_POST["email"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];

echo "<div class='container'><div class='product'><h2>Welcome! Thank you for shopping with us! Here is your receipt: </h2>";
echo "<h4>Email: " . $email . "</h4>";
echo "<h4>Password: " . $password . "</h4>";

$bookCost = $bookNum * 5.00;
$basketballCost = $basketballNum * 15.00;
$backpackCost = $backpackNum * 28.00;
$shippingCost = 0.0;
if ($shipping == "0") { $shippingCost = 0.0; }
else if ($shipping == "5") { $shippingCost = 5.0; }
else if ($shipping == "50") { $shippingCost = 50.0; }
$total = $bookCost + $basketballCost + $backpackCost + $shippingCost;

echo "<table>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Books</th><td>" . $bookNum . "</td><td>$5.00</td><td>$" . $bookCost . "</td></tr>";
echo "<tr><th>Basketballs</th><td>" . $basketballNum . "</td><td>$15.00</td><td>$" . $basketballCost . "</td></tr>";
echo "<tr><th>Backpacks</th><td>" . $backpackNum . "</td><td>$28.00</td><td>$" . $backpackCost . "</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>" . $shipping . "</td><td>$" . $shippingCost . "</td></tr>";
echo "<tr><th colspan='3'>Total Cost</th><th>$". $total . "</th></tr>";
echo "</table></div></div>";
?>