<?php require_once '../template/header.php'; ?>

<title>Home page</title>
</head>


<body>

<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Home page</h3>
    </div>

    <div class="mainarea">
        <h1>Welcome to Fruit Shop Wholesale</h1>
        <p class="lead">Please login in if you have a Fruit Shop members card.</p>
        <form action="login.php" method="post" name="Logout_Form" class="form-signin">

            <button name="login" value="login" class="button" type="login">Log In</button>

        </form><br>
        <p class="lead">Or sign up with us for the best priced produce.</p>
        <form action="create.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="SignUp" class="button" type="submit">Sign Up</button>
        </form>
    </div>

    <img src="../images/stalls.jpg" style="height: auto; width: auto" class="img-thumbnail">
    <div class="row marketing">

        <h4>Sustainability</h4>
        <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some
            content goes here. Some content goes here. Some content goes here. Some content goes here. Some content
            goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes
            here. Some content goes here. Some content goes here. Some content goes here. Some content goes here.
            Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>
        <img src="../images/vineyard.jpg" style="height: auto; width: auto" class="img-thumbnail">
    </div>
    <h4>Fairness</h4>
    <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some
        content goes here. Some content goes here. Some content goes here. Some content goes here. Some content
        goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes
        here. Some content goes here. Some content goes here. Some content goes here. Some content goes here.
        Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>
    <img src="../images/fairness.jpg" style="height: auto; width: auto" class="img-thumbnail">
</div>
<h4>Quality</h4>
<p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some
    content goes here. Some content goes here. Some content goes here. Some content goes here. Some content
    goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes
    here. Some content goes here. Some content goes here. Some content goes here. Some content goes here.
    Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>
<img src="../images/quality.jpg" style="height: auto; width: auto" class="img-thumbnail">

</div>


        <?php require_once '../template/footer.php'; ?>
