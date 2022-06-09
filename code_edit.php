<?php
	$conn = mysqli_connect("localhost","root","","project_pi");

	if(ISSET($_POST['edit'])){

		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
        $previous = $_POST['previous'];
		$id = $_POST['id'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "UPDATE employee set pic = '$path' WHERE id = '$id'") or die(mysqli_error());
				echo '<span><div class="alert alert-success" role="alert">Image Updated Successfully</div><span>';
				header("location: import.php");
			}			
		}else{
			echo '<span><div class="alert alert-danger" role="alert">Image Updating Failed</div><span>';
		}
	}
?>