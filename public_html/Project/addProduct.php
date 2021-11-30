<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to access this page", "danger");
    die(header("Location: " . $BASE_PATH));
}
?>
<?php
$form = [
    ["id" => "name", "name" => "name", "type" => "text"],
    ["id" => "description", "name" => "description", "type" => "textarea"],
    ["id" => "category", "name" => "category", "type" => "text"],
    ["id" => "stock", "name" => "stock", "type" => "number",],
    ["id" => "unit_price", "name" => "unit_price", "type" => "number"],
    ["id" => "visibility","name" => "visibility","type" => "number"]
];
?>
<?php

//TODO handle submit
//another way to check if a form was submitted, sorta (this checks if a POST was received, not necessarily this form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = se($_POST, "name", "", false);
    $description = se($_POST, "description", "", false);
    $category = se($_POST, "category", "", false);
    $stock = (int)se($_POST, "stock", 0, false);
    $unit_price = (int)se($_POST, "unit_price", 99999, false);
    $visible = (int)se($_POST, "visibility",1,false);
    if(empty($name))
    {
        flash("The name of the product cannot be empty");
    }

    if(empty($description))
    {
        flash("product description cannot be empty");
    }

    if(empty($category))
    {
        flash("the category cannot be empty");
    }

    if($stock < 0)
    {
        flash("stock cannot be negative value");
    }

    if(empty($stock))
    {
        flash("must input a stock");
    }

    if(empty($category))
    {
        flash("category cannot be empty");
    }

    if(empty($unit_price))
    {
        flash("unit price must be set");
    }

    if($unit_price < 0)
    {
        flash("unit price cannot be negative");
    }

    if(empty($visible)) //error fixed
    {
        flash("visibility must be set");
    }

    else {
        //TODO other validation (i.e., stock/cost limits)
        //TODO add image in the future
        //Note: 07/12/2021, added iname field for internal name. There's no need to set this because of how the default value works
        //the default value uses the name, lowercases it, and replaces spaces with underscore. The goal is to make it better to use in code
        $query = "INSERT INTO Products(name, description,category,stock,unit_price,visibility) VALUES (:name, :desc,:category,:stock, :unit_price,:visibility)";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":name" => $name, ":desc" => $description,":category" => $category, ":stock" => $stock, ":unit_price" => $unit_price,":visibility" => $visible]);
            flash("Created product \"$name\" with id " . $db->lastInsertId());
            //you can force reload the page to prevent duplicate form submissions
            //resolve headers already been sent (due to the balance include in nav.php)
            //https://stackoverflow.com/a/8028987
            if (headers_sent()) {
                echo '<meta http-equiv="refresh" content="0;url=#" />';
                die();
            } else {
                die(header("Refresh:0"));
            }
            
        } catch (PDOException $e) {
            if ($e->errorInfo[0] === '23000') {
                flash("A product with the name \"$name\" already exists, please try another", "warning");
            } else {
                flash("An unexpected error occurred: " . var_export($e->errorInfo, true), "warning");
            }
        }
    }
}

?>
<div class="container-fluid">
    <h3>Add Product</h3>
    <form onsubmit="return validate(this)" method="POST">
        <div id ="E"></div>
        <?php foreach ($form as $ele) : ?>
            <div class="mb-3">
                <label class="form-label" for="<?php se($ele, "id"); ?>"><?php se($ele, "name", ""); ?></label>
                <?php if ($ele["type"] === "textarea") : ?>
                    <?php  /*Note for required: conditionally applies required attribute, note this is done via echo*/ ?>
                    <textarea class="form-control" name="<?php se($ele, "name"); ?>" id="<?php se($ele, "id"); ?>" <?php echo (se($ele, "required", false, false) ? 'required' : ''); ?>></textarea>
                <?php elseif ($ele["type"] === "select") : ?>
                    <?php /* TODO pending example, likely may extract this form into a reusable component*/ ?>
                <?php else : ?>
                    <?php  /*Note for required: conditionally applies required attribute, note this is done via echo*/ ?>
                    <input class="form-control" name="<?php se($ele, "name"); ?>" id="<?php se($ele, "id"); ?>" <?php echo (se($ele, "required", false, false) ? 'required' : ''); ?> type="<?php se($ele, "type"); ?>" />
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <input class="btn btn-primary" type="submit" value="Create" />
    
    </form>
</div>
<script>
    function validate(form)
    {
         let name = form.name.value;
         const error = document.getElementById("E");
         let description = form.description.value;
         let category = form.category.value;
         let stock = form.stock.value;
         let unit_price = form.unit_price.value;
         let visibility = form.visibility.value;
         let errors = [];

         if(!name)
         {
             errors.push("name of product must be set");
         }

         if(!description)
         {
             errors.push("description must be set");
         }

         if(!category)
         {
             errors.push("category must be set");
         }

         if(stock < 0)
         {
             errors.push("stock cannot be negative value");
         }

         if(unit_price < 0)
         {
             errors.push("unit price cannot be negative value");
         }

         if(!visibility)
         {
             errors.push("visibility must be set");
         }

         if(errors.length != 0)
         {
            error.innerText = errors.join(' , ');
            return false;
         }

         return true;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>