<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="css/style.css" rel="stylesheet">

</head>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-register">
Modal Register
</button>
                                
<!-- Modal Register -->
<div class="modal fade modal-ext" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fa fa-user"></i> Register with:</h3>
                <a href="" class="btn-floating btn-fb btn-small"><i class="fa fa-facebook"></i></a>
                <a href="" class="btn-floating btn-tw btn-small"><i class="fa fa-twitter"></i></a>
                <a href="" class="btn-floating btn-gplus btn-small"><i class="fa fa-google-plus"></i></a>
                <a href="" class="btn-floating btn-li btn-small"><i class="fa fa-linkedin"></i></a>
                <a href="" class="btn-floating btn-git btn-small"><i class="fa fa-github"></i></a>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form3" class="form-control">
                    <label for="form3">Your password</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form4" class="form-control">
                    <label for="form4">Repeat password</label>
                </div>

                <div class="text-xs-center">
                    <button class="btn btn-primary btn-lg">Sign up</button>

                    <fieldset class="form-group">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1">Subscribe me to the newsletter</label>
                    </fieldset>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <p>Already have an account? <a id="abc" data-toggle="modal" data-target="#modal-login" href="#">Log in</a></p>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>


<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-login">
    Modal Login
</button>
                                
<!-- Modal Login -->
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
           
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fa fa-user"></i> Login</h3>
            </div>
            
            <!--Body-->
            <div class="modal-body">
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form3" class="form-control">
                    <label for="form3">Your password</label>
                </div>
                <div class="text-xs-center">
                    <button class="btn btn-primary btn-lg">Login</button>
                </div>
            </div>
            
            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>


 <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
$('#abc').on('click', function(){
	$('#modal-register').modal('hide');
	
	
});
$('#modal-register').on('shown.bs.modal', function () {
  $('#myInput').focus();
});
</script>