<?php
//le
//This is for anothe pull request
require(__DIR__ . "/../../partials/nav.php");
$username = se($_POST,"email","",false);
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Username/Email</label>
        <input type="text" name="email" required value=<?php se($username);?>>
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" />
    </div>
    <input type="submit" value="Login" />
</form>
<div id="error"></div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
         let email = document.getElementsByName("email")[0].value;
         const error = document.getElementById("error");
         const password = document.getElementsByName("password")[0].value;
         let errors = [];

            if (password == '' || password == null) //client side validation
            {
                errors.push("password must inputted");
            }
            if(password.length < 8 )
            {
                errors.push("password to short");
            }
            if(email == '' || email == null) 
            {
                errors.push("Email must not be empty");
            }


            if(email.includes("@"))
            {
                 if(/^([a-zA-Z\d\.-]+)@([a-z\d]+)\.([a-z]{2,8}(\.[a-z]{2,8})?)$/.test(email))
                {   
                    return true;
                }
                else
                {
                    errors.push("Email is not in the correct form");
                    
                }
            }

            else
            {
                if(/^[a-z0-9_-]{3,30}$/i.test(email))
                {
                    return true;    
                }

                else
                {
                    errors.push("Not a valid username");
                }
            }

            if(errors.length != 0)
            {
                error.innerText = errors.join(', ');
                return false;
            }
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"])) 
{
    //get the email key from $_POST, default to "" if not set, and return the value
    $email = se($_POST, "email", "", false);
    //same as above but for password
    $password = se($_POST, "password", "", false);
    //TODO 3: validate/use
    //$errors = [];
    $hasErrors = false;
    if (empty($email)) {
        //array_push($errors, "Email must be set");
        flash("Username or email must be set", "warning");
        $hasErrors = true;
    }
    //sanitize
    //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (str_contains($email, "@")) {
        $email = sanitize_email($email);
        //validate
        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!is_valid_email($email)) {
            //array_push($errors, "Invalid email address");
            flash("Invalid email address", "warning");

            $hasErrors = true;
        }
    } else {
        if (!preg_match('/^[a-z0-9_-]{3,30}$/i', $email)) {
            flash("Username must only be alphanumeric and can only contain - or _");
            $hasErrors = true;
        }
    }
    if (empty($password)) {
        //array_push($errors, "Password must be set");
        flash("Password must be set");
        $hasErrors = true;
    }
    if (strlen($password) < 8) {
        //array_push($errors, "Password must be 8 or more characters");
        flash("Password must be at least 8 characters", "warning");
        $hasErrors = true;
    }
    if ($hasErrors) {
        //Nothing to output here, flash will do it
        //can likely flip the if condition
        //echo "<pre>" . var_export($errors, true) . "</pre>";
    } 
    else 
    {
        //TODO 4
        $db = getDB();
        $stmt = $db->prepare("SELECT id, username, email, password from Users where email = :email or username = :email");
        try {
            $r = $stmt->execute([":email" => $email]);
            if ($r) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    $hash = $user["password"];
                    unset($user["password"]);
                    if (password_verify($password, $hash)) {
                        ///echo "Weclome $email";
                        $_SESSION["user"] = $user;
                        //lookup potential roles
                        $stmt = $db->prepare("SELECT Roles.name FROM Roles 
                        JOIN UserRoles on Roles.id = UserRoles.role_id 
                        where UserRoles.user_id = :user_id and Roles.is_active = 1 and UserRoles.is_active = 1");
                        $stmt->execute([":user_id" => $user["id"]]);
                        $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all since we'll want multiple
                        //save roles or empty array
                        if ($roles) {
                            $_SESSION["user"]["roles"] = $roles; //at least 1 role
                        } else {
                            $_SESSION["user"]["roles"] = []; //no roles
                        }
                        redirect("home.php");
                    } else {
                        //echo "Invalid password";
                        flash("Invalid password", "danger");
                    }
                } else {
                    //echo "Invalid email";
                    flash("Email not found", "danger");
                }
            }
        } catch (Exception $e) {
            //echo "<pre>" . var_export($e, true) . "</pre>";
            flash(var_export($e, true));
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>