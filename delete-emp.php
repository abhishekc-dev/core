<?php 

include_once __DIR__.'/connect.php';

$pkId = isset($_GET['emp_id']) ?  $_GET['emp_id'] : "" ; 

$sql = "DELETE from emp_tbl where emp_id={$pkId}";

if(mysqli_query($conn,$sql)){
        header("Location:select-emp.php");
    }else{
        echo 'Delete Error';
    }

?>