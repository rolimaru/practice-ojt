<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createaccount.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<body style="background-image: url('pics/11.jpg'); background-size: cover;">

    <div class="container">
        <div class="row " style="">
            <div class="col-md-3 bg-dark text-light text-center" style=" margin-top : 2rem; padding: 2rem;">
            <blockquote class="blockqoute mt-5"> <h2>
                "To strive for professionalism, we often disconnect ourselves from the pressing issues in our society, losing sight of the struggles faced by the people we serve."</h2>
            </blockquote>
            </div>
            <div class="col-md-5 bg-light shadow-lg " style="border-top-right-radius: 5%; border-bottom-right-radius: 5%;margin-top: 2rem; padding: 4rem;">
                <form onsubmit="event.preventDefault(); createAccount(event);">
                        <label for="fname" style="font-size: 20px;">Name:</label>
                        <input type="text" name="name" placeholder="Name" class="form-control shadow-sm m-2">

                        <label for="lname" style="font-size: 20px;">Username</label>
                        <input type="text" name="username" placeholder="Username.." class="form-control shadow-sm m-2">

                        <label for="email" style="font-size: 20px;">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control shadow-sm m-2">

                        <label for="password" style="font-size: 20px;">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control shadow-sm m-2">
                        <!-- <label for="cpassword" style="font-size: 20px;">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control shadow-sm m-2"> -->

                        <input type="checkbox" name="" id="" class="shadow-sm " > <span style="padding-left: 5px;">Remember me.</span>
                        <button class="btn btn-info form-control mt-3 mb-3 font-weight-bold">Create account</button>
                        <span class="text-muted mt-5">Already have an account? <a href="index.php" class="" style="font-size: 18px; text-decoration: none;">Sign in</a></span>
                        <hr class="text-muted">
                        <span class="text-muted mt-5">
                            By clicking Sign Up you agreed to the <a href="terms.php" class="" style="font-size: 18px; text-decoration: none;">Terms </a> & <a href="terms.php" class="" style="font-size: 18px; text-decoration: none;">Condition.</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function createAccount(event){
        let data = new FormData(event.target);
        data.append("method", "createAccount");
        axios.post("api/function.php", data).then(function(res){
            // console.log("success");
            location.href="createaccount.php";
        })
    }
</script>
    
</body>
</html>