<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Shopping Cart</h2>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $id => $item) { ?>
                        <tr>
                            <td><?= $catalog[$id]['name']; ?></td>
                            <td><?= $item['quantity']; ?></td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
        <?php } else { ?>
            <p>Your shopping cart is empty.</p>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>