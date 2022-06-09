<?php
session_start();
$con = mysqli_connect("localhost","root","","project_pi");

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['import_file_btn']))
{
    $allowed_ext = ['xls', 'csv', 'xlsx'];

    $fileName = $_FILES['import_file']['name'];
    $checking = explode(".", $fileName);
    $file_ext = end($checking);

    if(in_array($file_ext, $allowed_ext))
    {
        $targetPath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $id = $row['1'];
                $dates = $row['0'];
                $fullname = $row['2'];
                $lastname = $row['3'];
                $zones = $row['4'];
                $targets = $row['5']; 
                $product = $row['6'];
                $error_target = $row['7'];

                $check = "SELECT id FROM employee WHERE id='$id' ";
                $check_result = mysqli_query($con, $check);

                if(mysqli_num_rows($check_result) > 0)
                {
                    $up_query = "UPDATE `employee` set dates = '$dates', 
                                                    fullname = '$fullname',
                                                    lastname = '$lastname',
                                                    zones = '$zones',
                                                    targets = '$targets',
                                                    product = '$product',
                                                    error_target = '$error_target'
                                                WHERE id ='$id' ";
                    $up_result = mysqli_query($con, $up_query);
                    $msg = 1;
                                                
                }
                else
                {
                    $in_query = "INSERT INTO employee (id,dates,fullname,lastname,zones,targets,product,error_target)
                                    VALUES ('$id','$dates','$fullname','$lastname','$zones','$targets','$product','$error_target')";
                    $in_result = mysqli_query($con, $in_query);
                    $msg = 1;
                }
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['status'] = '<span><div class="alert alert-success" role="alert">File Imported Successfully</div><span>';
            header("Location: import.php");
            exit(0);
        }
        else
        {
            $_SESSION['status'] = '<span><div class="alert alert-danger" role="alert">File Importing Failed</div><span>';
            header("Location: import.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status'] = '<span><div class="alert alert-warning" role="alert">Invalid File</div><span>';
        header("Location: import.php");
        exit(0);
    }
}

?>