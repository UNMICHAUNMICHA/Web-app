<?php
require('connect_db.php');
$sql = "SELECT student_code, student_name, gender FROM student";
$result = mysqli_query($conn, $sql);
?>
<center>
<br>
<table border="1">
    <tr>
        <th>Student Code</th>
        <th>Student Name</th>
        <th>Gender</th>
        <th>Edit student</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td><?php echo $row["student_code"]; ?></td>
                <td><?php echo $row["student_name"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><a href=edit_student.php?student_code=<?php echo $row["student_code"]; ?> . ">Edit</a></td></tr>
            </tr>
    <?php
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
</table>
<?php
    echo "<br><a href=add_student.php>Add student</a>";
?>
</center>