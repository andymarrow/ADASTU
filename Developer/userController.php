<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Developer</title>

    <!-- Custom fonts for this template -->
    <link href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
         .myDiv {
            margin-top: 30px;
            margin-right: 5px;
            position:absolute;
            top:0;
            right:0;
        }
        .myDiv2 {
            position: relative;
            top: 13px;
        }
    </style>
</head>

<body id="page-top">

<?php

session_start();

if(isset($_SESSION["user"])){
    if(($_SESSION["user"])=="" or $_SESSION['usertype']!='dev'){
        header("location: ../login.php");
    }else{
        $useremail=$_SESSION["user"];
    }

}else{
    header("location: ../login.php");
}


?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
                <div class="sidebar-brand-icon">
                   
                </div>
                <div class="sidebar-brand-text mx-3">Developers<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">             
                            <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">User controller</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class= "container-fluid">
                            
                            
                            <div class= "card shadow mb-4">
                                <div class="card-header py-3">
                            
                            </h6>
                            <div class="myDiv">
                                <form action="deleteAll.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" >
                                    <button type="submit"   name="delete_btn" class="btn btn-danger">Delete all</button>
                                </form> 
                            </div>
                            <div class="myDiv2">
                                <form action="deleteAllspaces.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" >
                                    <button type="submit"   name="delete_btn" class="btn btn-danger">Delete spaces</button>
                                </form> 
                            </div>
                            </div>
                            <div class="card-body">
                            
                            <div class="table-responsive">
                   

                                <?php
                            require '../connection.php';
                            $query = "SELECT * From `webuser`";
                            $query_run = mysqli_query($database, $query)
                            ?>
                            
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                        <th>Email</th>
                                        <th>Verified</th>
                                        <th>Usertype</th>
                                        <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            
                                    <?php
                                    if(mysqli_num_rows($query_run) > 0){
                            
                                        while($row = mysqli_fetch_assoc($query_run)){
                                            
                                            ?>
                            
                                        <tr>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['verified']; ?></td>
                                            <td><?php echo $row['usertype']; ?></td>
                                            <td>
                                                <form action="userController_backend.php" method="post">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" >
                                                    <button type="submit"  name="delete_btn" class="btn btn-danger">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                        <?php
                                        }
                                        
                                    }else {
                                        "No Record Found";
                                    } 
                                    ?>
                                    <h1>Webusers</h1>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                            
            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <?php
include('include/scripts.php');
include('include/footer.php');
?>

</body>

</html>