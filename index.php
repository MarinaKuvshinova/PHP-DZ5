<?php
include_once ('cookie.php');
include_once ('session.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>15.11</title>
</head>
<body>
<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <h2>Form 1</h2>
        <div class="col-md-12">
            <?php include_once ('form.php');?>
        </div>
        <h2>Form 2</h2>
        <div class="col-md-12">
            <?php include_once ('smartForm.php');?>
        </div>
        <?php include_once ('flash.php');?>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
