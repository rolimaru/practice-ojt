<?php

    include "../db_conn.php";
    session_start();
        
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
            if(password_verify($password, $row['password'])){
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                echo 1;
            }else{
                echo 0;
            }
        }
    }
}
/// What the try to initalize more...........................
function createAccount(){
    global $conn;
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO `account`( `name`, `email`, `password`, `username`) VALUES ('$name', '$username','$hashedpassword','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

}
function fnpost(){
    global $conn;
    $job_title = $_POST['job_title'];
    $salary = $_POST['salary'];
    $rate = $_POST['rate'];
    $address = $_POST['address'];
    $personel = $_POST['personel'];
    $company = $_POST['company'];
    $qualification = $_POST['qualification'];
    $full_description = $_POST['full_description'];

    $sql ="INSERT INTO `posts`(`job_title`, `salary`, `rate`, `address`, `personel`, `company`, `qualification`, `full_description`) VALUES ('$job_title', '$salary', '$rate', '$address', '$personel', '$company', '$qualification', '$full_description')";

    $result = $conn->query($sql);
}
function fnlogOut(){
    session_destroy();
    session_unset();
     
    echo 1;
    exit();
}

?>