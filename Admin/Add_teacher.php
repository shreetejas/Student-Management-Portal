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

                       <div class="col-lg-6" style="max-width: 75%;">
                            <div class="card" style="margin-left: 25%">
                                <div class="card-header">
                                    <strong>Section</strong> Form
                                </div>
                                <div class="card-body card-block">
                                        <form method="post" >
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Department Name</label>

                                              <select name="dept" required="" class="form-control">
                                                  <option>select department section</option>
                                                  <?php
                                            $a=mysqli_query($con,"SELECT * FROM `section` inner join dept on section.deptid=dept.deptid ");
                                                while ($f=mysqli_fetch_array($a,MYSQLI_ASSOC)) {
                                            ?>
                                            <option value="<?php echo $f["secid"]; ?>"><?php echo $f["deptname"].'-'.$f["sec"]; ?></option>
                                        <?php } ?>
                                              </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">designation </label>

                                              <select name="desi" required="" class="form-control">
                                                  <option>select designation</option>
                                                  
                                            <option value="HOD">HOD</option>
                                             <option value="CCO">class co-ordinator</option>
                                       
                                              </select>
                                            </div>

                                           <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Teacher Name</label>
                                                <input type="text" id="nf-email" name="tname" placeholder="Enter name " class="form-control" required="" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32"  maxlength="51">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" id="nf-email" name="email" placeholder="Enter teacher Email" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Password</label>
                                                 <input type="Password" id="nf-email" name="pass" placeholder="Enter Password" min="6" class="form-control" required="" pattern="{6}" title="minimum six character" max="20" maxlength="20">
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
                                                $dept = $_POST['dept'];
                                                $desi = $_POST['desi'];
                                                $name = $_POST['tname'];
                                                 $email = $_POST['email'];
                                                 $pass = $_POST['pass'];
                                                $a=mysqli_query($con,"SELECT * FROM `teacher` where `sec`='$dept' and designation='$desi'");
                                                if(mysqli_fetch_array($a))
                                                {
                                                    echo "
                                                            <script>
                                                            alert('teacher already exists');
                                                            </script>
                                                            ";      
                                                }
                                                else
                                                {
                                                    $q=mysqli_query($con,"INSERT INTO `teacher`(`tname`, `sec`, `designation`, `temail`, `tpass`) VALUES ('$name','$dept','$desi','$email','$pass')");
                                                    if ($q) {
                                                            echo "
                                                            <script>
                                                            alert('Inserted');
                                                            window.location = 'Add_teacher.php';
                                                            </script>
                                                            ";  

                                                    }
                                                    else{
                                                        echo "Failed";

                                                    }
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
