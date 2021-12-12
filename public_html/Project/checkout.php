<?php 
require(__DIR__."/../../partials/nav.php");
//eee
if(!is_logged_in())
{
    flash("You must be logged in to access this page");
    redirect("Location: login.php");
}
?>
<?php
$form = [
    ["id" => "name", "name" => "name", "type" => "text"],
    ["id" => "address", "name" => "address", "type" => "text"],
    ["id" => "Apt or Suite number", "name" => "Apt", "type" => "text"],
    ["id" => "state", "name" => "state", "type" => "text",],
    ["id" => "country", "name" => "country", "type" => "text"],
    ["id" => "zip","name" => "zip","type" => "number"],
    ["id" => "please confirm total amount by typing in total amount","name"=>"please confirm total amount by typing in total amount","type"=>"number"],
    ["id" => "choose a payment type","name" =>"choose a payment type","type"=>"select"]
];

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


<div class="container-fluid">
    <h2>Shipping Information</h2>
    <?php $q=0?>
    <?php $subtotal=0?>
        <?php foreach ($results as $item) : ?>
            <?php $price = (int)se($item,"unit_price","",false);?>
            <?php $quantity = (int)se($item,"desired_quantity","",false);?>
            <?php $subtotal+=$price*$quantity;?>
            <?php $q+=$quantity?>
        <?php endforeach; ?>
        <h3>Total $<?php echo($subtotal)?></h3>
        <h3>Total Cart Items: <?php echo($q)?></h3>
        <div id ="E"></div>
    <form onsubmit="return validate(this)" method="POST">
        <?php foreach ($form as $ele) : ?>
            <div class="mb-3">
                <label class="form-label" for="<?php se($ele, "id"); ?>"><?php se($ele, "name", ""); ?></label>
                <?php if ($ele["type"] === "textarea") : ?>
                    <?php  /*Note for required: conditionally applies required attribute, note this is done via echo*/ ?>
                    <textarea class="form-control" name="<?php se($ele, "name"); ?>" id="<?php se($ele, "id"); ?>" <?php echo (se($ele, "required", false, false) ? 'required' : ''); ?>></textarea>
                <?php elseif ($ele["type"] === "select") : ?>
                    <label for="payment-type"></label>
                        <select name ="payment" id="pay">
                            <option value="AMEX">AMEX</option>
                            <option value="Discover">Discover</option>
                            <option value="MasterCard">MasterCard</option>
                            <option value="Visa">Visa</option>
                            <option value="Cash">Cash</option>
                        </select>
                <?php else : ?>
                    <?php  /*Note for required: conditionally applies required attribute, note this is done via echo*/ ?>
                    <input class="form-control" name="<?php se($ele, "name"); ?>" id="<?php se($ele, "id"); ?>" <?php echo (se($ele, "required", false, false) ? 'required' : ''); ?> type="<?php se($ele, "type"); ?>" />
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <input class="btn btn-primary" type="submit" value="Purchase" />
    </form>
</div>
<script>
    function validate(form) //client side validation
    {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
         let name = form.name.value;
         let address = form.address.value;
         let unit = form.Apt.value;
         let state = form.state.value;
         let country = form.country.value;
         let zip = form.zip.value;
         const error = document.getElementById("E");
         let errors = [];

            if(!/^[a-zA-z]{1,100}$/.test(name))
            {
               console.log("mistake caught");
               errors.push("Not a valid name");
            }

            if(!address)
            {
                errors.push("address cannot be empty");
            }

            if(!/^[+]?[0-9]+$/.test(unit))
            {
                errors.push("Not a valid apt/suite number");
            }

            if(!/^[a-zA-z]{1,100}$/.test(state))
            {
                errors.push("Not a valid state");
            }

            if(!/^[a-zA-z]{1,100}$/.test(country))
            {
                errors.push("not a valid country");
            }

            if(!/^[+]?[0-9]{1,100}$/.test(zip))
            {
                errors.push("not a valid zip code");
            }

            if(errors.length != 0)
            {
                error.innerText = errors.join(', ');
                return false;
            }

            return true;
    }
