<?php
// กำหนดค่า Access-Control-Allow-Origin ให้เครื่องอื่น ๆ สามารถเรียกใช้งานหน้านี้ได้
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// ตั้งค่าการเชื่อมต่อฐานข้อมูล
$link = mysqli_connect('localhost', 'root', '', 'db');
mysqli_set_charset($link, 'utf8');

$requestMethod = $_SERVER["REQUEST_METHOD"];

// ตรวจสอบหากใช้ Method GET
if ($requestMethod == 'GET') {
    // ตรวจสอบการส่งค่า course_code
    if (isset($_GET['courset_code']) && !empty($_GET['course_code'])) {
        $course_code = $_GET['course_code'];

        // คำสั่ง SQL กรณีมีการส่งค่า course_code มาให้แสดงเฉพาะข้อมูลของ course_code นั้น
        $sql = "SELECT * FROM course WHERE course_code = '$course_code'";
    } else {
        // คำสั่ง SQL แสดงข้อมูลทั้งหมด
        $sql = "SELECT * FROM course";
    }

    $result = mysqli_query($link, $sql);

    // สร้างตัวแปร array สำหรับเก็บข้อมูลที่ได้
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }

    // ส่งข้อมูลเป็น JSON
    echo json_encode($arr);
}

// ตรวจสอบหากใช้ Method POST
if ($requestMethod == 'POST') {
    // อ่านข้อมูลที่ส่งเข้ามาและแปลงเป็น array
    $data = file_get_contents("php://input");
    $result = json_decode($data, true);

    // ตรวจสอบว่าข้อมูลไม่ว่าง
    if (!empty($result)) {
        $course_code = $result['course_code'];
        $course_name = $result['course_name'];
        $gender = $result['gender'];

        // คำสั่ง SQL สำหรับเพิ่มข้อมูลใน Database
        $sql = "INSERT INTO course (course_code, course_name, gender) VALUES ('$course_code', '$course_name', '$credit')";

        // ทำการ query เพื่อเพิ่มข้อมูล
        $insertResult = mysqli_query($link, $sql);

        // ตรวจสอบสถานะการเพิ่มข้อมูล
        if ($insertResult) {
            echo json_encode(['status' => 'ok', 'message' => 'Insert Data Complete']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No Data']);
    }
}

// ตรวจสอบหากใช้ Method PUT
if ($requestMethod == 'PUT') {
    // อ่านข้อมูลที่ส่งเข้ามาและแปลงเป็น array
    $data = file_get_contents("php://input");
    $result = json_decode($data, true);

    // ตรวจสอบว่าข้อมูลไม่ว่าง
    if (!empty($result)) {
        $course_code = $result['course_code'];
        $course_name = $result['course_name'];
        $credit = $result['credit'];

        // คำสั่ง SQL สำหรับแก้ไขข้อมูลใน Database
        $sql = "UPDATE course SET course_name = '$course_name', course = '$credit' WHERE course_code = '$course_code'";

        // ทำการ query เพื่อแก้ไขข้อมูล
        $updateResult = mysqli_query($link, $sql);

        // ตรวจสอบสถานะการแก้ไขข้อมูล
        if ($updateResult) {
            echo json_encode(['status' => 'ok', 'message' => 'Update Data Complete']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No Data']);
    }
}

// ตรวจสอบหากใช้ Method DELETE
if ($requestMethod == 'DELETE') {
    // ตรวจสอบว่ามีการส่งค่า course_code มาหรือไม่
    if (isset($_GET['course_code']) && !empty($_GET['course_code'])) {
        $course_code = $_GET['course_code'];

        // คำสั่ง SQL สำหรับลบข้อมูลใน Database ตามค่า course_code ที่ส่งมา
        $sql = "DELETE FROM course WHERE course_code = '$course_code'";
        $deleteResult = mysqli_query($link, $sql);

        // ตรวจสอบสถานะการลบข้อมูล
        if ($deleteResult) {
            echo json_encode(['status' => 'ok', 'message' => 'Delete Data Complete']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No student_code provided']);
    }
}
?>
