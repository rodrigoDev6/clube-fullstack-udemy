<?php require '../vendor/autoload.php';
session_start();

use app\classes\Cart;
use app\classes\CartProducts;

$cartProducts = new CartProducts(new Cart());

$products = $cartProducts->products();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <h2>Cart | <a href="/"> Go to Home</a></h2>
    <hr>
    <?php if (count($products['products']) <= 0): ?>
    <h4>O carrinho está vazio</h4>

    <?php else: ?>
    <ul>
        <?php foreach ($products['products'] as $key => $product): ?>
        <li>
            <?php echo "<b>Nome: </b> {$product['product']}"; ?> |
            <?php echo '<b>Preço: </b>R$ ' .
                number_format($product['price'], 2, ',', '.'); ?> |
            <?php echo '<b>Subtotal: </b>: R$ ' .
                number_format($product['subtotal'], 2, ',', '.'); ?> |
            <form action="quantidade.php">
                <label for=""> <b>Quantidade: </b></label>
                <input type="text" name="qty" id="input-qty" value="<?php echo $product[
                    'qty'
                ]; ?>">
                <input type="hidden" name="id" value="<?php echo $product[
                    'id'
                ]; ?>">
            </form>
            <a href="removeProduct.php?id=<?php echo $product[
                'id'
            ]; ?>" id="cart-remove">Remove</a>
        </li>
        <br>
        <?php endforeach; ?>
    </ul>
    <div class="cart-total">
        <span> <b>Total: </b> = R$ <?php echo number_format(
            $products['total'],
            2,
            ',',
            '.'
        ); ?></span>
        <br>
        <span>
            <a href="clear.php">Clear Cart</a>

        </span>
    </div>
    <?php  ?>
    <?php endif; ?>
    </ul>
</body>

</html>