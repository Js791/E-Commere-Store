<?php
session_start();
session_unset();
session_destroy();
session_start();
require(__DIR__ . "/../../lib/functions.php");
flash("you have been successfully logged out");
header("Location: login.php");
//require(__DIR__."/../../partials/flash.php");
