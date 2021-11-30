<?php
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
                        <img src="<?php se($item, "image"); ?>" class="card-img-top" alt="...">
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                    </div>
                    <div class="card-footer">
                        Cost: $ <?php se($item, "unit_price"); ?>
                        <br>
                        <button onclick=" purchase('<?php se($item, 'id'); ?>')" class="btn btn-primary"> Purchase</button>
                    </div>
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
        $sort = "asc";
    }
    $query ="SELECT name,visibility,category,unit_price,stock FROM Products WHERE(stock>0 AND visibility>0) AND (category LIKE :category OR name LIKE :name) ORDER BY unit_price $sort LIMIT 10";
    $stmt = $db->prepare($query);
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
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>