<?php 
    session_start();
    
    $usernameErr = $passwordErr = $loginErr = "";
    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = trim($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = trim($_POST["password"]);
        }

        if(empty($usernameErr) && empty($passwordErr)) {
            require_once '../db_connect.php';
            //Prepare SQL query
            $sql = "SELECT id, fullname, username, password
                    FROM users
                    where username='$username'";
    
            //Send SQL query to MYSQL
            $result = mysqli_query($conn, $sql);

            // //Check if MySQL returns any result
            if (mysqli_num_rows($result) > 0) {
                //Expect only one row
                $row = mysqli_fetch_assoc($result);
                $username_db = $row["username"];
                $password_db = $row["password"];
                $id = $row["id"];
                $fullname = $row["fullname"];

                if(password_verify($password, $password_db)) {
                    //login success
                    $loginErr = 'login success!';
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;
                    $_SESSION["fullname"] = $fullname;
                    //TODO: role session variable

                    header("location: home.php");
                }
                else {
                    //Wrong password - Display generic error message
                    $loginErr = "Wrong username or password.";
                }
            }
            else {
                //Wrong username - Display generic error message
                $loginErr = "Wrong username or password.";
            }
    
            //Close db connection
            mysqli_close($conn);
        }
    }
?>

<?php require_once './header.php'; ?>

<h1>Sign In</h1>

<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  Username: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>

  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
  <input type="submit" name="submit" value="Sign In"> 
  <span class="error"><?php echo $loginErr;?></span>
</form>

<?php require_once './footer.php'; ?>