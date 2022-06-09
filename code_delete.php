<?php   
 include 'conn.php';  
 if (ISSET($_POST['delete'])) {  
      $id = $_POST['id'];  
      $query = "DELETE FROM `employee` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:import.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  