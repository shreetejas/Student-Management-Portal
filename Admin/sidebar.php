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
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas "></i>Manage Department</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="Add_dept.php">Add</a>                                    
                                </li>
                                <li>
                                    <a href="View_dept.php">View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas "></i>Manage Section</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               <li>
                                    <a href="Add_section.php">Add</a>                                    
                                </li>
                                <li>
                                    <a href="View_section.php">View</a>
                                </li>
                            </ul>
                        </li>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas "></i> Manage Teachers</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="Add_teacher.php">Add</a>                                    
                                </li>
                                <li>
                                    <a href="View_teacher.php">View</a>
                                </li>
                            </ul>
                        </li>
                         
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas "></i>Manage Students</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="Add_student.php">Add</a>                                    
                                </li>
                                <li>
                                    <a href="View_student.php">View</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>