<?php

if (isset($_GET['btnRound']))
{
		session_start();
		$FirstName=$_GET['form2'];
		$LastName=$_GET['form3'];
		$Email=$_GET['form4'];
		$Password=$_GET['form5'];
		$Password2=$_GET['form6'];
		if ($Password==$Password2)
		{
			
			//create user
			$Password=md5($Password);
			//$sql="INSERT INTO `registration`(`FirstName`, `LastName`, `Email`, `Password`, `Country`, `State`, `City`, `PinCode`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
			$sql="insert into `registration` (`firstname`, `lastname`, `email`, `password`) values ('$FirstName','$LastName','$Email','$Password')";
				//	insert into registration values('$FirstName','$LastName','$Email','$Password')";
			include_once ("dbconnection.php");
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}
			$RES = mysqli_query($conn, $sql) or die("error in insert");
			//iske baad yaha se redirect karwana hai logged in page pe or maybe just show a msg ur logged in
			$_SESSION['message']="You are now logged in";
			$_SESSION['username']=$Email;
			//header("location: abc.php");
		}
		else{
			$_SESSION['message']= "The two passwords do not match";


		}
	}
//==============================LOG IN================================================
if(isset($_POST['btnRound2']))
	{
		session_start();
		$name = $_POST["form7"];
		$pass = $_POST["form8"];
		$pass = md5($pass);
		$QUERY = "select count(*) as COUNT,email from registration where email='$name' and password='$pass'";
		include_once ("dbconnection.php");
		$RES = mysqli_query($conn, $QUERY) or die("error during login");
		$DATA = mysqli_fetch_array($RES, MYSQLI_BOTH);
		if(((int)$DATA["COUNT"]) > 0 )
		{
			$_SESSION['username'] = $DATA['email'];
		}
		
	}
  ?>
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

    <!-- Flaticon CSS -->
    <link href="css/flaticon.css" rel="stylesheet">

</head>

<body>
<?php if(isset($_SESSION))?>

    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="#" target="_blank"><img alt="Pet" class="img-responsive" src="Images/Logo/mini-logo 1.6.png"/></a>
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="TextAnimation" href="#">
                        	<ul>
                        	<li id="A1">Adopt&nbsp; Pet</li><li id="A2">Save A Life</li>
                        	</ul>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vet Finder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pet Grooming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <!--Search form-->
                <form class="form-inline">
                    <input id="Search" class="form-control" type="text" placeholder="Search Coming Soon">
                </form>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1" data-slide-to="0"></li>
            <li data-target="#carousel-example-1" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-example-1" data-slide-to="2"></li>
            <li data-target="#carousel-example-1" data-slide-to="3"></li>
            <li data-target="#carousel-example-1" data-slide-to="4"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active ">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive flex-item">Pet Society</h1>
                              <li>
                                 <p class="flex-item">Welcome to the Pet Society. <br> Placeholder for description.</p>
                              </li>
                        <?php
