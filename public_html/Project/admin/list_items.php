<?php
//note we need to go up 1 more directory e
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    redirect(get_url("home.php"));
}

$results = [];
$base_query = "SELECT id, name, description, unit_price,category,stock, image,visibility FROM Products";
$total_query = "SELECT count(1) as total FROM Products";
$query = " WHERE 1=1";
$params = [];
$name = se($_GET,"itemName","",false);
if(!empty($name))
{
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
$stock = se($_GET,"stock",-1,false);
if (!empty($stock)) 
{
    $query .= " AND stock <= :stock";
    $params[":stock"] = $stock;
}
$per_page = 5;
paginate($total_query . $query, $params, $per_page);
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
 //set it to null to avoid issues
 
$params = null;
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<div class="container-fluid">
    <h1>List Products</h1>
    <form method="GET" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />
            <br></br>
            <input class="form-control" type="search" name="stock" placeholder="stock filter"/>
            <input class="btn btn-primary" type="submit" value="Search" />
        </div>
    </form>
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <table class="table text-light">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <th><?php se($column); ?></th>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                    <?php endforeach; ?>
                    <td>
                        <a href="edit_items.php?id=<?php se($record, "id"); ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
            <?php endif; ?>
                <?php if (!$results || count($results) == 0) : ?>
                    <p>No results to show</p>
                <?php else : ?>
                <?php /* Since I'm just showing data, I'm lazily using my dynamic view example */ ?>
                <?php include(__DIR__ . "/../../../partials/pagination.php"); ?>
            <?php endif; ?>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/footer.php");
?>