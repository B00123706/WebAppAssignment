<?php
require_once('../data/dbconnect.php');
?>

<?php require_once '../template/header.php';
?>
</head>

<body>

<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername">Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required
               autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>
</div>

<?php

/* Check if login form has been submitted */
/* isset — Determine if a variable is declared and is different than NULL*/
if (isset($_POST['Submit'])) {
    $sql = "SELECT password from users where username = :USER";
    $statement = $connection->prepare($sql);;
    $statement->bindParam(':USER', $_POST['Username'], PDO::PARAM_STR);
    $statement->execute();
    $PASS = $statement->fetchColumn();
    if ($_POST['Password'] == $PASS) {
        echo '<div >You have logged in</div>';
        $_SESSION['Username'] = $_POST['Username'];
        header("location:main.php");
    } else {
        echo '<div>Unable to login</div>';

    }
}
?>



</body>
</html>
