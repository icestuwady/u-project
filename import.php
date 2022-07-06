<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Import</title>
    <meta name="description" content="Import File">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/like.png">
    <link rel="shortcut icon" href="images/like.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon ti-archive"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">applications</li><!-- /.menu-title -->
                    <li class="active">
                        <a href="import.php"> <i class="menu-icon ti-import"></i>Import File</a>
                    </li>
                    <li class="menu-title">Display Information</li>
                    <li>
                        <a href="show-All.php"> <i class="menu-icon ti-desktop"></i>All</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-package"></i>Picking</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-angle-right"></i><a href="show-Picking.php"> All Picking</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="show-PickingA.php"> Picking A</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="show-PickingB.php"> Picking B</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="show-PickingC.php"> Picking C</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="show-PickingD.php"> Picking D</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="show-PickingE.php"> Picking E</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="show-BenchCheck.php"> <i class="menu-icon ti-check-box"></i>BenchCheck</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include 'header.php';?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Import File</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Import File</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <!-- import file-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Import File </h4><br>
                                <?php
                                if(isset($_SESSION['status']))
                                {
                                    echo $_SESSION['status'];
                                    unset($_SESSION['status']);
                                }
                                ?>
                                <form action="code_import.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="import_file">
                                    <button type="submit" name="import_file_btn" class="btn btn-info"><i class="fa fa-download"></i>&nbsp; Import</button>
                                </form>
                                <label style="color:red;font-size:12px;padding-top:20px;">*** Import เฉพาะไฟล์ Excel (CSV,xls,xlsx) และเป็นไปตาม template เท่านั้น ***</label>
                                <button style="font-size:12px;" type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">ตัวอย่าง template</button>
                            </div>
                            <div class="row">
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Template Example</h5>
                                        </div>
                                            <div class="modal-body" style="text-align: center;">
                                        <img src="images/example.png" alt="Template">
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <!-- table-->
                <div class="row">
                    <!-- table-->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <strong class="box-title">Productivity Individual</strong>
                            </div>
                            <div class="card-body">
                                <?php
                                    $conn = mysqli_connect("localhost","root","","project_pi");
                                    $query = "SELECT * FROM employee";
                                    $query_run = mysqli_query($conn,$query);
                                ?>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th style="width:5%">Zone</th>
                                            <th style="width:5%;text-align: center;">Target</th>
                                            <th style="width:5%;text-align: center;">Productivity</th>
                                            <th style="width:5%;text-align: center;">Error</th>
                                            <th style="text-align: center;">image</th>
                                            <th style="text-align: center;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(mysqli_num_rows($query_run) >0)
                                            {
                                                foreach($query_run as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td style="vertical-align: middle;"><?php echo $row['dates'];?></td>
                                                        <td style="vertical-align: middle;"><?php echo $row['id']?></td>
                                                        <td style="vertical-align: middle;"><?php echo $row['fullname'],' ',$row['lastname'];?></td>
                                                        <td style="vertical-align: middle;"><?php echo $row['zones'];?></td>
                                                        <td style ="text-align: center;vertical-align: middle;"><?php echo $row['targets'];?></td>
                                                        <td style ="text-align: center;vertical-align: middle;"><?php echo $row['product'];?></td>
                                                        <td style ="text-align: center;vertical-align: middle;"><?php echo $row['error_target'];?></td>
                                                        <td style ="text-align: center;vertical-align: middle;">
                                                            <img src="<?php echo $row['pic'];?>" width="100px" height="100px" alt="Image" >
                                                        </td>
                                                        <td style ="text-align: center;vertical-align: middle;">
                                                            <button class="btn btn-outline-dark" title="Edit Image" data-toggle="modal" data-target="#edit<?php echo $row['id']?>"><i class="fa fa-picture-o"></i></button>
                                                            <button class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#delete<?php echo $row['id']?>"><i class="fa fa-trash-o"></i></button>
                                                        </td>

                                                        <!--modal-->
                                                        <div class="modal fade" id="edit<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-md" role="document">
                                                                <div class="modal-content">
                                                                    <form method="POST" enctype="multipart/form-data" action="code_edit.php">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="editModalLabel">Edit Image</h5>
                                                                        </div>
                                                                        <div class="modal-body" style="text-align: center;">
                                                                            <div class="form-group">
                                                                                <h4 style="font-weight: bold;margin-bottom:20px;">Information</h4>
                                                                                <input type="hidden" value="<?php echo $row['id']?>" name="id"/>
                                                                                <h4><?php echo $row['id']?></h4>
                                                                                <h4><?php echo $row['fullname'],' ',$row['lastname']?></h4>
                                                                                <h4 style="font-weight: bold;margin:20px;">Zone</h4>
                                                                                <h4><?php echo $row['zones']?></h4>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <h4 style="font-weight: bold; margin:20px;">Current Photo</h4>
                                                                                <img src="<?php echo $row['pic']?>" height="100" width="100" />
                                                                                <input type="hidden" name="previous" value="<?php echo $row['pic']?>"/>
                                                                                <h4 style="font-weight: bold; margin:20px;">New Photo</h4>
                                                                                <input type="file" class="form-control" name="photo" value="<?php echo $row['pic']?>" required="required"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">cancel</button>
                                                                            <button name="edit" class="btn btn-info"><i class="fa fa-upload"></i>&nbsp; Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="delete<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-md" role="document">
                                                                <div class="modal-content">
                                                                    <form method="POST" enctype="multipart/form-data" action="code_delete.php">
                                                                        <div class="modal-body" style="text-align: center;">
                                                                            <div class="form-group">
                                                                                <h1 style="color:grey;margin:30px; font-size: 100px;"><i class="fa fa-warning (alias)"></i></h1>
                                                                                <h2 style="color:red;font-weight: bold;">Are You Sure?</h2>
                                                                                <h4 style="margin:20px;">you are deleting</h4>
                                                                                <h4 style="font-weight: bold; margin-top:20px;"><?php echo $row['fullname'],' ',$row['lastname']?></h4>
                                                                                <h4 style="font-weight: bold; margin:20px;">ID : <?php echo $row['id']?></h4>
                                                                                <h4>Zone : <?php echo $row['zones']?></h4>
                                                                                <br><br>
                                                                                <input type="hidden" value="<?php echo $row['id']?>" name="id"/>
                                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">cancel</button>
                                                                                <button name="delete" class="btn btn-danger"><i class="fa fa-times-circle"></i>&nbsp; Delete</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>





</body>
</html>
