<?php

    $conn = mysqli_connect("localhost","root","","jp-website");

    if(!$conn){
        echo "oops";
    }
    else{
        // echo "connected";
    }
    
        
    if (isset($_POST['method'])) {
        $method = $_POST['method'];

        if(function_exists($method)){
            call_user_func($method);
        }
    
    } else {
        echo "wrong function name bro";
    }

// //login
function fnLogin(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = $conn->prepare("SELECT * FROM account WHERE username =?");
    $sql->bind_param("s",$username);
    $sql->execute();
    $result = $sql->get_result();
    if(mysqli_num_rows($result) == 0){
        echo 2;//username not exist
    }else {
        while ($row = $result->fetch_array()) {
            if ($password == $row['password']) {
                $_SESSION = $row['name'];
                $_SESSION = $row['username'];
                $_SESSION = $row['email'];
                $_SESSION = $row['password'];
                echo 1;
            }else {
                echo 0;
            }
        }
    }
}

function fnlogine(){
    global $conn;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $conn->prepare("SELECT * FROM account WHERE email =?");
    $sql->bind_param("s",$email);
    $sql->execute();
    $result = $sql->get_result();
    if(mysqli_num_rows($result) == 0){
        echo 2; // email not found
    }else{
        while($row = $result->fetch_array()){
            if($password == $row['password']){
                $_SESSION = $row['name'];
                $_SESSION = $row['email'];
                $_SESSION = $row['username'];
                echo 1;
            }else{
                echo 0;
            }
        }
    }
}

?>