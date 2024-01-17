<?php include 'include/header.php' ?>

<div class="main " style=" padding-top: 2rem; margin-bottom: 3rem;" >
    <div class="container  w-100 ms-5 " style="">
        <div class="row " style="height: 400px; margin-top: 3rem; ">
            <div class="col-md-7 shadow" style="background-color: #d9dcde; border-style:solid; border-color: #828c92 ; border-radius: 5%; display: flex; border-width:3px; padding: 1.5rem; display: sticky; margin-right: .5rem;" >
                <div class="row" >
                    <div class="col-md-4">
                        <img src="pics/cw.jpg" alt="img not found" srcset="" style="width: 200px; height:180px; display:flex; border: solid 2px;border-radius:5%;">
                    </div>
                    <div class="col ms-1">
                        <div>
                            <span class="d-flex d-inline mb-2">
                                <p class="text-muted me-4">Job Title: </p>
                                <h3 class=" "> <input type="text" class="form-control"style="border:none;   height: 50px; width: 300px;"></h3>
                            </span>
                            <span class="d-flex d-inline mb-3">
                                <p class="text-muted me-5 mb-3">Salary:</p>
                                <h3 class="me-2"><i class="fa-solid fa-peso-sign"></i></h3>
                                <input type="text" class="form-control me-1" style="border:none;   height: 50px; width: 180px;">
                                <select name="rate" id="" style="border:none; font-size: 10px;">
                                    <option value="daily" style="">choose rate</option>
                                    <option value="daily" style="">daily.</option>
                                    <option value="weekly">weekly.</option>
                                    <option value="monthly">monthly.</option>
                                </select>
                            </span>
                            <span class="d-flex d-inline mb-3">
                                <p class="text-muted me-4">Address: </p>
                                <h3 class=" "><input type="text" class="form-control"style="border:none;   height: 40px; width: 300px;"></h3>
                            </span>
                            
                        </div>
                    </div>
                    <span class="d-flex d-inline">
                                <p class="text-muted me-2">Personel needed </p>
                                <h3 class=" "><input type="number" class="form-control"style="border:none;   height: 40px; width: 80px;"></h3>
                            </span>
                    <span>
                        <p class="text-muted">Qualifications</p>
                        <h6 class=""><input type="text" class="form-control"style="border:none;   height: 40px; width: 600px;"></h6>
                    </span>
                    <span>
                        <p class="text-muted">Full Description:</p>
                        <h6 class=""><input type="text" class="form-control"style="border:none;   height: 40px; width: 600px;"></h6>
                    </span>
                </div>
            </div>
            <div class="col-md-4  shadow p-4 " style="height: 400px; background-color:#f4f4f5 ; border-radius: 2%; border: solid .5px;position:relative;">
                <div class="nav m-1 center text-info " style="height: 20px; width:100%;  ">
                    <!-- <h2 >Employeer Info </h2> -->
                    <h4>About</h4>
                </div>
                <div style=" ">
                <hr>
                    <span class="d-flex d-inline mb-3">
                            <img src="pics/user.jpg" alt="No img found" style="width: 80px; height: 60px;border:solid 1px; border-radius:20%;">
                            <h3 class=" mt-3 ms-1">Rolimaru</h3>
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
                        <input type="text" class="form-control mb-3" placeholder="Add Company name.">
                    </span>
                     <hr>
                    <span class="btn btn-secondary text-white" style="width: 200px; position:absolute; right:1rem; bottom:1rem;">Post</span>
                </div>
            </div>
        </div>    
    </div>
    <div class="container " style="margin-top: 7rem;">
        <div class="row">
            <div class="col" >
                <span style="display: inline; display:flex;">
                    <p class="text-muted me-3">This post will automatically deleted in span of days.</p>
                    <input type="number" class="form-control shadow" style="border: solid 1px; width: 100px; text-align: center" value="3">
                    <p class="text-muted ms-3">days.</p>

                </span>
            </div>
        </div>
    </div>

    <!-- <div class="container " style=" width: auto; overflow-x: auto;" >
        <div class="rela">
            <h5 class="bg-success text-white " style="border: solid black 1px; padding: 5px;  position: static; z-index: 2; font-size: 20px; margin-top: 3px; max-width:150px; text-align: center; border-radius: 5px; " >Post created</h5>
        
        </div>
        <div class="card-container mt-2" >
                <div class="card mx-2 " style="width: 18rem; position:;">
                    <div class="card-body shadow">
                        <h5 class="card-title ">Vendor</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-2 " style="width: 18rem; position:;">
                    <div class="card-body">
                        <h5 class="card-title">Construction</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-2 d-flex" style="width: 18rem; position:;">
                    <div class="card-body">
                        <h5 class="card-title">Laborer</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-2 d-flex" style="width: 18rem; position:;">
                    <div class="card-body">
                        <h5 class="card-title">Laborer</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mx-2 d-flex" style="width: 18rem; position:;">
                    <div class="card-body">
                        <h5 class="card-title">Laborer</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            </div>
    </div> -->
</div>
