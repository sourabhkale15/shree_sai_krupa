<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($_SESSION['cart'] as $product_id => $quantity): 
        ?>
            <tr>
                <td>Product <?php echo $product_id; ?></td>
                <td><?php echo $quantity; ?></td>
                <td>$10.00</td>
                <td>
                    <form action="remove-from-cart.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <button type="submit">Remove</button>
                    </form>
                </td>
            </tr>
        <?php 
    endforeach; 
    ?>
    </tbody>
</table>
