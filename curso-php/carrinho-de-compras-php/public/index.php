<?php
use app\classes\Cart;
use app\database\models\Read;

session_start();

require '../vendor/autoload.php';

$read = new Read();
//var_dump($read->all('products'));
$products = $read->all('products');

$cart = new Cart();
$productsInCart = $cart->cart();

// $cart->dump();
// $cart->quantity(1, 2);
// $cart->remove(4);
//$cart->clear();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>

<body>
    <div class="container">
        <h3>
            Carrinho: <?php echo count($productsInCart); ?>
            |
            <a href="cart.php"> Go to cart</a>
        </h3>

        <ul>
            <?php foreach ($products as $product): ?>
            <li>
                <?php echo $product->name; ?> | R$ <?php echo number_format(
     $product->price,
     2,
     ',',
     '.'
 ); ?>
            </li>
            <a href="add.php?id=<?php echo $product->id; ?>">add to cart</a>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>