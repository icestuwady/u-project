<?php
    $conn = mysqli_connect("localhost","root","","project_pi");
    $query = "SELECT * FROM employee";
    $query_run = mysqli_query($conn,$query);

    $result_very = 0;
    $result_good1 = 0;
    $result_good2 = 0;
    $result_fair = 0;

    $pk_very = 0;
    $pk_good1 = 0;
    $pk_good2 = 0;
    $pk_fair = 0;

    $bc_very = 0;
    $bc_good1 = 0;
    $bc_good2 = 0;
    $bc_fair = 0;

    $picking = array('picking', 'pickinga', 'picking a', 'pickingb', 'picking b');

    if(mysqli_num_rows($query_run) >0)
    {
        foreach($query_run as $row)
        {
            if($row['error_target'] < 2 && $row['product'] >= $row['targets'])
            {
                $result_very = $result_very+1;
                if(in_array(strtolower($row['zones']), $picking))
                {
                    $pk_very = $pk_very+1;
                }
                elseif(strtolower($row['zones']) == 'benchcheck' || strtolower($row['zones']) == 'bench check')
                {
                    $bc_very = $bc_very+1;
                }
            }
            elseif($row['error_target'] < 2 && $row['product'] < $row['targets'])
            {
                $result_good1 = $result_good1+1;
                if(in_array(strtolower($row['zones']), $picking))
                {
                    $pk_good1 = $pk_good1+1;
                }
                elseif(strtolower($row['zones']) == 'benchcheck' || strtolower($row['zones']) == 'bench check')
                {
                    $bc_good1 = $bc_good1+1;
                }
            }
            elseif($row['error_target'] >= 2 && $row['product'] >= $row['targets'])
            {
                $result_good2 = $result_good2+1;
                if(in_array(strtolower($row['zones']), $picking))
                {
                    $pk_good2 = $pk_good2+1;
                }
                elseif(strtolower($row['zones']) == 'benchcheck' || strtolower($row['zones']) == 'bench check')
                {
                    $bc_good2 = $bc_good2+1;
                }
            }
            else
            {
                $result_fair = $result_fair+1;
                if(in_array(strtolower($row['zones']), $picking))
                {
                    $pk_fair = $pk_fair+1;
                }
                elseif(strtolower($row['zones']) == 'benchcheck' || strtolower($row['zones']) == 'bench check')
                {
                    $bc_fair = $bc_fair+1;
                }
            }
        }
    }
?>