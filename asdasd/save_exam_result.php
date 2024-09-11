<?php
require("connect_db.php");
$id_edit = $_POST["id_edit"];
$course_code = $_POST["course_code"];
$student_code = $_POST["student_code"];
$point = $_POST["point"];
$sql ="UPDATE exam_result SET point='$point' WHERE id='$id_edit'
";
mysqli_query($conn, $sql);
echo $sql;
header("location: show_exam_result.php?course_code=$course_code");
exit(0);
?>