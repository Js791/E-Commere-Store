<?php 
require(__DIR__."/../../partials/nav.php");

if(!is_logged_in())
{
    flash("You must be logged in to access this page");
    redirect("login.php");
}
?>