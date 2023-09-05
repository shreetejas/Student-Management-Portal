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
                        <h3>Course Admin Details</h3>
                            <div class="col-lg-9" style="width: 1000px;">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px;">
                                    <table class="table table-borderless table-striped table-earning" style="width: 1000px;">
                                        <thead>
                                            <tr>
                                                <th>Department Name</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                               
                                        </thead>
                                        <tbody>
                                          
                                            <?php
                                               
                                                $a=mysqli_query($con,"SELECT * FROM `dept`");
                                                while ($f=mysqli_fetch_array($a,MYSQLI_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $f["deptname"]; ?></td>
                                               
                                                <td> 
                                                    <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <a onclick="return confirm('do you want to edit')" href="editdept.php?sid=<?php echo $f["deptid"]; ?>"><i class="zmdi zmdi-edit"></i></a>
                                                    </button> || <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <a onclick="return confirm('do you want to delete')" href="deletedept.php?sid=<?php echo $f["deptid"]; ?>"> <i class="zmdi zmdi-delete"></i></a>
                                                    </button>
                                                    </div>
                                                     
                                                </td>
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
