<?php
//e
require_once(__DIR__ . "/../../partials/nav.php");
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

<div class="row">
    <div><?php foreach ($results as $item) : ?>
            <?php if (se($item, "image", "", false)) :?></div>
                <img src="<?php se($item, "image"); ?>" class="col-8" alt="a photo showing...">This is a product description</img>
            <?php endif; ?>
    <?php endforeach; ?>
    <?php if (has_role("Admin")) : ?>
        <button onclick="location.href ='admin/edit_items.php?id=<?php se($item, 'id') ;?>'" class="btn btn-primary">Edit</button>
    <?php endif; ?>
    </div>
</div>