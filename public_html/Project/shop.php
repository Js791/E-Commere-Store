<?php
//for branching e
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, unit_price,category,stock, image,visibility FROM Products WHERE stock > 0 AND visibility > 0 LIMIT 10");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

$rtn = [];
$base_query = "SELECT id, name, description, unit_price,category,stock, image,visibility FROM Products";
$total_query = "SELECT count(1) as total FROM Products";
$per_page = 1;
$params = [];
$query=" Where 1=1";
paginate($total_query, $params, $per_page);
$db = getDB();
$stmt = $db->prepare($base_query);
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$stmt->execute();
$rtn = $stmt->fetchAll();




?>
<script>
    function purchase(item) {
        console.log("TODO purchase item", item);
        //TODO create JS helper to update all show-balance elements
    }
</script>

<div class="container-fluid">
    <h1>Shop</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-dark">
                    <div class="card-header">
                        Placeholder
                    </div>
                    <?php if (se($item, "image", "", false)) : ?>
                        <img src="<?php se($item, "image"); ?>" alt="..." onclick="location.href='product_details.php?id=<?php se($item, 'id') ;?>'" title="Click for more details!" class="cart-image"></img>
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                    </div>
                    <div class="card-footer">
                        Cost: $ <?php se($item, "unit_price"); ?>
                        <br></br>
                        <button onclick="add_item('<?php se($item,'id');?>')" class="btn btn-primary">Add to Cart</button>
                    </div>
                    <?php if (has_role("Admin")) : ?>
                        <button onclick="location.href ='admin/edit_items.php?id=<?php se($item, 'id') ;?>'" class="btn btn-primary">Edit</button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
$search = ""; //init to empty for prefill
$results = [];
if (isset($_POST["search"]) && !empty($_POST["search"])) {
    $search = se($_POST, "search", "", false);
    $db = getDB();
    //it's usually a good idea to apply a limit to query where there's no real know maximum, later on you'd paginate these excessive results
    $sort = se($_GET,"sort","asc",false);
    if(!in_array($sort,["asc","desc"]))
    {
        $sort = "desc";//for branching
    }
    $query ="SELECT name,category,unit_price,stock FROM Products WHERE(stock>0 AND visibility>0) AND (category LIKE :category OR name LIKE :name) ORDER BY unit_price $sort LIMIT 10";
    $stmt = $db->prepare($query);//changed again
    try {
        //we need to pass the wildcards here with the value, otherwise prepare will ignore them
        $stmt->execute([":name" => "%$search%",":category" => "%$search%"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        flash("Unexpected error: " . var_export($e->errorInfo, true), "warning");
    }
}
?>
<div class="container-fluid">
    <h3>Search Products</h3>
    <form method="post">
        <div><label class="form-label" for="search">Search by Name/Category</label>
            <input class="form-control" type="text" name="search" id="search" value="<?php se($search); ?>" />
        </div>
        <input class="btn btn-primary" type="submit" value="Search" />
    </form>
    <div>
        <?php if (!$results || count($results) == 0) : ?>
            <p>No results to show</p>
        <?php else : ?>
            <?php /* Since I'm just showing data, I'm lazily using my dynamic view example */ ?>
            <?php include(__DIR__ . "/../../partials/dynamic_list.php"); ?>
        <?php endif; ?>
    </div>
    <br></br>
    <div>
            <?php if (!$rtn || count($rtn) == 0) : ?>
                <p>No pages to show</p>
            <?php else : ?>
                <?php /* Since I'm just showing data, I'm lazily using my dynamic view example */ ?>
                <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
            <?php endif; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>