<?php
session_start();
session_unset();
session_destroy();
session_start();
//don't require flash.php, this will cause messages
//to not appear on login and be hidden by the logout transition
require(__DIR__ . "/../../lib/functions.php");
flash("you have been successfully logged out");
header("Location: login.php");
//require(__DIR__."/../../partials/flash.php");
