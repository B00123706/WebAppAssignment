<?php

if (isset($_POST['submit'])) {
    require '../data/dbconnect.php';
    require '../common.php';

    $new_user = array(
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "email" => $_POST['email'],
        "username" => $_POST['username'],
        "password" => $_POST['password']
    );

    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)", "users",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);

}
?>




<?php if (isset($_POST['submit']) && $statement) { ?>
    <?php echo header("location:index.php");; ?>
<?php } ?>

<?php include '../template/headermain.php'; ?>

        <title>Sign in</title>

    <h2>Sign up with us here.</h2>


    <form method="post">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname"><br><br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname"><br><br>
        <label for="email">Email Add.</label>
        <input type="text" name="email" id="email"><br><br>
        <label for="username">Username.</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password.</label>
        <input type="text" name="password" id="password"><br><br>
        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
    </form>
    </form>


<?php include '../template/footer.php'; ?>