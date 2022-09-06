<?php require '../vendor/autoload.php';

session_start();

$products = require '../app/helpers/products.php';

use app\classes\Cart;

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
            <?php foreach ($products as $index => $product): ?>
            <li>
                <?php echo $product['name']; ?> | R$ <?php echo number_format(
     $product['price'],
     2,
     ',',
     '.'
 ); ?>
            </li>
            <a href="add.php?id=<?php echo $index; ?>">add to cart</a>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>