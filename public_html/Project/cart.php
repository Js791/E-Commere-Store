<?php

require(__DIR__."/../../partials/nav.php");

if(!is_logged_in())
{
    flash("You must be logged in to access this page");
    header("Location: login.php");
}

if(isset($_POST["update"]) && isset($_POST["product_id"]))
{
    $db=getDB();
    $stmt = $db->prepare("UPDATE Cart SET desired_quantity = :desired_quantity where product_id = :product_id AND Users_id = :uid");
    try{
        $stmt->execute([":product_id"=>$_POST["product_id"],":uid"=>get_user_id(),":desired_quantity" =>$_POST["desired_quantity"]]);
        flash("Quantity changed successfully ","success");
    }
    catch(PDOException $e){
        flash(var_export($e, true), "danger");
    }
}

if(isset($_POST["product_id"]) && isset($_POST["delete"]))
{
    $db=getDB();
    $stmt = $db->prepare("DELETE FROM Cart where product_id = :product_id AND Users_id = :uid");
    try{
      $stmt->execute([":product_id"=>$_POST["product_id"],":uid"=>get_user_id()]);
      flash("Deleted product", "success");
    }
    catch(PDOException $e){
        flash(var_export($e, true), "danger");
    }
}

if(isset($_POST["Users_id"]))
{
    flash("Clearing Cart" . $_POST["Users_id"]);
    $db=getDB();
    $stmt = $db->prepare("DELETE FROM Cart where Users_id = :uid");
    try{
      $stmt->execute([":uid"=>get_user_id()]);
      flash("Cleared Cart " . $_POST["Users_id"], "success");
    }
    catch(PDOException $e){
        flash(var_export($e, true), "danger");
    }
}

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT Products.id, name, image, desired_quantity, stock,unit_price, (unit_price*desired_quantity) as subtotal FROM Products JOIN Cart ON Cart.product_id = Products.id WHERE Cart.Users_id = :uid AND stock > 0 AND desired_quantity > 0 AND visibility > 0");
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
        <tr class="TT">
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
                            <p>Product: <?php se($item,"name")?></p>
                            <small>Price: $<?php se($item,"unit_price")?></small>
                            <br></br>
                            <form method="POST">
                                <input type="hidden" name="product_id" value="<?php se($item,"id");?>" class="btn btn-primary" id="td2"/>
                                <input type="submit" class="btn btn-primary" name="delete" value="Remove from Cart" id="td1"/>
                                <td>
                                    <input type="number" name="desired_quantity" value="<?php se($item,"desired_quantity")?>"  class="btn btn-primary">
                                    <input type="hidden" class="btn btn-primary" name="product_id" value="<?php se($item,'id');?>" id="td3"/>
                                    <br></br>
                                    <input type="submit" class="btn btn-primary" name="update" value="Update Quantity" id="td4"/>
                                </td>
                            </form>
                        </div>
                    </div>
                </td>
                <td>$<?php se($item,"subtotal")?></td>
            </tr>
        <?php endforeach; ?>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <?php $subtotal=0?>
                <?php foreach ($results as $item) : ?>
                    <?php $price = (int)se($item,"unit_price","",false);?>
                    <?php $quantity = (int)se($item,"desired_quantity","",false);?>
                    <?php $subtotal+=$price*$quantity;?>
                <?php endforeach; ?>
                    <td>$<?php echo($subtotal);?></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$0</td>
            </tr>
            <tr>
                <td>Total</td>
                <?php $subtotal=0?>
                <?php foreach ($results as $item) : ?>
                    <?php $price = (int)se($item,"unit_price","",false);?>
                    <?php $quantity = (int)se($item,"desired_quantity","",false);?>
                    <?php $subtotal+=$price*$quantity;?>
                <?php endforeach; ?>
                <td>$<?php echo($subtotal);?></td>
            </tr>
            <tr class="bb">
                <form method="POST">
                    <input type="hidden" name="Users_id" value="<?php se($item,"Users_id");?>" class="btn btn-primary" id="td2"/>
                    <td><input type="submit" name="Submit" value="Clear Cart" class="btn btn-primary" id="td3"></input></td>
                </form>
            </tr>
 </table>    
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>