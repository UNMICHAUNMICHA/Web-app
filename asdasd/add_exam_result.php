<?php
require("connect_db.php");
$course_code = $_GET["course_code"];
echo "<center>";
echo "<form action=save_add_exam_result.php method=post>";
echo "<table border=1 width=40%>";
echo "<input type=hidden name=course_code value=$course_code />";
echo "<tr><td>Course Code:</td><td>".$course_code."</td></tr>";
echo "<tr><td>Student Code:</td><td><input type=text name=student_code /></td></tr>";
echo "<tr><td>Point:</td><td><input type=text name=point /></td></tr>";
echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>