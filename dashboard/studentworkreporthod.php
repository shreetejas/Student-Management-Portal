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
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
            <!-- END HEADER DESKTOP-->

             <!-- MAIN CONTENT-->
            <div class="main-content" style="width: 1000px;">
                <div class="section__content section__content--p30" style="width: 1000px;">
                    <div class="container-fluid" style="width: 1000px;">         
                     <div class="row" style="width: 1000px;">
                        <h3>Student Details</h3>
                            <form method="post" >
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Department Name</label>

                                              <select name="dept" required="" class="form-control">
                                                 
                                                  <?php
                                            $a=mysqli_query($con,"SELECT * FROM `section` inner join dept on section.deptid=dept.deptid WHERE section.secid='$_SESSION[sec]'");
                                                while ($f=mysqli_fetch_array($a,MYSQLI_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $f["secid"]; ?>"><?php echo $f["deptname"].'-'.$f["sec"]; ?></option>
                                        <?php } ?>
                                              </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Semister </label>

                                              <select name="sem" required="" class="form-control" onchange="this.form.submit()">
                                                  <option>select Sem</option>
                                                  
                                            <option value="sem1">sem1</option>
                                            <option value="sem2">sem2</option>
                                            <option value="sem3">sem3</option>
                                            <option value="sem4">sem4</option>
                                            <option value="sem5">sem5</option>
                                            <option value="sem6">sem6</option>
                                            <option value="sem7">sem7</option>
                                            <option value="sem8">sem8</option>

                                             
                                       
                                              </select>
                                            </div>

                            </form>

                            <div class="col-lg-9" style="width: 1000px;">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px;">
                                    <table class="table table-borderless table-striped table-earning" style="width: 1000px;">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Regno</th>
                                                <th>Section Name</th>
                                                <th>Semister</th>
                                                <th>Internal</th>
                                                <th>Seminar</th>
                                                <th>Project</th>
                                                <th>Antirag</th>
                                                <th>Mentorship</th>
                                                <th>Internship</th>
                                                <th>Placement</th>
                                                
                                                <th>CCO Approval</th>
                                                <th>HOD Approval</th>
                                                
                                               
                                                
                                            </tr>
                                               
                                        </thead>
                                        <tbody>
                                          
                                            <?php
                                                $conn=mysqli_connect("localhost","root","","alvas");
                                                if (isset($_POST['sem'])) {
                                                    $a=mysqli_query($conn,"SELECT * FROM `student` inner join section on student.sec=section.secid inner join dept on section.deptid=dept.deptid WHERE student.sec='$_POST[dept]' AND student.sem='$_POST[sem]' AND hod='Approved'");
                                                }
                                                else{
                                                $a=mysqli_query($conn,"SELECT * FROM `student` inner join section on student.sec=section.secid inner join dept on section.deptid=dept.deptid WHERE section.secid='$_SESSION[sec]' AND hod='Approved'");
                                                }
                                                while ($f=mysqli_fetch_array($a,MYSQLI_ASSOC)) {
                                            ?>
                                            <tr>
                                                  <td><?php echo $f["Name"]; ?></td>
                                                  <td><?php echo $f["Reg_no"]; ?></td>
                                                <td><?php echo $f["deptname"].'-'.$f["sec"]; ?></td>
                                                <td><?php echo $f["sem"]; ?></td>
                                                <td><?php echo $f["internal"]; ?></td>
                                                <td><?php echo $f["seminar"]; ?></td>
                                                <td><?php echo $f["project"]; ?></td>
                                                <td><?php echo $f["antirag"]; ?></td>
                                                <td><?php echo $f["mentership"]; ?></td>
                                                <td><?php echo $f["internship"]; ?></td>
                                                <td><?php echo $f["placement"]; ?></td>
                                                
                                                <td><?php echo $f["classcord"]; ?></td>
                                                <td><?php echo $f["hod"]; ?></td>
                                             
                                                 
                                            </tr>
                                            <?php
                                                echo "\n";
                                             }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>              
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
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
