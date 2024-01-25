<?php
// Include this line at the beginning of your script
session_start();

// Check if the 'username' session variable is set
if (isset($_SESSION['username'])) {
    // Access the 'username' session variable
    $username = $_SESSION['username'];
    // echo "Welcome, $username!";
} else {
    // Redirect to the login page or handle the case when the user is not logged in
    // header("Location: login.php");
    // exit();
}

?>

<!DOCTYPE html>
<html lang="en">
    <script>
        window.history.forward();
    </script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div class="nav-bar">
        <ul>
            <li>Home</li>
            <li>FaQ</li>
            <li>About us</li>
            <button class="btn btn-danger" id="logout-drop" >logout</button>
        </ul>
        <!-- <div class="forOut" style="display:block; height: 30px;"> 
            <ul>
                <li style="color: red; ">log out</li>
                <li>log out</li>
            </ul>
        </div> -->
        <div  id="forOut" style="display: none; " >
            <button>dsds</button>
            <button>dsds</button>

        </div>

    </div>
    <div class="sidebar">
        <div class="logo">
        </div>
        <div class="nav-items">
            <ul>
               <li>
                    <a href="" >
                        <i class="fas fa-border-all" class="nav-link" ></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="" >
                        <i class="fa-regular fa-square-plus" class="nav-link" ></i>
                        Add Vacany
                    </a>
                </li>
                <li>
                    <a href="" >
                        <i class="fa-regular fa-square-check" class="nav-link" ></i>
                        Post
                    </a>
                </li>
                <li>
                    <a href="" >
                        <i class="fa-regular fa-paper-plane" class="nav-link" ></i>
                        Application
                    </a>
                </li>
                <li>
                    <a href="" >
                        <i class="fa-solid fa-box-archive" class="nav-link" ></i>
                        Archive
                    </a>
                </li>
                <li>
                    <a href="" >
                        <i class="fa-solid fa-user-check" class="nav-link" ></i>
                        Account
                    </a>
                </li>
              
            </ul>
        </div>
    </div>
</body>
<script>
    $("document").ready(function(){
        $("#logout-drop").click(function(){
            $("#forOut").toggle(500);
        });
    });
    

    function fnlogOut(){
        let data = new FormData();
        data.append("method", "fnlogOut");
        axios.post("api/function.php", data).then(function(res){
            console.log(res.data);
            if(res.data == 1){
                location.href = "http://localhost/sample/index.php";
            }
        })
    }
</script>
</html>