<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Alva's</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
               <?php include 'sidebar.php'; ?>

        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
         <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#" style="text-decoration-color: red;">Log out</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <?php
                                                $conn=mysqli_connect("localhost","root","","alvas");
                                              
                                               
                                                $a=mysqli_query($conn,"SELECT * FROM `student` inner join section on student.sec=section.secid inner join dept on section.deptid=dept.deptid WHERE std_id='$_GET[sid]'");
                                                
                                               $f=mysqli_fetch_array($a,MYSQLI_ASSOC);
                                            ?>

                       <div class="col-lg-6" style="max-width: 75%;">
                            <div class="card" style="margin-left: 25%">
                                <div class="card-header">
                                    <strong>Student Work</strong> Form
                                </div>
                               <div class="form-group"> <h5>Student name: <?php echo $f["Name"]; ?></h5> &nbsp &nbsp &nbsp &nbsp <h5> Student Regno: <?php echo $f["Reg_no"]; ?></h5></div>
                                  <div class="form-group"><h5>Section: <?php echo $f["deptname"].'-'.$f["sec"]; ?></h5> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <h5>Semister: <?php echo $f["sem"]; ?></h5></div>
                                <div class="card-body card-block">
                                    
                                        <form method="post" >
                                                <input type="hidden" name="sid" value="<?php echo $f["std_id"]; ?>">

                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Internal Marks</label>
                                                <input type="text" class="form-control" required="" placeholder="Enter Internal Marks" name="internal" pattern="[0-9]{2}" maxlength="2">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Seminar Marks</label>
                                                <input type="text" class="form-control" required="" placeholder="Enter Seminar Marks" name="seminar" pattern="[0-9]{2}" maxlength="2">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Project </label>

                                              <select name="project" required="" class="form-control">
                                                <option>Select Option</option>    
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Internship </label>

                                              <select name="intership" required="" class="form-control">
                                                <option>Select Option</option>    
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Placement Form </label>

                                              <select name="pf" required="" class="form-control">
                                                <option>Select Option</option>    
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Anti Raging Form </label>

                                              <select name="arf" required="" class="form-control">
                                                <option>Select Option</option>    
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Mentorship Form </label>

                                              <select name="mf" required="" class="form-control">
                                                <option>Select Option</option>    
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Approval </label>

                                              <select name="status" required="" class="form-control">
                                                <option>Select Option</option>    
                                                <option value="Approved">Approved</option>
                                                <option value="NA">NA</option>
                                               </select>
                                            </div>
                                             
                                             

                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                               
                                            </div>
                                        </form>
                                        <?php
                                            
                                            if (isset($_POST['submit'])) 
                                            {
                                               
                                                
                                                
                                                    $q=mysqli_query($con,"UPDATE `student` SET `internal`='$_POST[internal]',`project`='$_POST[project]',`antirag`='$_POST[arf]',`classcord`='$_POST[status]',`mentership`='$_POST[mf]',`internship`='$_POST[intership]',`placement`='$_POST[pf]',`seminar`='$_POST[seminar]' WHERE `std_id`='$_POST[sid]'");
                                                    if ($q) {
                                                            echo "
                                                            <script>
                                                            alert('Updated');
                                                            window.location = 'View_Student.php';
                                                            </script>
                                                            ";  

                                                    }
                                                    else{
                                                        echo "Failed";

                                                    }
                                                }
                                               
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
