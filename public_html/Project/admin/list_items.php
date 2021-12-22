<?php
//note we need to go up 1 more directory e
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    redirect(get_url("home.php"));
}

$results = [];
if (isset($_POST["itemName"])) {
    $db = getDB();
    //for branching
    $stmt = $db->prepare("SELECT name,id,visibility,category,unit_price,stock FROM Products WHERE(stock>=0 AND visibility>=0) AND (category LIKE :category OR name LIKE :name) LIMIT 10");
    try {
        $stmt->execute([":name" => "%" . $_POST["itemName"] . "%",":category" => "%" . $_POST["itemName"] . "%"]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}

$rtn = [];
$base_query = "SELECT id, name, description, unit_price,category,stock, image,visibility FROM Products WHERE stock >= 0 AND visibility >= 0";
$total_query = "SELECT count(1) as total FROM Products";
$per_page = 10;
$params = [];
paginate($total_query, $params, $per_page);
$db = getDB();
$stmt = $db->prepare($base_query);
$query = " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null;
try {
    $stmt->execute($params); //dynamically populated params to bind
    $s = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($s) {
        $rtn = $s;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
};
?>
<div class="container-fluid">
    <h1>List Products</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />
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
                <?php if (!$rtn || count($rtn) == 0) : ?>
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