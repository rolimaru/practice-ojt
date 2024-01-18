
<?php
    include 'include/header.php';
    include 'db_conn.php';

    // $sql = "SELECT p.*,a.name FROM posts p ON account a ";
    $sql = "SELECT p.*, a.name FROM posts p INNER JOIN account a ON p.id = a.id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $sql2 = "SELECT * FROM `posts`";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);

    $row = mysqli_fetch_assoc($result);

?>

<div class="main " style=" padding-top: 2rem; " >
    <div class="container  w-100 ms-5 " style="">
        <div class="row " style="height: 400px; margin-top: 3rem; ">
            <div class="col-md-7 shadow" style="background-color: #d9dcde; border-style:solid; border-color: #828c92 ; border-radius: 5%; display: flex; border-width:3px; padding: 1.5rem; display: sticky; margin-right: .5rem;" >
                <div class="row" >
                    <div class="col-md-4">
                        <img src="pics/cw.jpg" alt="img not found" srcset="" style="width: 200px; height:180px; display:flex; border: solid 2px; border-radius:5%;">
                    </div>
                    <div class="col ms-1">
                     
                        <div>
                            <span class="d-flex d-inline mb-3">
                                <p class="text-muted me-4">Job Title: </p>
                                <h3 class="mx-3 "><?php echo $row['job_title']; ?></h3>
                            </span>
                            <span class="d-flex d-inline mb-3">
                                <p class="text-muted me-5 mb-3">Salary:</p>
                                <h3 class="mx-3 "><i class="fa-solid fa-peso-sign"></i> <?php echo $row['salary']; ?> </h3>
                                <p>per month.</p>
                            </span>
                            <span class="d-flex d-inline mb-3">
                                <p class="text-muted me-4">Address: </p>
                                <h3 class="mx-3 ">Catarman</h3>
                            </span>
                            <span class="d-flex d-inline mb-3">
                                <p class="text-muted me-4">Qualifications: </p>
                                <h6 class="mx-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, officiis?</h6>
                            </span>
                        </div>
                    </div>
                    <span>
                        <p class="text-muted">Full Description:</p>
                        <h6 class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, velit! Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>
                    </span>
                </div>
            </div>
            <div class="col-md-4  shadow p-4 " style=" background-color:#f4f4f5 ; border-radius: 2%; border: solid .5px;position:relative;">
                <div class="nav m-1 center text-info " style="height: 20px; width:100%;  ">
                    <!-- <h2 >Employeer Info </h2> -->
                    <h4>About</h4>
                </div>
                <div style=" ">
                <hr>
                    <span class="d-flex d-inline mb-3">
                            <img src="pics/user.jpg" alt="No img found" style="width: 80px; height: 60px;border:solid 1px; border-radius:20%;">
                            <h3 class=" mt-3 ms-1"><?php echo $row['name']; ?></h3>
                    </span>
                    
                    <span class="d-flex d-inline mb-1">
                        <i class="fa-solid fa-location-dot fs-5 text-success ms-4"></i>
                        <p class="ms-4 ">Catarman, Cordova, Cebu</p>
                    </span>
                    <span class="d-flex d-inline mb-2">
                        <i class="fa-solid fa-at fs-5 text-muted ms-4"></i>
                        <p class="ms-4 ">arorolie9@gmail.com</p>
                    </span>
                    <span class="d-flex d-inline mb-1">
                        <i class="fa-solid fa-building-user text-info ms-4"></i>
                        <p class="ms-4 ">Company name.</p>
                    </span>
                     <hr>
                    <span class="btn btn-success text-white" style="width: 200px; position:absolute; right:1rem; bottom:1rem;">Send Application</span>
                </div>
            </div>
        </div>    
    </div>

    <div class="container " style=" width: auto; overflow-x: auto;" >
        <div class="rela">
            <h5 class="bg-success text-white " style="border: solid black 1px; padding 1rem; z-index: 2; font-size: 20px; margin-top: 3px; width: 100px; text-align: center;display: sticky;  border-radius: 5px; " >Related</h5>
        
        </div>
    
            <div class="card-container mt-1">
                <?php
                if ($resultCheck2 > 0) {
                    while ($row2 = mysqli_fetch_assoc($result2)):
                ?>
                    <div class="mini card mx-2" style="width: 18rem; height: 250px; position:;">
                        <div class="card-body shadow">
                            <h5 class="card-title" style="height: 30px;"><?php echo $row2['job_title']; ?></h5>
                            <hr>
                            <p class="card-text"><?php echo $row2['full_description']; ?></p>
                            <a href="#" class="btn btn-primary" style="position: absolute; bottom:10px;">Go somewhere</a>
                        </div>
                    </div>
                <?php
                    endwhile;
                } else {
                    // Handle the case where no results are found
                    echo "No results found.";
                }
                ?>
            </div>
</div>
