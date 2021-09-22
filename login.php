<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>

    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap Js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/custom.css">
</head>

<body id="colors">
    <div id="container">
        <h1 class="h-primary">L O G I N</h1>
        <hr>
        <form action="validate_signin.php" method="POST" class="form-horizontal my-form-center">

            <div class="input-group mb-3">
                <label for="form-username" class="col-sm-3 col-sm-2 col-form-label">Username</label>
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                <input type="text" class="form-control " aria-label="Username" aria-describedby="basic-addon1" name="username" id="form-username" autocomplete="off">
            </div>

            <div class="input-group mb-3">
                <label for="form-username" class="col-sm-3 form-username col-sm-2 col-form-label">Password</label>
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-shield-fill-check"></i></span>
                <label for="form-username"></label>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="password" id="form-username" autocomplete="off">
            </div>

            <div class="input-group mb-3">
                <label for="form-username" class="col-sm-3 form-username col-sm-2 col-form-label">Institution</label>
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-bank2"></i></span>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Institution</option>

                    <?php
                    require "connections.php";

                    $fetch_command= "SELECT * FROM college_list";

                   
                    $fetch_query= mysqli_query($bhomies,$fetch_command);
        
                        while($result=mysqli_fetch_array($fetch_query))
                            {
                                
                     ?>

                    <option value="<?php echo $result['college_id'];?>" name="institute"> <?php echo $result['college_name']; ?></option>                               
                                

                    <?php
                               // echo ' </label>';                                              
                            }                   
                    ?>                 
                    
                </select>
            </div>


            <div class="radio-container">
                <div class="input-group mb-3 radio-field">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user" value="parent" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Parent
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user" value="institute" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Institute
                        </label>
                    </div>
                </div>
            </div>
         
            <button type="submit" class="btn btn-outline-primary my-btn" style="color:azure;">Submit</button>
        </form>
        <div class="not-registered">
            <h6>Didn't register yet ? <a href="college_signup.html" class="">Register Now</a> </h5>
        </div>
    </div>
</body>

</html>