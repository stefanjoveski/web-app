<!DOCTYPE html>
<html>

    <head>
        <?php include '../view/header.php'; ?>
        <title>SM discount codes</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />    
    </head>
    <body>
        <header>
            <h1 class="n">Shopping cart</h1>
        </header>
        <main>
            <h1>Your Cart</h1>
            <?php if (empty($_SESSION['cart12']) || count($_SESSION['cart12']) == 0) : ?>
                <p>There are no items in your cart.</p>
            <?php else: ?>
                <form action="." method="post">
                    <input type="hidden" name="action" value="update">
                    <table id="cart">
                        <tr id="cart_header">
                            <th class="left">Company</th>
                            <th class="right">Item</th>
                            <th class="right">Price</th>
                            <th class="right">Quantity</th>
                            <th class="right">Item Total</th>
                        </tr>
                        <?php $order=""; ?>

                        <?php foreach( $_SESSION['cart12'] as $key => $item ) :
                            $cost  = number_format($item['cost'],  2);
                            $total = number_format($item['total'], 2);
                        ?>
                
                        <tr>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <td>
                                <?php echo $item['product']; ?>
                            </td>
                            <td class="right">
                                $<?php echo $cost; ?>
                            </td>
                            <td class="right">
                                <input type="text" class="cart_qty"
                                    name="newqty[<?php echo $key; ?>]"
                                    value="<?php echo $item['qty']; ?>">
                            </td>
                            <td class="right">
                                $<?php echo $total; ?>
                            </td>
                        </tr>
                        <?php //$order=$order.$item['name']." ".$item['product']." ".$item['qty']." ".$cost.",";
                           $order=$order.$item['name']." ".$cost.",";
                        ?>
                        <?php endforeach; ?>
                    

                        <tr id="cart_footer">
                            <td colspan="3"><b>Subtotal</b></td>
                            <td>$<?php $t=get_subtotal(); echo $t ?></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="right">
                                <input class="button2" style="font-size:100%" type="submit" value="Update Cart">
                            </td>
                        </tr>
                    </table>                
                </form>
            <?php endif; ?>
            <p><a class="button2" href="index.php?category_id=1">Add Item</a></p>
            <p><a class="button2" href=".?action=empty_cart">Empty Cart</a></p>
            <p><a class="button2" href="../mail/checkout.php?order=<?php echo $order?>" style="float:right;background:#e9624b">Proceed Checkout</a></p>
        </main>
    </body>
</html>