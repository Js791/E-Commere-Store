<?php

require(__DIR__."/../../partials/nav.php");

if(!is_logged_in())
{
    flash("You must be logged in to access this page");
    header("Location: login.php");
}

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT Products.id, name, image, desired_quantity, stock FROM Products JOIN Cart ON Cart.product_id = Products.id WHERE Cart.Users_id = :uid AND stock > 0 AND desired_quantity > 0 AND visibility > 0");
try {
    $stmt->execute([":uid"=>get_user_id()]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} 
catch (PDOException $e) 
{
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>


<div class="small-container cart-page">
    <table class="cart-table">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($results as $item) : ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <?php if (se($item, "image", "", false)) : ?>
                            <img src="<?php se($item, "image"); ?>" class="cart-image" alt="..." onclick="location.href='product_details.php?id=<?php se($item, 'id') ;?>'" title="Click for more details!" class="cart-image"></img>
                        <?php endif; ?>
                        <div>
                            <p><?php se($item,"name")?></p>
                            <small><?php se($item,"unit_price")?></small>
                            <br>
                            <a class="remove" hre="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" name="" value="0"></td>
                <td><?php se($item,"unit_price")?></td>
            </tr>
        <?php endforeach; ?>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$0.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Price</td>
            </tr>
        </table>
    
    </div>
</div>