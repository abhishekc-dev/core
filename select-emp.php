<?php

include_once __DIR__ . '/connect.php';

$sql = "SELECT * from emp_tbl";
$result_set = mysqli_query($conn, $sql);
$row_count = mysqli_num_rows($result_set);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/all.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <style>

    </style>
</head>

<body>
    <?php if ($row_count > 0): ?>
        <div class="card">
            <div class="card-header">
                <h1 class="text-danger">Employee Data</h1>
            </div>
            <div class="card-body">
                <a href="register-emp-controller.php">
                    <button class="px-2 py-1 rounded text-white bg-primary outline-none border border-none">
                        Add
                    </button>
                </a>
                <table border="1" rules="all" class="table table-warning table-hover mt-2">
                    <tr>
                        <th>Serial No.</th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Dept</th>
                        <th>Salary</th>
                        <th> <b> Edit </b> </th>
                        <th> <b> Delete </b> </th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($result_set)): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['emp_id']; ?></td>
                            <td><?php echo $row['emp_name']; ?></td>
                            <td><?php echo $row['emp_email']; ?></td>
                            <td><?php echo $row['emp_mobile']; ?></td>
                            <td><?php echo $row['emp_dpt']; ?></td>
                            <td><?php echo $row['emp_salary']; ?></td>
                            <td> <a href="edit-emp.php?emp_id=<?php echo $row['emp_id']; ?> "
                                    class="px-2 py-2 rounded text-white bg-success" style="text-decoration:none">Edit</a>
                            </td>
                            <td onclick return window.confirm("Are you sure?")> <a
                                    href="delete-emp.php?emp_id=<?php echo $row['emp_id']; ?> "
                                    class="px-2 py-2 rounded text-white bg-danger" style="text-decoration:none">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <?php echo 'No Record Found'; ?>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>