<?php 
//ee
require(__DIR__."/../../partials/nav.php"); //finished
if(!is_logged_in())
{
    flash("You must be logged in to access this page");
    redirect("Location: login.php");
}

$db = getDB();
$results = [];
if(has_role("Admin"))
{
    $stmt = $db->prepare("SELECT Orders.created,total_price,payment_method,address,quantity,OrderItems.unit_price,order_id, name, u.email from Orders JOIN OrderItems on Orders.id = OrderItems.order_id JOIN Products on Products.id = OrderItems.product_id JOIN Users u on u.id = Orders.user_id ORDER BY Orders.id, OrderItems.id LIMIT 10");
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($r)
    {
        $results = $r;
    }
}

else
{
    $stmt = $db->prepare("SELECT Orders.created,total_price,payment_method,address,quantity,OrderItems.unit_price,order_id, name, u.email from Orders JOIN OrderItems on Orders.id = OrderItems.order_id JOIN Products on Products.id = OrderItems.product_id JOIN Users u on u.id = Orders.user_id WHERE Orders.user_id = :user_id ORDER BY Orders.id, OrderItems.id LIMIT 10");
    $stmt->execute([":user_id"=>get_user_id()]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($r)
    {
        $results = $r;
    }
}
?>
<div class="container mt-5" id="blk4">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded" id="blk2">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Purchase History</h1>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive" id="blk3">
                        <?php if(has_role("Admin")): ?>
                            <table class="table">
                                <thead>
                                  <tr>
                                        <th>User</th>
                                        <th>Order ID</th>
                                        <th>Total Number of Items</th>
                                        <th>Total Spent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $item) : ?>
                                    <tr>
                                        <?php $q=(int)se($item,"quantity","",false)?>
                                        <?php $p=(int)se($item,"unit_price","",false)?>
                                        <td><?php se($item,"email")?></td>
                                        <td> <?php se($item,"order_id")?></td>
                                        <td><?php se($item,"quantity")?></td>
                                        <td>$<?php echo($q*$p)?></td>
                                    </tr>
                                    <?php endforeach;?>
                                 </tbody>
                            </table>
                        <?php else :?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Order ID</th>
                                        <th>Total Number of Items</th>
                                        <th>Total Spent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($results as $item) : ?>
                                    <tr>
                                        <?php $q=(int)se($item,"quantity","",false)?>
                                        <?php $p=(int)se($item,"unit_price","",false)?>
                                        <td><?php se($item,"email")?></td>
                                        <td> <?php se($item,"order_id")?></td>
                                        <td><?php se($item,"quantity")?></td>
                                        <td>$<?php echo($q*$p)?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require(__DIR__."/../../partials/flash.php");
?>
