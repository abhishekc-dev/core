<?php 

include_once __DIR__.'/connect.php';

$pkId = isset($_POST['emp_id'])  ?   $_POST['emp_id']  :   "" ;
$name = isset($_POST['emp_name'])  ?   $_POST['emp_name']  :   "" ;
$email = isset($_POST['emp_email']) ?  $_POST['emp_email']  : "" ; 
$mobile  =isset($_POST['emp_mobile']) ? $_POST['emp_mobile']  :  "" ; 
$dpt = isset($_POST['emp_dpt']) ? $_POST['emp_dpt'] : "" ; 
$salary  =isset($_POST['emp_salary']) ? $_POST['emp_salary'] :  "";

try{
    $sql = "UPDATE emp_tbl set emp_name = '$name',emp_email = '$email', emp_mobile = '$mobile', emp_dpt = '$dpt', emp_salary = '$salary' where emp_id = '$pkId' ";

    if(mysqli_query($conn,$sql)){
        echo 'Record Updated';
        header("Location:select-emp.php");
    }else{
        throw new mysqli_sql_exception();
    }

}catch(mysqli_sql_exception $e){
    echo $e->getMessage();
}

?>