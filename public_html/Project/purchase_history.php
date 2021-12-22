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
    $col = se($_GET, "col", "total_price", false);
    //allowed list
    if (!in_array($col, ["quantity", "total_price", "created"])) 
    {
        $col = "total_price"; //default value, prevent sql injection
    }
    $order = se($_GET, "order", "asc", false);
    //allowed list
    if (!in_array($order, ["asc", "desc"])) 
    {
    $order = "asc"; //default value, prevent sql injection
    }
    $base_query= "SELECT DISTINCT u.email,oi.order_id,oi.quantity,o.created,o.total_price,u.username FROM Orders o JOIN OrderItems oi on oi.order_id = o.id JOIN Products p on p.id = oi.product_id JOIN Users u on u.id = o.user_id";
    $total_query="SELECT count(Distinct u.email,oi.order_id,oi.quantity,o.created,o.total_price) as total FROM Orders o JOIN OrderItems oi on oi.order_id = :o.id JOIN Products p on p.id = :oi.product_id JOIN Users u on u.id = :o.user_id";
    $per_page = 10;
    $params = [];
    $query = " WHERE 1=1";
    paginate($total_query, $params, $per_page);
    $db = getDB();
    $stmt = $db->prepare($base_query);
    $name = se($_GET, "name", "", false);
    if (!empty($name)) {
        $query .= " AND name like :name";
        $params[":name"] = "%$name%";
    }
    $category = se($_GET, "category", "", false);
    if (!empty($category)) {
        $query .= " AND category = :cat";
        $params[":cat"] = $category;
    }
    $date = se($_GET,"Orders.created","",false);
    if (!empty($date))
    {
        $query .= " AND Orders.created >= DATE_SUB(NOW(),INTERVAL 1 $date)";
        $params[":date"] = $date;
    }
    //apply column and order sort
    if (!empty($col) && !empty($order)) {
        $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
    }
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    paginate($total_query, $params, $per_page);
    $stmt = $db->prepare($base_query . $query);
    foreach ($params as $key => $value) 
    {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $stmt->execute();
    $results = $stmt->fetchAll();

    $data = [];
    $stmt = $db->prepare("SELECT distinct category from Products");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $d = [];
    $stmt = $db->prepare("SELECT distinct created from Orders");
    $stmt->execute();
    $d = $stmt->fetchAll(PDO::FETCH_ASSOC);


}

