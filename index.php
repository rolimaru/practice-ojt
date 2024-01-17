<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-image: url('pics/11.jpg'); background-size: cover; ">

    <div class="nav-bar">
        
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 mt-5">
                <div>
                    <img src="pics/jobposting.png" alt="No Img found;" class="back-img"> </img>
                    <h2 class="front-header text-info ">
                        "Elevate your career with us and be part of a pioneering team shaping the future"
                    </h2> 
                    <div class="btn btn-primary btn-lg shadow btn-active w-50  "data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 100px">
                        Log in
                    </div>
                    <div>
                        <p class="text-muted mt-3">Doesn't have an account? <span >
                            <a href="createaccount.php"class="fs-5  text-dark text-decoration-none ">Create account.</a></span> </p>
                    </div>
                </div>
            </div>
          
            </div>
        </div>
    </div>
    
<!-- Modal -->
<div class="modal fade shadow p5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Log in account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form onsubmit="event.preventDefault(); fnlogine(event);" class="login-form" style="padding : 10px; text-align: center;">
            <div class="input-group mb-3">
                <span class="input-group-icon fas fa-user-cog"></span>
                <input type="text" class="form-control" placeholder="Username" name="email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-icon fas fa-key"></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-primary form-control shadow-sm mb-3">Login</button>
        <a href="resetpassword.php" class="form-label "id="modal-recovery" style="text-align: center; text-decoration: none;">Account Recovery</a>
    </form>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
// //login admin
function fnLogin(event){
    let data = new FormData(event.target);
    data.append("method","fnLogin");
    axios.post("api/function.php",data)
    .then(function(res){
        if(res.data == 1){
            window.location = "dashboard.php";
        }else if(res.data == 2){
            alert("username not exist");
        }else{
            alert("Log in Erroree");
        }
    })
}
// logine
function fnlogine(event){
    let data = new FormData(event.target);
    data.append("method","fnlogine");
    axios.post("api/function.php",data)
    .then(function(res){
      if(res.data == 1){
          window.location = "dashboard.php"
      }else if(res.data ==2){
          alert("no email found");
      }else{
        alert("log in error");
      }
    })
}
</script>
</body>
  
</html>