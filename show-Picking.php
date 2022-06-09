<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Picking</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="owlcarousel/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

  <!-- navbar -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="import.php"><i class="fa fa-upload"></i> Update</a>
    <a href="show-All.php"><i class="fa fa-desktop"></i> All</a>
    <a href="show-BenchCheck.php"><i class="fa fa-check-square-o"></i> BenchCheck</a>
  </div>
  <span onclick="openNav()"><i class="fa fa-bars" aria-hidden="true" id="menu"></i></span>
  <!-- end navbar -->

  <div id="main">
    <h1>Individual Productivity Picking</h1>
  </div>

  <!-- show card -->
  <div class="container-fluid">
      <div class="row" style="padding-top:30px;">
        <!-- card green -->
        <?php
          $conn = mysqli_connect("localhost","root","","project_pi");
          $result = mysqli_query($conn,"SELECT * FROM `employee` WHERE zones = 'Picking' AND error_target < 2 AND product >= targets;");
          $num = mysqli_num_rows($result);
          $i = 0;
        ?>
        <div class="col-md-5" style ="display: flex;
                                    align-items: center; 
                                    justify-content: center;">
          <div class="fireworksDiv"></div>
          <!-- card -->
          <?php 
          while ($i < $num){
            $row = mysqli_fetch_array($result);
              $dates = $row['dates'];
              $fullname = $row['fullname'];
              $lastname = $row['lastname'];
              $zones = $row['zones'];
              $targets = $row['targets']; 
              $product = $row['product'];
              $error_target = $row['error_target'];
              $pic = $row['pic'];
            ?>
          <div class="slideshow-container">
            <div class="text-center mySlides fade">
              <div class="card" style="width:430px; padding:0px 10px; background: rgba(255, 255, 255)">
                <div class="card-body">
                  <h1 style="font-size:50px; 
                            font-weight: bold; 
                            color:#5cb85c; 
                            padding-bottom:30px;">Very Good</h1>
                  <img class="align-self-center rounded-circle mr-3" style="width:200px; height:200px;" alt="" src="<?php echo $row['pic'];?>">
                  <h3 style="font-weight: bold; padding:20px 0px;"><?php echo $row['fullname'],' ',$row['lastname'];?></h3>
                  <hr>
                  <div class="row" style="font-weight: bold; 
                                          padding:10px 0px; 
                                          background:linear-gradient(45deg,#5cb85c,#59e070)">
                    <div class="col">Target
                      <h2 style="font-weight: bold; 
                                color:white;
                                padding:10px;"><?php echo $row['targets'];?></h2>
                    </div>
                    <div class="col">Productivity
                      <h2 style="font-weight: bold; 
                                color:white;
                                padding:10px;"><?php echo $row['product'];?></h2> 
                    </div>
                    <div class="col">Error
                      <h2 style="font-weight: bold; 
                                color:white;
                                padding:10px;"><?php echo $row['error_target'];?></h2>
                    </div>
                  </div>
                  <hr>
                  <p>Latest Date: <?php echo $row['dates'];?></p>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; } ;?>
          <!-- end card -->
        </div>
        <!-- end card green-->

        <!-- card yellow,red -->
        <?php
          $conn = mysqli_connect("localhost","root","","project_pi");
          $result = mysqli_query($conn,"SELECT * FROM `employee` WHERE zones = 'Picking' EXCEPT SELECT * FROM `employee`  WHERE error_target < 2 AND product >= targets;");
          $num = mysqli_num_rows($result);
          $i = 0;
        ?>
        <div class="col-md-7" style="padding-top:30px;">
          <section id="slider" class="pt-5">
            <div class="container">
              <div class="slider">
                  <div class="owl-carousel">
                    <?php 
                      while ($i < $num){
                        $row = mysqli_fetch_array($result);
                          $dates = $row['dates'];
                          $fullname = $row['fullname'];
                          $lastname = $row['lastname'];
                          $zones = $row['zones'];
                          $targets = $row['targets']; 
                          $product = $row['product'];
                          $error_target = $row['error_target'];
                          $pic = $row['pic'];
                        ?>
                    <div class="slider-card" style="padding:10px;">
                      <?php
                              if(($row['error_target'] < 2 && $row['product'] < $row['targets']) || ($row['error_target'] >= 2 && $row['product'] >= $row['targets']))
                              {
                                echo '<h4 style="text-align:center;
                                        font-weight:bold;
                                        color:white; 
                                        padding:10px; 
                                        background:linear-gradient(45deg,#FFB64D,#ffcb80)">Good</h4>';
                              }else{
                                echo '<h4 style="text-align:center;
                                        font-weight:bold;
                                        color:white; 
                                        padding:10px; 
                                        background: linear-gradient(45deg,#FF5370,#ff869a)">Fair</h4>';
                              }
                            ?>
                      <div class="d-flex justify-content-center align-items-center">
                        <img class="rounded-circle" style="width:100px; height:100px;" src="<?php echo $row['pic'];?>" alt="" >
                      </div>
                      <h6 class="text-center" style="font-weight: bold;padding:10px 0px;"><?php echo $row['fullname'],' ',$row['lastname'];?></h6>
                      <hr>
                      <div class="row" style="font-weight: bold;text-align:center;">
                        <div class="col" style="text-align:center;">
                          <h6 style="font-size: 10px;">Target</h6>
                          <h6 style="font-weight: bold; padding:10px;"><?php echo $row['targets'];?></h6>
                        </div>
                        <div class="col">
                          <h6 style="font-size: 10px;">Productivity</h6>
                          <h6 style="font-weight: bold; padding:10px;"><?php echo $row['product'];?></h6> 
                        </div>
                        <div class="col">
                          <h6 style="font-size: 10px;">Error</h6>
                          <h6 style="font-weight: bold; padding:10px;"><?php echo $row['error_target'];?></h6>
                        </div>
                      </div>
                      <p style="text-align:center; font-size: 10px;">Latest Date: <?php echo $row['dates'];?></p>
                    </div> 
                    <?php $i++; } ;?>      
                  </div>
                </div>
            </div>
          </section>
        </div>
        <!--end card yellow,red-->
        <div  class=""></div>
	    </div>
  </div>
  <!-- end show card -->




    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	  <script src="owlcarousel/js/owl.carousel.min.js"></script>
	  <script src="owlcarousel/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fireworks-js@latest/dist/fireworks.js"></script>

    <!-- nav -->
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

      const fireDiv = document.querySelector('.fireworksDiv');
      const fireworks = new Fireworks(fireDiv,{
        delay:{min:30, max:60},
        trace: 5,
        speed: 0.5,
        particles: 200,
      })

      fireworks.start();

      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 15000); // Change image every 2 seconds
      }
      
    </script>

</body>
</html>