else
{
    $col = se($_GET, "col", "total_price", false);
    //allowed list
    if (!in_array($col, ["quantity", "total_price", "created"])) 
    {
        $col = "total_price"; //default value, prevent sql injection
    }
    $order = se($_GET, "order", "asc", false);
    //allowed list
    if (!in_array($order, ["asc", "desc"])) 
    {
    $order = "asc"; //default value, prevent sql injection
    }
    $name = se($_GET, "name", "", false);
    $base_query= "SELECT Orders.created,total_price,payment_method,address,quantity,OrderItems.unit_price,order_id, name, u.email from Orders JOIN OrderItems on Orders.id = OrderItems.order_id JOIN Products on Products.id = OrderItems.product_id JOIN Users u on u.id = Orders.user_id";
    $total_query="SELECT count(1) as total FROM Orders WHERE Orders.user_id = :user_id";
    $per_page = 10;
    $params = [":user_id"=>get_user_id()];
    $query = " WHERE Orders.user_id = :user_id ";
    paginate($total_query, $params, $per_page);
    $db = getDB();
    $stmt = $db->prepare($base_query);
    if (!empty($name)) {
        $query .= " AND name like :name";
        $params[":name"] = "%$name%";
    }
    $category = se($_GET, "category", "", false);
    if (!empty($category)) {
        $query .= " AND category = :cat";
        $params[":cat"] = $category;
    }
    $date = se($_GET,"Orders.created","",false);
    if (!empty($date))
    {
        $query .= " AND Orders.created >= DATE_SUB(NOW(),INTERVAL 1 $date)";
        $params[":date"] = $date;
    }
    //apply column and order sort
    if (!empty($col) && !empty($order)) {
        $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
    }
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    $stmt = $db->prepare($base_query . $query);
    foreach ($params as $key => $value) 
    {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $stmt->execute();
    $results = $stmt->fetchAll();

    $data = [];
    $stmt = $db->prepare("SELECT distinct category from Products");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $d = [];
    $stmt = $db->prepare("SELECT distinct created from Orders");
    $stmt->execute();
    $d = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                            <form onsubmit=true method="GET">
                                <table class="table">
                                    <thead>
                                        <input class="btn btn-primary" type="submit" value="Sort" name="sort"/>&nbsp;
                                        <select name="col" id="sort">
                                            <option value="created">sort by date</option>
                                            <option value="quantity">sort by total items</option>
                                            <option value="order_id">sort by order ID</option>
                                            <option value="total_price"> sort by total price</option>
                                        </select>
                                        <br></br>
                                        <select class="form-control" name="order" value="<?php se($order)?>">
                                            <option value="asc">Low to high</option>
                                            <option value="desc">High to low</option>
                                        </select>
                                        <br></br>
                                        <input class="btn btn-primary" type="submit" value="Filter" name="filter"/>&nbsp;
                                        <select name="category">
                                            <?php foreach($data as $item) : ?>
                                                <?php $v =  trim(array_values($item)[0]); ?>
                                                <option value="<?php se($v, "category");?>"><?php se(str_replace("_", " ", $v)); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        &nbsp;<input class="btn btn-primary" type="submit" value="Filter" name="filter"/>&nbsp;
                                        <label for="created">Search by Purchase Date:</label>  
                                            <select name="created" id="created">
                                                <option value="select">select</option>
                                                <option value="day">Past Day</option>
                                                <option value="week">Past Week</option>
                                                <option value="month">Past Month</option>
                                            </select>
                                        <script>
                                            document.forms[0].order.value = "<?php se($order); ?>";
                                        </script>
                                        <br></br>
                                        <tr>
                                            <th>User</th>
                                            <th>Order ID</th>
                                            <th>Total Number of Items</th>
                                            <th>Date of Purchase</th>
                                            <th>Total Spent</th>
                                        </tr>
                                    </thead>
                                    <?php $counter = 0;?>
                                    <?php foreach($results as $item) : ?>
                                        <tr>
                                            <td><?php se($item,"username")?></td>
                                            <td> <?php se($item,"order_id")?></td>
                                            <td><?php se($item,"quantity")?></td>
                                            <td><?php se($item,"created");?></td>
                                            <td>$<?php se($item,"total_price");?></td>
                                            <?php $money = se($item,"total_price","",false);?>
                                            <?php $counter+=$money;?>
                                        </tr>
                                    <?php endforeach ; ?>
                                    <h2 class ="text-uppercase">Overall Spent $<?php echo($counter);?></h2>
                                    <tbody>
                                    <?php if (!$results || count($results) == 0) : ?>
                                         <p>No purchase history to show</p>
                                     <?php else : ?>
                                     <?php /* Since I'm just showing data, I'm lazily using my dynamic view example */ ?>
                                        <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
                                    <?php endif; ?>
                                 </tbody>
                            </form>
                                </table>
                        <?php else :?>
                            <form onsubmit=true method="GET">
                                <table class="table">
                                    <thead>
                                        <input class="btn btn-primary" type="submit" value="Sort" name="sort"/>&nbsp;
                                        <select name="col" id="sort">
                                            <option value="created">sort by date</option>
                                            <option value="quantity">sort by total items</option>
                                            <option value="order_id">sort by order ID</option>
                                            <option value="total_price"> sort by total price</option>
                                        </select>
                                        <select class="form-control" name="order" value="<?php se($order)?>">
                                            <option value="asc">Low to high</option>
                                            <option value="desc">High to low</option>
                                        </select>
                                        <br></br>
                                        <input class="btn btn-primary" type="submit" value="Filter" name="filter"/>&nbsp;
                                        <select name="category">
                                            <?php foreach($data as $item) : ?>
                                                <?php $v =  trim(array_values($item)[0]); ?>
                                                <option value="<?php se($v, "category");?>"><?php se(str_replace("_", " ", $v)); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        &nbsp;<input class="btn btn-primary" type="submit" value="Filter" name="filter"/>&nbsp;
                                        <select name="Orders.created">
                                            <?php foreach($d as $item) : ?>
                                                <?php $v =  trim(array_values($item)[0]); ?>
                                                <option value="<?php se($v, "created");?>"><?php se(str_replace("_", " ", $v)); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <script>
                                        document.forms[0].order.value = "<?php se($order); ?>";
                                    </script>
                                    <br></br>
                                    <tr>
                                        <th>User</th>
                                        <th>Order ID</th>
                                        <th>Total Number of Items</th>
                                        <th>Date of Order</th>
                                        <th>Total Spent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($results as $item) : ?>
                                        <tr>
                                            <?php $q=(int)se($item,"quantity","",false);?>
                                            <?php $p=(int)se($item,"unit_price","",false);?>
                                            <td><?php se($item,"email")?></td>
                                            <td> <?php se($item,"order_id")?></td>
                                            <td><?php se($item,"quantity")?></td>
                                            <td><?php se($item,"created");?></td>
                                            <td>$<?php echo($q*$p)?></td>
                                        </tr>
                                    <?php endforeach ; ?>
                            </table>
                            <?php if (!$results || count($results) == 0) : ?>
                                <p>No matches to show</p>
                            <?php else : ?>
                                <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
                            <?php endif; ?>
                        </form>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//fixed all
require(__DIR__."/../../partials/flash.php");
?>