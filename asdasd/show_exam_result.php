<?php
require("connect_db.php");
$course_code = $_GET["course_code"];
$sql = "SELECT * FROM course WHERE course_code='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);
$sql = "SELECT E.*,S.student_name";
$sql .= " FROM exam_result AS E";
$sql .= " INNER JOIN student AS S ON E.student_code=S.student_code";
$sql .= " WHERE E.course_code='$course_code'";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<h1>Exam Result " . $course["course_name"] . "</h1>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th><th>Point</th><th>Edit</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["student_code"] . "</td><td>" . $row["student_name"]
. "</td><td>" . $row["point"] . "</td><td><a href='edit_exam_result.php?id=".$row["id"]."'>Edit</a></tr>";
}
echo "</table>";
echo "<a href='add_exam_result.php?course_code=$course_code'>Add Exam Result</a>";
echo "</center>";