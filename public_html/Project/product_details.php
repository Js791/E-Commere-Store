<?php
require(__DIR__."/../../partials/nav.php");
?>
<?php
$results = [];
$product_id = se($_GET, "id", -1, false);
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, unit_price,category,stock, image,visibility FROM Products WHERE id = :pid");
try {
    $stmt->execute([":pid"=>$product_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}


if (isset($_POST["sub"]))
{
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Rating(rating, comments,user_id,product_id) VALUES(:rating, :comments, :user_id, :product_id)");
    try 
    {
        $stmt->execute([":rating"=>$_POST["ratings"],":comments"=>$_POST["comments"],":user_id"=>get_user_id(),":product_id"=>$product_id]);
        flash("Your rating and comments have been noted!","success");
    }
    catch (PDOException $e) 
    {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
$rtn = [];
$stmt = $db->prepare("SELECT AVG(rating) as average FROM Rating as rate");
$stmt->execute();
$rtn=$stmt->fetch(PDO::FETCH_ASSOC);

$base_query = "SELECT rating, comments, username,user_id FROM Rating JOIN Users on Rating.user_id = Users.id WHERE product_id = :pid";
$total_query = "SELECT count(1) as total FROM Rating WHERE product_id = :pid";
$per_page = 10;
$params = [":pid"=>$product_id];
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
$stmt->execute();
$ratings = $stmt->fetchAll();
$user_id = se($_GET,"id",get_user_id(),false);
?>

<div class="row">
        <?php if (se($results, "image", "", false)) : ?>
            <img src="<?php se($results, "image"); ?>" class="col cols-5" alt="a photo showing...">
        <?php endif; ?>
        <div class="col cols-auto">
            <?php se($results, "description"); ?>
            <br></br>
            <h3>Average Rating</h3>
            <?php $ave=se($rtn,"average",0,false);?>
            <?php echo ($ave);?>
        </div>
    </div>
    <form onsubmit=true method="POST">
        <label for="rating"><h2>Rate Product</h2></label>
        <br></br>
        <select name="ratings" id="rate">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br></br>
        <h2>Comments</h2>
        <textarea name="comments" col="200" row="200">
        </textarea>
        <br></br>
        <input class="btn btn-primary" type="submit" value="Submit" name="sub"/>
    </form>
    <?php if (has_role("Admin")) : ?>
        <button onclick="location.href ='admin/edit_items.php?id=<?php se($results, 'id') ;?>'" class="btn btn-primary">Edit</button>
    <?php endif; ?>
    <br></br>
    </div>
    <br>
    <h2>Reviews and Comments</h2>
    <?php foreach ($ratings as $item) : ?>
        <table width="50%">
            <tr>
                <th>User</th>
                <th>Product Rating</th>
                <th>Product Comments</th>
            </tr>
            <tr>
                <td><a href="profile.php?id=<?php se($item, 'user_id');?>"><?php echo(se($item,"username"));?></a></td>
                <td><?php echo(se($item,"rating"));?></td>
                <td><?php echo(se($item,"comments"));?></td>
            </tr>
        </table>
    <br></br>
    <?php endforeach; ?>
    </div>
    <div>
            <?php if (!$ratings || count($ratings) == 0) : ?>
                <p>No ratings to show</p>
            <?php else : ?>
                <?php /* Since I'm just showing data, I'm lazily using my dynamic view example */ ?>
                <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
            <?php endif; ?>
    </div>
</div>
<?php
//fixed all
require(__DIR__."/../../partials/flash.php");
?>