</script>
<?php
if (isset($_POST["please_confirm_total_amount_by_typing_in_total_amount"]))
{
    $pay = se($_POST, "please_confirm_total_amount_by_typing_in_total_amount", "", false);
    $address = se($_POST, "address", "", false);
    $method = se($_POST, "payment", "", false);
    $results = [];
    $db = getDB();
    $stmt = $db->prepare("SELECT Products.id, name, image, desired_quantity, stock,unit_price,unit_cost,visibility,(unit_price*desired_quantity) as subtotal FROM Products JOIN Cart ON Cart.product_id = Products.id WHERE Cart.Users_id = :uid AND stock > 0 AND desired_quantity > 0 AND visibility > 0");
    try {
        $stmt->execute([":uid"=>get_user_id()]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) 
    {
        $results = $r;
    }

    } 
    catch (PDOException $e) 
    {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }


    $subtotal = 0;
    foreach ($results as $item)
    {
         $name = se($item,"name","",false);
         $price =  (int)se($item,"unit_price","",false);
         $quant =  (int)se($item,"desired_quantity","",false);
         $p_price = (int)se($item,"unit_price","",false);
         $c_price = (int)se($item,"unit_cost","",false);
         $stock = (int)se($item,"stock","",false);
         $visibile=se($item,"visibility","",false);
         $id = se($item,"id","",false);
         $subtotal+= $price*$quant;
    }

    $hasError = false;
    if($subtotal != $pay)
    {
        flash("you did not enter the correct total amount","danger");
        $hasError = true;
    }


    if($p_price != $c_price)
    {
        flash("There has been a price change prices are not same","danger");
        $hasError = true;
    }

    if($quant > $stock)
    {
        flash("You asked for $quant $name however only $stock $name is available please update quantity sorry!","danger");
        $hasError = true;
    }
   
    if($visibile < 1)
    {
        flash("Sorry this item is no longer available","danger");
        $hasError = true;
    }

     if($hasError)
    {
        //do nothing until errors are fixed
    }
    else //validation stage passed
    {
        $stmt= $db->prepare("INSERT INTO Orders(address, user_id, total_price, payment_method) VALUES(:address, :user_id, :total_price, :payment_method)");
        try
        {
            $stmt->execute([":user_id"=>get_user_id(),":payment_method"=>$method,":total_price"=>$subtotal,":address"=>$address]);
            flash("items purchased!","success");
        }
        catch (Exception $e)
        {
            error_log(var_export($e, true));
        }
    
        try
        {
            $order_id=$db->lastInsertId();
            flash("last insert works");
        }

        catch(Exception $e)
        {   
            error_log(var_export($e, true));
        }
        $stmt=$db->prepare("INSERT INTO OrderItems(product_id, quantity, unit_price, order_id) SELECT product_id, desired_quantity, unit_cost,:order_id FROM Cart JOIN Products on Cart.product_id = Products.id where Users_id = :uid and Products.visibility > 0 AND Cart.desired_quantity <= Products.stock");
        try
        {
            $stmt->execute([":uid"=>get_user_id(),":order_id"=>$order_id]);
            flash("insert into order items succesful");
        }

        catch(Exception $e)
        {
            error_log(var_export($e, true));
        }

        $stmt= $db->prepare("UPDATE Products set stock = stock - (SELECT desired_quantity FROM Cart where Users_id = :uid AND product_id = Products.id) WHERE visibility > 0 AND Products.id in (SELECT product_id from Cart where Users_id = :uid)");
        $stmt->execute([":uid"=>get_user_id()]);
        $stmt = $db->prepare("DELETE FROM Cart where Users_id = :uid");
        $stmt->execute([":uid"=>get_user_id()]);
        redirect("order_details.php");;
    }
    
}
?>
<?php
require(__DIR__."/../../partials/flash.php");
?>
