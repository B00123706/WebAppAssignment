<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <script src="../js/bootstrap.min.js"></script>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/background.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" />
    <style>
        .popover {
            width: 100%;
            max-width: 1000px;
        }
    </style>


    <title>Fruit Shop</title>

<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../testproject/public/main.php">Fruit Shop</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <span class="badge"></span>
                        <span class="total_price">&euro; 0.00</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>



