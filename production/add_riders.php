<?php
include 'Config.php';

if(isset($_POST['submit1'])){
    $name = $_POST['fullnames'];
    $phone = $_POST['Phone'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $license = $_POST['license_no'];
    $DOB = $_POST['DOB'];



    if (empty($name) || empty($phone) || empty($address) || empty($nationality) || empty($DOB)) {
      echo '<script>alert("Fill all the fields before submitting!"); </script>';
      
    } else {
      // Assuming $conn is your database connection variable
      $query= "INSERT INTO riders(fullname, Phone, address, nationality, license_no, DOB) 
      VALUES('$name', '$phone', '$address', '$nationality', '$license', '$DOB')";

      $run = mysqli_query($conn, $query);

      if($run){
      echo '<script>alert("Data Added Successfully!");</script>';
      } else {
      echo '<script>alert("There was an Error");</script>';
      }

    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OL System</title>

    <!-- Your existing CSS and JavaScript imports remain unchanged -->

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- Your existing HTML content remains unchanged -->
    </div>
</div>

<!-- Your existing JavaScript imports remain unchanged -->
</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title></title>

    <script>
      
      var ScrollMsg= "Operational Licensing System - "
      var CharacterPosition=0;
      function StartScrolling() {
      document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
      ScrollMsg.substring(0, CharacterPosition);
      CharacterPosition++;
      if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
      window.setTimeout("StartScrolling()",150); }
      StartScrolling();
  
  </script>

  <!-- Favicon -->
  <link href="images/logo.jpg" rel="icon">

  <meta name="description" content="R & A Technologies">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- FullCalendar -->
  <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
  <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>OL System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/me.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Ramkel Gabriel</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Dashboard </span></a>
                  </li>
                  <li>
                    <a href="riders_details.php"><i class="fa fa-users"></i> Riders' Information</a>
                  </li>
                  <li>
                    <a><i class="fa fa-edit"></i> Vehicles</a>
                  </li>
                  <li>
                    <a href="report.php"><i class="fa fa-bar-chart"></i> Reports</a>
                  </li>
                  <li>
                    <a href="profile.php"><i class="fa fa-cogs"></i> Profile</a>
                  </li>
                </ul>
              </div>
    

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/me.jpg" alt="">Ramkel Gabriel
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">2</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/me.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Ramkel Gabriel</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Logged in.
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/logo.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>R & A Technologies</span>
                          <span class="time">8 mins ago</span>
                        </span>
                        <span class="message">
                          The system has been deployed
                        </span>
                      </a>
                    </li>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       <!-- page content -->
       <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Information Encoding Form</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>NEW RIDER'S DETAILS</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="margin-left: 300px;margin-bottom: 20px;  ">
                            <br>
                           
                            <form id="demo-form" method="POST">

                            
                          
                            <div class="form-group row">
												      <input type="text" class="form-control" name="fullnames" style="width:450px" placeholder="Full Names">
											      </div>
                           
                            <div class="form-group row">
											        
												      <input type="text" class="form-control" name="Phone" style="width:450px" placeholder="Phone Number">
											      </div>
                           
                            <div class="form-group row">
											        
												      <input type="text" class="form-control" name="license_no" style="width:450px" placeholder="License No">
											      </div>
                            
                            <div class="form-group row">
											        
												      <input type="text" class="form-control" name="address" style="width:450px" placeholder="Address">
											      </div>
                           
                            <div class="form-group row">
                            <select class="form-control" name="nationality"  style="width:450px">
                                <option>Choose Your Nationality</option>
                                <option>South Sudanese</option>
                                <option>Sudanese</option>
                                <option>Ugandan</option>
                                <option>Ethiopian</option>
                                <option>Eritean</option>
                                <option>Somalians</option>
												</select>
											</div>
                           
                         
										
                
                            <div class="form-group row">
												      <input type="date" class="form-control" name="DOB" style="width:450px">
											      </div>

                            <div class="form-group row">
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" name="submit1" class="btn btn-success">Submit</button>
											      </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
      <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div>
        <p style="color: black; margin-left: 420px; padding-top: 20PX;">Copyright &copy; 2024 || Developed by <a href="#" style="color: red;">R & A Technologies.</a> All Rights Reserved.</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>\
     <!-- FullCalendar -->
     <script src="../vendors/moment/min/moment.min.js"></script>
     <script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>

     <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
