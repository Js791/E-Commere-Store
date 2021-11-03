<?php
require(__DIR__ . "/../../partials/nav.php");
reset_session();
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="text" name="email"/>
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username"  />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password"/>
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" id ="cd" name="confirm"/>
    </div>
    <input type="submit" value="Register"/>
</form>
<div id ="E"></div>
<script>
    function validate(form) 
    {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
         let email = document.getElementsByName("email")[0].value;
         const error = document.getElementById("E");
         let username = document.getElementsByName("username")[0].value;
         let password = document.getElementById("pw").value;
         let confirm = document.getElementById("cd").value;
         let errors = [];

            if(password.length < 8 )
            {
                errors.push("password too short");
            }

            if((password !== confirm) || (password.length != confirm.length))
            {
                errors.push("Passwords dont match");
            }

            if(email == '' || email == null)
            {
                errors.push("Email must not be empty");
            }

            if(!(email.includes("@")))
            {
                errors.push("Not a valid email");
            }

            if(!(/^([a-zA-Z\d\.-]+)@([a-z\d]+)\.([a-z]{2,8}(\.[a-z]{2,8})?)$/.test(email)))
            {   
                    errors.push("Email is not in the correct form");
            }

            if(!(/^[a-z0-9_-]{3,30}$/i.test(username)))
            {
                errors.push("Not a valid username");
            }
            
            if(errors.length != 0)
            {
                error.innerText = errors.join(', ');
                return false;
            }

            return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se($_POST, "confirm", "", false);
    $username = se($_POST, "username", "", false);
    //TODO 3


    //$errors = [];
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty");
        $hasError = true;
    }
    //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = sanitize_email($email);
    //validate
    //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (!is_valid_email($email)) {
        flash("Invalid email");
        $hasError = true;
    }
    if (!preg_match('/^[a-z0-9_-]{3,30}$/i', $username)) {
        flash("Username must only be alphanumeric and can only contain - or _");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password too short");
        $hasError = true;
    }
    if (strlen($password) > 0 && $password !== $confirm) {
        flash("Passwords must match");
        $hasError = true;
    }
    if ($hasError) {
        //flash("<pre>" . var_export($errors, true) . "</pre>");
    } else {
        //flash("Welcome, $email"); //will show on home.php
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("You've registered, yay...");
        } catch (Exception $e) {
            /*flash("There was a problem registering");
            flash("<pre>" . var_export($e, true) . "</pre>");*/
            users_check_duplicate($e->errorInfo);
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>