<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Individual Productivity">
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

    
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon ti-archive"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">applications</li><!-- /.menu-title -->
                    <li>
                        <a href="import.php"> <i class="menu-icon ti-import"></i>Import File</a>
                    </li>
                    <li class="menu-title">Display Information</li>
                    <li>
                        <a href="show-All.php"> <i class="menu-icon ti-desktop"></i>All</a>
                    </li>
                    <li>
                        <a href="show-Picking.php"> <i class="menu-icon ti-package"></i>Picking</a>
                    </li>
                    <li>
                        <a href="show-BenchCheck.php"> <i class="menu-icon ti-check-box"></i>BenchCheck</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include 'header.php';?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <?php require 'code_count.php';?>
                    <div class="col-lg-4 col-md-12">
                        <div class="card text-white" style="background-color:#5cb85c;">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span><?php echo $result_very;?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Very Good</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg ti-thumb-up"></i>
                                </div><!-- /.card-right -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card text-white" style="background-color:#f0ad4e;">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span><?php echo $result_good1 + $result_good2 ;?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Good</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg ti-face-smile"></i>
                                </div><!-- /.card-right -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card text-white" style="background-color:#d9534f;">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span><?php echo $result_fair;?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Fair</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg ti-face-sad"></i>
                                </div><!-- /.card-right -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->

                <!-- สรุป-->
                <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">All</h4>
                                    <canvas id="allChart" height="175"></canvas>
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="box-title">BenchCheck</h4>
                                            <canvas id="bcChart"></canvas>
                                        </div>
                                    </div><!-- /.card -->
                                </div>

                                <div class="col-lg-6 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="box-title">Picking</h4>
                                            <canvas id="pkChart"></canvas>
                                        </div>
                                    </div><!-- /.card -->
                                </div>
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>
                <!-- /สรุป-->
        
                <!-- Latest -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <?php
                                    $conn = mysqli_connect("localhost","root","","project_pi");
                                    $query = "SELECT * FROM employee";
                                    $query_run = mysqli_query($conn,$query);
                                ?>
                                    <table id="bootstrap-data-table" class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:10%">Date</th>
                                                <th style="width:20%">Name</th>
                                                <th style="width:10%">Zone</th>
                                                <th style="width:10%;text-align: center;">Target</th>
                                                <th style="width:10%;text-align: center;">Productivity</th>
                                                <th style="width:10%;text-align: center;">Error</th>
                                                <th style="width:10%;text-align: center;">image</th>
                                                <th style="width:10%;text-align: center;">Status</th>
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
                                                            <td style="vertical-align: middle;"><?php echo $row['fullname'],' ',$row['lastname'];?></td>
                                                            <td style="vertical-align: middle;"><?php echo $row['zones'];?></td>
                                                            <td style ="text-align: center;vertical-align: middle;"><?php echo $row['targets'];?></td>
                                                            <td style ="text-align: center;vertical-align: middle;"><?php echo $row['product'];?></td>
                                                            <td style ="text-align: center;vertical-align: middle;"><?php echo $row['error_target'];?></td>
                                                            <td style ="text-align: center;vertical-align: middle;">
                                                                <img src="<?php echo $row['pic'];?>" width="50px" height="50px" alt="Image" >
                                                            </td>
                                                            <td style="text-align: center;vertical-align: middle;">
                                                                <?php
                                                                    if($row['error_target'] < 2 && $row['product'] >= $row['targets'])
                                                                    {
                                                                        echo '<span style="border-radius:6px;padding:4px;background-color:#5cb85c;color:white;">Very Good<span>';
                                                                    }
                                                                    elseif($row['error_target'] < 2 && $row['product'] < $row['targets'])
                                                                    {
                                                                        echo '<span style="border-radius:6px;padding:4px;background-color:#f0ad4e;color:white;">Good<span>';
                                                                    }
                                                                    elseif($row['error_target'] >= 2 && $row['product'] >= $row['targets'])
                                                                    {
                                                                        echo '<span style="border-radius:6px;padding:4px;background-color:#f0ad4e;color:white;">Good<span>';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo '<span style="border-radius:6px;padding:4px;background-color:#d9534f;color:white;">Fair<span>';
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>
                    </div>
                <!-- /.Latest -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

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
    
    <!--  Chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
    <script>
        var xValues = ["Very good", "Good", "Fair"];
        var yValues_pk = [<?php echo $pk_very;?>, <?php echo $pk_good1+$pk_good2;?>, <?php echo $pk_fair;?>];
        var yValues_bc = [<?php echo $bc_very;?>, <?php echo $bc_good1+$bc_good2;?>, <?php echo $bc_fair;?>];
        var barColors = [
        "#5cb85c",
        "#f0ad4e",
        "#d9534f",
        ];

        new Chart("pkChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues_pk
            }]
        }
        });

        new Chart("bcChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues_bc
            }]
        }
        });
        

        var ctx = document.getElementById("allChart").getContext("2d");
        var data = {
        labels: ["Very good", "Good", "Fair"],
        datasets: [{
            label: "All",
            backgroundColor: "#a57150",
            data: [<?php echo $result_very;?>, <?php echo $result_good1+$result_good2;?>,<?php echo $result_fair;?>]
        }, {
            label: "BenchCheck",
            backgroundColor: "#5bc0de",
            data: yValues_bc
        }, {
            label: "PICKING",
            backgroundColor: "pink",
            data: yValues_pk
        }]
        };

        var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            barValueSpacing: 20,
            scales: {
            yAxes: [{
                ticks: {
                min: 0,
                }
            }]
            }
        }
        });

    </script>
</body>
</html>
