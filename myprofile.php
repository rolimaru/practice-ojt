
<?php
    include "db_conn.php";

    $sql = "SELECT * FROM account WHERE id=8";
    $result = mysqli_query($conn, $sql);
    $r = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div class="main" id="main">
        <div class="nav-bar">
            <img class="logo" src="pics/user.jpg" alt="ss">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Hire me.</a></li>
            </ul>
        </div>
        <div class="details">
            <h2>Hello I am, <span><?php echo $r['name']; ?></span></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, molestias.</p>
            <p>Lorem ipsum dolor sit amet consectetur,.</p>
            <button id="button">Download resume</button>
        </div>
        <div class="images">
            <img src="pics/bg.png" class="bg">
            <img src="pics/me.png" class="me">
        </div>

    </div>
<script>
    $("document").ready(function(){
        $("button").click(function(){
            $("#main").toggle(2000);
        });

    })
</script>
</body>
</html>