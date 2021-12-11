<?php
session_start();
require(__DIR__ . "/../../lib/functions.php");
reset_session();

flash("Successfully logged out", "success");
redirect("login.php");
//this is for branching purposes.
//je