<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    
    <div class="Nav">
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Portfolio</a></li>
            <li><a href="">Contacts</a></li>
        </ul>
        <div class="Button">
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" name="Facebook"></i></a></li>
                <li><a href="https://github.com/xRaiinBow-Coder" target="_blank"><i class="fa fa-github" name="Github" type="submit"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" name="Instagram" ></i></a></li>
            </ul>
    </div>
    </div>

    
</head>
<body>

    <div class="title">
        <h1 class="Heading">Programmer</h1>
        <p class="About">
        fdshfhsjdkhfjksdjkfhkjsdhfjkhsdjkfhkjsdhkjfhsdkjhfkjsdhkjfhsdkjhk<br>
        fsdhfksdfjksdhfkjsdjkfhkjsdhkjfhskjdhfkjsdhkjfhkjsdfkjsdkjfhkjsdh<br>
        fshdfhjksdjkfhsdkjhfkjsdkjfhsdjkhfjksdhkjfhsdjkhfkjsdhfkjhsdkjhfk<br>
        </p>

        <div class="title2">
            <h1 class="Heading2">Coder</h1>
            <p class="about2">
            fdshfhsjdkhfjksdjkfhkjsdhfjkhsdjkfhkjsdhkjfhsdkjhfkjsdhkjfhsdkjhk<br>
            fsdhfksdfjksdhfkjsdjkfhkjsdhkjfhskjdhfkjsdhkjfhkjsdfkjsdkjfhkjsdh<br>
            fshdfhjksdjkfhsdkjhfkjsdkjfhsdjkhfjksdhkjfhsdjkhfkjsdhfkjhsdkjhfk<br>   
            </p>
        </div>
    </div>
    <div class="me">
        <img src="me.jpg" alt="image" height="350px" width="350px">
        <img src="coder.png" alt="image">
        <img src="PlanetE.png" alt="image" height="750px" width="750px">

    </div>
    <!---
    <div class="Button">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    -->

</body>
</html>
<?php
    if(isset($_GET['Facebook'])) {
        header("location: https://www.facebook.com/");
    }
    
    if(isset($_GET['Github'])) {
        header("location: https://github.com/xRaiinBow-Coder");
    }
    
    if(isset($_GET['Instagram'])) {
        header("location: https://www.instagram.com/");
    }
    
?>