<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>SAP</title>
</head>
<body>
<div class="wrapper">
    <img onmouseover="ChangeOver(this)" onmouseout="ChangeOut(this)" class="myImg" src="img1.jpg" width="400" height="400">
</div>
<script>
    function ChangeOver(img) {
        img.src= "img2.jpg";
    }

    function ChangeOut(img) {
        img.src= "img1.jpg";
    }
</script>
</body>
</html>
