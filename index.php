<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>



    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/7a2b9ada1a.js"></script>


</head>

<body>
    <div class="container">
        <h1 class="text-center">Registration Form</h1>
        <div class="row">
            <div class="col-xs-6 col-md-6 col-sm-6">

                <form class="well form-horizontal" action="form.php" method="post" id="registration_form">
                    <fieldset>


                        <!-- First input-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">First Name</label>
                            <div class="col-ms-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="first_name" placeholder="First Name" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Last input-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">Last Name</label>
                            <div class="col-ms-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-ms-4 control-label">E-Mail</label>
                            <div class="col-ms-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                                </div>
                            </div>
                        </div>


                        <!-- Mobile input-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">Phone +91</label>
                            <div class="col-ms-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone" placeholder="1234567890" class="form-control" type="number">
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">Gender</label>
                            <div class="col-ms-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-transgender fa-1g" aria-hidden="true"></i></span>
                                    <select name="gender" class="form-control selectpicker">
      <option value=" " >Please select your Gender</option>
      <option>Male</option>
      <option>Female</option>
    </select>
                                </div>
                            </div>
                        </div>

                        <!--Select Basic-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">Branch</label>
                            <div class="col-ms-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="branch" class="form-control selectpicker">
      <option value=" " >Please select your Branch</option>
      <option>CSE</option>
      <option>IT</option>
      <option >ECE</option>
      <option >EI</option>
      <option >EN</option>
      <option >ME</option>
      <option >CIVIL</option>
      <option >MCA</option>
    </select>
                                </div>
                            </div>
                        </div>

                        <!--Select-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">Year</label>
                            <div class="col-ms-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="year" class="form-control selectpicker">
      <option value=" " >Please select your Year</option>
      <option>1</option>
      <option>2</option>
      <option >3</option>
      <option >4</option>
    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">Student Number</label>
                            <div class="col-ms-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="stdno" placeholder="Student No" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-ms-4 control-label">University Roll no.</label>
                            <div class="col-ms-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="rollno" placeholder="Roll No" class="form-control" type="number">
                                </div>
                            </div>
                        </div>

                        <!-- radio checks -->
                        <div class="form-group">
                            <label class="col-ms-4 control-label">Are You Hosteller</label>
                            <div class="col-ms-4">
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="hosting" value="yes" /> Yes
                                </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="hosting" value="no" /> No
                                </label>
                                </div>
                            </div>
                        </div>



                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-ms-4 control-label"></label>
                            <div class="col-ms-4">
                                <button type="submit" class="btn btn-primary">Register <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-xs-6 col-md-6 col-sm-6">
                <div class="container">
                    <img src="flex.jpg" class="img-responsive" height="750" width="500">
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>
