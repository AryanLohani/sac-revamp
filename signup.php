<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>
    <?php include 'navbar.php' ?>
    <section>
        <div class="wrapper">
            <center>
                <h2 style="font-size: 300%; font-family: 'Raleway', sans-serif;">
                    Register
                </h2>
            </center>
            <form id="register">
                <div class="heading">
                    <h2>Personal Details</h2>
                    <div class="progress" style="height:0.4rem;">
                        <div id="one" class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height:0.4rem;"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            
                            <label for="name" class="form-label">
                                Name
                                <span style="color:red;">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1">@</span>
                                <input class="form-control" type="text" name="name" id="name" class="validate" required>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <label>
                                Email ID
                                <span style="color:red;">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                <input class="form-control" type="email" name="email" id="email" required>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="password">Password (For future login) <span style="color:red;">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 ">
                            <label for="address">Address </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-address-card"></i></span>
                                <input class="form-control" type="text" name="address" id="personal_address">
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="city">City <span style="color:red;">*</span></label>
                            <input class="form-control" type="text" id="personal_city" name="city" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="state">State </label>
                            <input class="form-control" type="text" id="personal_state" name="state">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="country">Country <span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="country" id="country" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="zipcode">Zip Code </label>
                            <input class="form-control" type="text" id="zipcode" name="zipCode">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="mobile">Mobile <span style="color:red;">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                <input class="form-control" type="text" name="mobile" id="mobile" required>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="dob">DOB <span style="color:red;">*</span></label>
                            <input class="form-control" type="date" name="dob" required id="dob">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="marital">Marital Status</label>
                            <input class="form-control" type="text" name="marital" id="marital">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="accompanyingNo">Accompaniments (Number of guests)<span style="color:red;">*</span></label>
                            <input class="form-control" type="number" min="0" id="accompanyingNo" name="accompanyingNo" required>
                        </div>
                    </div>
                </div>


                <div class="heading">
                    <h2>Work Experience</h2>
                    <div class="progress" style="height:0.4rem;">
                        <div id="one" class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height:0.4rem;"></div>
                    </div>
                </div>
                <p style="margin-left: 15px; margin-bottom:0 !important; text-align:center;"><i>*Current or past work experiences as per relevance</i></p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="ind">Industry </label>
                            <input class="form-control" type="text" id="ind" name="industry">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="prof">Profession </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-briefcase"></i></span>
                                <input class="form-control" type="text" id="prof" name="profession">
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="org">Organisation Name <span style="color:red;">*</span></label>
                            <input class="form-control" type="text" id="org" name="orgName" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="desig">Designation <span style="color:red;">*</span></label>
                            <input class="form-control" type="text" id="desig" name="designation" required>
                        </div>
                        <div class="col-sm-12">
                            <label for="address">Address</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-address-card"></i></span>
                                <input class="form-control" type="text" id="address" name="work_address">
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="city">City</label>
                            <input class="form-control" type="text" id="city" name="work_city">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="state">State</label>
                            <input class="form-control" type="text" id="state" name="work_state">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="Country">Country</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-globe"></i></i></span>
                                <input class="form-control" type="text" id="Country" name="work_country">
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="zip">Zip Code</label>
                            <input class="form-control" type="text" id="zip" name="work_zipCode">
                        </div>
                    </div>
                </div>


                <div class="heading">
                    <h2>Nostalgic Section</h2>
                    <div class="progress" style="height:0.4rem;">
                        <div id="one" class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height:0.4rem;"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="roll">Roll Number</label>
                            <input class="form-control" type="text" id="roll" name="rollNum">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="join">Join Year <span style="color:red;">*</span></label>
                            <input class="form-control" type="number" min="1951" max="2010" id="join" name="joinYear" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="degree">Degree <span style="color:red;">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="font-weight: 600;" id="basic-addon1"><i class="fas fa-graduation-cap"></i></span>
                                <input class="form-control" type="text" id="degree" name="degree" required>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="dept">Department <span style="color:red;">*</span></label>
                            <input class="form-control" type="text" id="dept" name="department" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="hall">Hall <span style="color:red;">*</span></label>
                            <input class="form-control" type="text" id="hall" name="hall" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="yog">Year of Graduating <span style="color:red;">*</span></label>
                            <input class="form-control" type="number" min="1955" max="2014" id="yog" name="graduatingYear" required>
                        </div>
                        <div class="col-sm-12">
                            <label for="yog">Involvements (Societies, Hall Events, etc) </label>
                            <input class="form-control" type="text" id="involvements" name="involvements">
                        </div>
                        <div class="col-sm-12">
                            <label for="yog">Hobbies</label>
                            <input class="form-control" type="text" id="hobbies" name="hobbies">
                        </div>
                    </div>
                </div>

                <center>
                    <button type="submit" class="btn btn-dark" >Submit</button>
              </center>
            </form>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script>
        $(function() {
            $('#register').on('submit', function(e) {
                e.preventDefault();
                console.log('a');
                $.ajax({
                    type: 'post',
                    url: 'register.php',
                    data: $('#register').serialize(),
                    success: function(response) {
                        if (response == 0) {
                            swal({
                                title: "WRONG CAPTCHA!",
                                text: "Please re-enter the captcha!",
                                icon: "error",
                                buttons: true,
                                dangerMode: true,
                            }).then((value) => {

                            });
                        } else if (response == 1) {
                            swal({
                                title: "REGISTERED!",
                                text: "You can login now!",
                                icon: "success",
                                buttons: true,
                                dangerMode: true,
                            }).then((value) => {
                                window.location = "home.php";

                            });
                            //alert('success');
                        } else {
                            alert(response);
                        }
                    }
                // });

            });

        });
    </script>
</body>