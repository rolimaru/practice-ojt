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
<body style="background-image: url('pics/11.jpg'); background-size: cover;">

    <div class="nav-bar">
        
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 ">
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
<div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Log in account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body m-4">
        <!-- <label for="email" class="fs-lg">Email</label> -->
        <input type="email" name="email" class="form-control shadow mb-3" placeholder="Email..">
        <span class="d-flex d-inline ">
          <input type="password" name="password" class="form-control shadow mb-3" placeholder="Password..">
        </span>
        <div onclick="loginModal()" class="btn btn-primary btn-lg form-control mb-3"> Log in</div>
        <span class="text-primary" style="margin-left: 130px;"><a href="#">Forgot password?</a></span>

      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
  <script>
      function loginModal(){
        window.location.href = 'home.php'
      }
  </script>
</body>
  
</html>