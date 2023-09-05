 <?php
    session_start();
    if(!isset($_SESSION["admin"]))
    {
        echo "<script>
        alert('Login to continue....')
        window.location = '../index.php';
        </script>";
    }
  $con=mysqli_connect("localhost","root","","alvas") or die("error");

    ?>





        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="images/icon/logo-blue.png" alt="Cool Admin" /> -->
                    <h3>Alvas</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>
                        
                         
                     <?php if ($_SESSION['user']=='HOD') { ?>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas "></i>Manage Students Work</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="View_Studenthod.php">View student</a>                                    
                                </li>
                                <li>
                                    <a href="studentworkreporthod.php">View Report</a>                                    
                                </li>
                                
                            </ul>
                        </li>
                     <?php }  ?>
                        <?php if ($_SESSION['user']=='CCO') { ?>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas "></i>Manage Students Work</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="View_Student.php">View student</a>                                    
                                </li>
                                <li>
                                    <a href="studentworkreport.php">View Report</a>                                    
                                </li>
                                
                            </ul>
                        </li>
                     <?php }  ?>
                    </ul>
                </nav>
            </div>
        </aside>