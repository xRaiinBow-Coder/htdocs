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
            <li><a href="Main.php">Home</a></li>
            <li><a href="About.php">About</a></li>
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
<body class="A">

    <div class="title">
        <h1 class="Heading">Programmer</h1>
        <p class="About">
        fdshfhsjdkhfjksdjkfhkjsdhfjkhsdjkfhkjsdhkjfhsdkjhfkjsdhkjfhsdkjhk<br>
        fsdhfksdfjksdhfkjsdjkfhkjsdhkjfhskjdhfkjsdhkjfhkjsdfkjsdkjfhkjsdh<br>
        fshdfhjksdjkfhsdkjhfkjsdkjfhsdjkhfjksdhkjfhsdjkhfkjsdhfkjhsdkjhfk<br>
        </p>

        <div class="title2">
            <h1 class="Heading2">Performer</h1>
            <p class="about2">
            fdshfhsjdkhfjksdjkfhkjsdhfjkhsdjkfhkjsdhkjfhsdkjhfkjsdhkjfhsdkjhk<br>
            fsdhfksdfjksdhfkjsdjkfhkjsdhkjfhskjdhfkjsdhkjfhkjsdfkjsdkjfhkjsdh<br>
            fshdfhjksdjkfhsdkjhfkjsdkjfhsdjkhfjksdhkjfhsdjkhfkjsdhfkjhsdkjhfk<br>   
            </p>
        </div>
    </div>
    <div class="me">
        <img src="pictures/me.jpg" id="rotate" alt="image" height="350px" width="350px">
        <img src="pictures/coder.png" alt="image">
        <img src="pictures/PlanetE.png" alt="image" height="750px" width="750px">

    </div>

    <div class="Change">
        <button id="Next">Forward</button>
        <button id="Back">Back</button>
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

    <script src="main.js"></script>

    <div class="Footer1"></div>

</body>
</html>
<?php
    if(isset($_GET['Page'])) {
        switch ($_GET['Page']) {
            case 'About':
                header("Location: About.php");
                exit();
            case 'Portfolio':
                header("Location: Portfolio.php");
                exit();
            case 'Contacts':
                header("Location: Contacts.php");
            default:
                header("Location: Main.php");
                exit();
        }
    } else {
        header("Loaction: Main.php");
    } 
?>