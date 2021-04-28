<?php require_once '../template/headermain.php'; ?>
    <title>Fruit Shop</title>


    <body>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Welcome back to the best value fruit wholesalers in Ireland </h3>
        <img src="../images/stalls.jpg" style="height: auto; width: auto" class="img-thumbnail">
    </div>

    <div class="mainarea">
        <h1><?php echo $_SESSION['Username']; ?><br> Great to see you.</h1>

        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit" >Log out</button>
        </form>
    </div>

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