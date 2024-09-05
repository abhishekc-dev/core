<?php 

include_once __DIR__.'/connect.php';
if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $dpt = $_POST['dpt'];
        $salary = $_POST['salary'];
        $encpass = md5($pass);

        if($pass == $cpass){
            $sql = "INSERT INTO emp_tbl(emp_name,emp_email,emp_mobile,emp_dpt,emp_salary,emp_pass) values('$name','$email','$mobile','$dpt','$salary','$encpass')";
            
            if(mysqli_query($conn,$sql)){
                header("Location:select-emp.php");
            }else{
                echo 'Insert Error';
            }
        }else{
            echo 'Password Not Matched';
        }
    }else{
    header("Location:emp-register.php");
}
?>