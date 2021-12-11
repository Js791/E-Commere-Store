<?php
//this is for branch purposes. e
require(__DIR__."/../../partials/nav.php");
?>

<h1>Home</h1>

<?php
if(is_logged_in(true))
{
 echo "Welcome home, " . get_username();
 echo "<pre>" . var_export($_SESSION,true) . "</pre>";
}
//l

?>

<?php
require(__DIR__."/../../partials/flash.php");
?>
