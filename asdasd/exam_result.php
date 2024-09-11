<?php
require("connect_db.php");
$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);
?>
<html>

<head>
    <title>Exam Result</title>
</head>

<body>
    <center><br>
        <h1> Select Course to show
        </h1><br>
        <form action=show_exam_result.php method="get">
            <select name="course_code">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row["course_code"]; ?>">
                        <?php echo $row["course_code"]; ?> <?php echo $row["course_name"]; ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Show">
        </form>
    </center>
</body>

</html>