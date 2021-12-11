<?php 
//ss
require(__DIR__."/../../partials/nav.php");

if(!is_logged_in())
{
    flash("You must be logged in to access this page");
    redirect("login.php");
}

$results = [];
$db = getDB();
$order_id = $_GET["id"];
$stmt = $db->prepare("SELECT Orders.created,total_price,payment_method,address,quantity,OrderItems.unit_price,order_id, name from Orders JOIN OrderItems on Orders.id = OrderItems.order_id JOIN Products on Products.id = OrderItems.product_id WHERE Orders.id = :oid");
try 
{
    $stmt->execute([":oid"=>$order_id]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} 
catch (PDOException $e) 
{
    flash("<pre>" . var_export($e, true) . "</pre>");
}

$user = get_user_email();

foreach($results as $i)
{
    $date = se($i,"created","",false);
    $order = se($i,"order_id","",false);
}


?>
<div class="container mt-5" id="blk">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded" id="blk1">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Invoice</h1>
                        <h3 class="text-uppercase">Thank you</h3>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed: </span><span class="ml-1"><?php echo($user)?></span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Date: </span><span class="ml-1"><?php echo($date)?></span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Order ID: </span><span class="ml-1"><?php echo($order)?></span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive" id="blk3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($results as $item) : ?>
                                <tr>
                                        <?php $q=(int)se($item,"quantity","",false)?>
                                        <?php $p=(int)se($item,"unit_price","",false)?>
                                        <td><?php se($item,"name")?></td>
                                        <td> <?php se($item,"quantity")?></td>
                                        <td>$<?php se($item,"unit_price")?></td>
                                        <td>$<?php echo($q*$p)?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
require(__DIR__."/../../partials/flash.php");
?>