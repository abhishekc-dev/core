<?php 

include_once __DIR__.'/connect.php';
$pkId = isset($_GET['emp_id']) ? $_GET['emp_id'] : "" ;
$sql = "SELECT * from emp_tbl where emp_id=$pkId";
$result_set = mysqli_query($conn,$sql);
$row_count = mysqli_num_rows($result_set);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if($row_count>0):  ?>
<?php if($row = mysqli_fetch_assoc($result_set)):  ?>
    <form method="POST" action="update-emp.php"> 
    <p><input type="hidden" name="emp_id" value="<?php echo $row['emp_id'];  ?>" /> </p>
    <p> Name : <input type="text" name="emp_name" value="<?php echo $row['emp_name'];  ?>" /> </p> 
    <p> Email : <input type="text" name="emp_email" value="<?php echo $row['emp_email'];  ?>" /> </p>
    <p> Mobile : <input type="text" name="emp_mobile" value="<?php echo $row['emp_mobile'];  ?>"  /> </p>
    <p> Dept : <input type="text" name="emp_dpt" value="<?php echo $row['emp_dpt'];  ?>" /> </p>
    <p> Salary : <input type="text" name="emp_salary" value="<?php echo $row['emp_salary'];  ?>" /> </p>
    <?php  endif; ?>
    <input type="submit" name="submit"/>
    </form>
    <?php else: ?>
    <?php echo 'No Record Found'; ?> 
    <?php endif;  ?>
</body>
</html>