if (isset($_SESSION['username'])){
			echo '<li><a href="LogOut.php" class="btn btn-default btn-lg flex-item">Log Out</a></li>';
}else{
       echo   '<li><button type="button"  class="btn btn-primary btn-lg flex-item" data-toggle="modal" data-target="#modal-register">Sign Up</button>
                   </li>
                             <li>
                             <a  class="btn btn-default btn-lg flex-item" data-toggle="modal" data-target="#modal-login">Log In</a>
                             </li>';
                        
}                       
          ?>              
                        
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.First slide-->

            <!--Second slide -->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                      <ul class="animated fadeInUp col-md-12">
                          <li>
                              <h1 class="h1-responsive flex-item">Adoptions</h1>
                          </li>
                          <li>
                              <img id="arrow2" class="arrow img-fluid" src="Images/arrow2.png" />
                              <a class="btn btn-primary btn-lg flex-item" data-toggle="modal" data-target="#modal-register">Adopt a new pet</a>
                           </li>
                           <li>
                             <img id="arrow1" class="arrow img-fluid" src="Images/arrow1.png" />
                             <a  class="btn btn-default btn-lg flex-item" data-toggle="modal" data-target="#modal-login">Find a new home</a>
                           </li>
                           <li class="stickyNotes"> <!-- nth-child: 4 -->
                             <img src="Images/3307079913_f4beaa243a_b.jpg" class="sticky img-thumbnail img-fluid"  />
                           </li>
                           <li class="stickyNotes"><!-- nth-child: 5 -->
                             <img src="Images/maxresdefault (1).jpg" class="sticky img-thumbnail img-fluid"  />
                           </li>
                           <li class="stickyNotes"><!-- nth-child: 6 -->
                             <img src="Images/cat-istock.jpg" class="sticky img-thumbnail img-fluid"  />
                           </li>
                           <li class="stickyNotes"><!-- nth-child: 7 -->
                             <img src="Images/what-is-wet-tail-in-hamsters-51e3fb8242496.jpg" class="sticky img-thumbnail img-fluid"  />
                           </li>
                      </ul>
                    </div>
                </div>
                <!--/.Mask-->

            </div>
            <!--/.Second slide -->

            <!--Third slide-->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive">Vet Finder</h1></li>
                            <li>
                                <p>Placeholder for description</p>
                            </li>
                            <li>
                                <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg">Find a Vet</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Third slide-->

            <!--Fourth slide-->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive">Placeholder for Heading</h1></li>
                            <li>
                                <p>Our community can help you with any question</p>
                            </li>
                            <li>
                                <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg">Support forum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Fourth slide-->

            <!--Fifth slide-->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive">Placeholder for Heading</h1></li>
                            <li>
                                <p>Our community can help you with any question</p>
                            </li>
                            <li>
                                <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg">Support forum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Fifth slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      <a href="#"> <img id="Logo" alt="Pet Society Logo" class="img-fluid" src="Images/Logo/Pet Society Logo3.1.png"/> </a>
    </div>
    <!--/.Carousel Wrapper-->
    <!--/.Main layout-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title">Our Amazing Team</h5>
                    <p>We are a team of two Animal Loving Web Developers with an aim to connect all the Animal lovers of the world. </p>
						<h5 class="h5-responsive">Gurjot Singh</h5>
						<h5 class="h5-responsive">Akshay Arora</h5>
		</div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">UseFul Links</h5>
                    <ul>
                        <li><a href="#!">A</a></li>
                        <li><a href="#!">B</a></li>
                        <li><a href="#!">C</a></li>
                        <li><a href="#!">D</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-md-2">
                    <h5 class="title">Site Map</h5>
                    <ul>
                        <li><a href="#!">Page 1</a></li>
                        <li><a href="#!">Page 2</a></li>
                        <li><a href="#!">Page 3</a></li>
                        <li><a href="#!">Page 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-md-2">
                    <h5 class="title">Featured Profiles</h5>
                    <ul>
                        <li><a href="#!">Profile 1</a></li>
                        <li><a href="#!">Profile 2</a></li>
                        <li><a href="#!">Profile 3</a></li>
                        <li><a href="#!">Profile 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4> <a href="index.html"><strong>Pet Society</strong>- A place for all pet owners.</h4>
            <ul>
                <li>
                    <h5>Get in touch with other users.</h5></li>
                <li><a class="btn btn-danger flex-item" data-toggle="modal" data-target="#modal-register">Sign up!</a></li>
                <li><a class="btn btn-default flex-item" data-toggle="modal" data-target="#modal-login">Log In</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

 <!-- modal for sign up -->
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
                             <ul class="social-network social-circle">
                               <li><a href="#" class="btn-floating icoFacebook waves-effect waves-light" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="#" class="btn-floating icoTwitter waves-effect waves-light" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#" class="btn-floating icoGoogle waves-effect waves-light" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                               <li><a href="#" class="btn-floating icoLinkedin waves-effect waves-light" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                               <li><a href="#" class="btn-floating icoGit btn-small waves-effect waves-light"><i class="fa fa-github"></i></a></li>
                             </ul>

       								     </div>
       								     <!--Body-->
       								     <div class="modal-body">
                           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
                             <div class="md-form">
               						     <i class="fa fa-envelope prefix"></i>
               						     <input type="text" name="form2" id="form2" class="form-control">
              						      <label for="form2">Your Name</label>
             							   </div>
                             <div class="md-form">
               						     <i class="fa fa-envelope prefix"></i>
               						     <input type="text" name="form3" id="form3" class="form-control">
              						      <label for="form3">Your Last Name</label>
             							   </div>
               							 <div class="md-form">
               						     <i class="fa fa-envelope prefix"></i>
               						     <input type="text" name="form4" id="form4" class="form-control">
              						      <label for="form4">Your email</label>
             							   </div>
         						       <div class="md-form">
             						       <i class="fa fa-lock prefix"></i>
           						         <input type="password" name="form5" id="form5" class="form-control">
            						        <label for="form5">Your password</label>
           						     </div>

           						     <div class="md-form">
           						         <i class="fa fa-lock prefix"></i>
           						         <input type="password" name="form6" id="form6" class="form-control">
            						        <label for="form6">Repeat password</label>
            						    </div>

           						     <div class="text-xs-center">
           						         <button type="submit" name="btnRound"  id="btnRound" class="btn btn-primary btn-lg">Sign up</button>

              						      <fieldset class="form-group">
               						         <input type="checkbox" id="checkbox1" class="checkboxM">
               						         <label style="font-size: 1.2rem; color: black;" for="checkbox1">Subscribe me to the newsletter</label>
                						    </fieldset>
               							 </div>
                          </form>
         							   </div>

       						 		    <!--Footer-->
        							    <div class="modal-footer">
         							       <div class="options">
          						          <p>Already have an account? <a id="LogIn" data-toggle="modal" data-target="#modal-login" href="#">Log in</a></p>
          							      </div>
          							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          								  </div>
       									 </div>
    							    <!--/.Content-->
   										 </div>
										</div>
                               		<!-- modal sign up end -->
                               		<!-- modal login -->
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
								            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
								                <div class="md-form">
								                    <i class="fa fa-envelope prefix"></i>
								                    <input type="text" name="form7" id="form7" class="form-control">
								                    <label for="form7">Your email</label>
								                </div>

								                <div class="md-form">
								                    <i class="fa fa-lock prefix"></i>
								                    <input type="password" name="form8" id="form8" class="form-control">
								                    <label for="form8">Your password</label>
								                </div>
								                <div class="text-xs-center">
								                    <button type="submit" name="btnRound2" id="btnRound2" class="btn btn-primary btn-lg">Login</button>
								                </div>
								                </form>
								            </div>

								            <!--Footer-->
								            <div class="modal-footer">
								                <div class="options">
								                    <p>Not a member? <a id="SignUp" data-toggle="modal" data-target="#modal-register" href="#">Sign Up</a></p>
								                    <p>Forgot <a href="#">Password?</a></p>
								                </div>
								                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								            </div>
								        </div>
								        <!--/.Content-->
								    </div>
								</div>
								<!-- modal login end -->



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

	<script type="text/javascript">
	var box = $('#A1');
	var box1 = $('#A2');

	$(document).ready(function(){
		box1.addClass("visuallyHidden");
	    box1.addClass("hiddenText");
	  });

	$('#A1').on('mouseenter', function ()
			{
				box.addClass("strike");
	 		 	box.addClass("visuallyHidden");
	 		 	$('#A1').one('transitionend webkitTransitionEnd oTransitionEnd', function () {
	 		 	   box.addClass("hiddenText");
	 		 		if (box.hasClass('visuallyHidden'))
		 		 	{
				 	 	box1.removeClass('hiddenText');
				 	 	setTimeout(function () {
			 		 	box1.removeClass('visuallyHidden');
			 	   		}, 30);
		 		 	}
	 		 	});
	 		 });
	$('#A2').on('mouseleave',function()
	{
		box1.toggleClass('hiddenText');
		box1.toggleClass('visuallyHidden');
		box.toggleClass('hiddenText');
		box.removeClass('strike');
		box.toggleClass('visuallyHidden');
	}
	)

	$('#LogIn').on('click', function(){
	$('#modal-register').modal('hide');
});


	$('#SignUp').on('click', function(){
	$('#modal-login').modal('hide');
});
	</script>

</body>

</html>
