<?php
include "action.php";
?>
<html>
<head>
<title>Curd Operation</title></head>
<body>
<?php
        if(isset($_GET["Update"]))
        {
            $id=$_GET["Stu_id"] ?? null;
            $where= array("Stu_id"=>$id);
            $row=$obj->select_record("student", $where);
?>
        <form action="" method="POST" enctype="multipart/form-data" >
    <h3>Update a student</h3>
    <table border=1>
    <tr><td></td><td><input type="hidden" name="stu_id"  value="<?php echo $row["Stu_id"];  ?>"></td></tr>
    <tr><td>Enter Name</td><td><input type="text" name="stu_n" value="<?php echo $row["name"];  ?>"></td></tr>
    <tr><td>Enter Email</td><td><input type="text" name="stu_m" value="<?php echo $row["email"]; ?>"></td></tr>
    <tr><td>Enter Course</td><td><input type="text" name="stu_c" value="<?php echo $row["course"]; ?>"></td></tr>
    <tr><td>Enter Branch</td><td><input type="text" name="stu_b" value="<?php echo $row["branch"]; ?>"></td></tr>
    <tr><td>Upload your photo</td><td><input type="file" name="img"> <img src="./Images/<?php echo $row["photo"]; ?>" height=100 width=100></td></tr>
    </table>
    <input type="submit" value="Update Student" name="Update">
<?php
        }
        else
        {
?>
    <form action="action.php" method="POST" enctype="multipart/form-data" >
    <h3>Register a student</h3>
    <table border=1>
    <tr><td>Enter Name</td><td><input type="text" name="stu_name"></td></tr>
    <tr><td>Enter Email</td><td><input type="text" name="stu_mail"></td></tr>
    <tr><td>Enter Course</td><td><input type="text" name="stu_course"></td></tr>
    <tr><td>Enter Branch</td><td><input type="text" name="stu_branch"></td></tr>
    <tr><td>Upload your photo</td><td><input type="file" name="image"></td></tr>
    <tr><td>Enter Password</td><td><input type="text" name="stu_pass"></td></tr>
    </table>
    <input type="submit" value="Add Student" name="add">
    <?php
        }
?>
<hr><h3>Details of students</h3>
<table border=1>
    <tr>
    <td>Name</td>
    <td>Email</td>
    <td> Course</td>
    <td> Branch</td>
    <td> photo</td>
    <td>Edit</td>
    <td>Delete</td>
    </tr>
<?php
        $myRow=$obj->fetch_record("student");
        foreach($myRow as $row)
        {
?>
    <tr>
    <td>  <?php echo $row["name"];  ?>  </td>
    <td>  <?php echo $row["email"];  ?>  </td>
    <td>  <?php echo $row["course"];  ?>  </td>
    <td>  <?php echo $row["branch"];  ?>  </td>
    <td> <img src="./Images/<?php echo $row["photo"]; ?>" height=100 width=100>  </td>
    <td><a href="index.php?Update=1&Stu_id=<?php echo $row["Stu_id"]; ?>">Edit</a></td>
    <td><a href="action.php?Delete=1&Stu_id=<?php echo $row["Stu_id"]; ?>">Delete</a></td>
    </tr>
<?php
        }
?>
</table>

    </form>
</body>
</html>
