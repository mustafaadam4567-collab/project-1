<?php
 include ("index.php"); //ربط صفحة تسجيل الطالب سجل الطلاب لتسجيل طالب جديد
$file = "file_students.txt"; //اسم الملف الذي يتم حفظ سجل الطلاب عليه
//  استقبال البيانات حفظها في الملف النصي اعلاه
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if(empty( $_POST["student"] && $_POST["email"]  && $_POST["id"] &&
            $_POST["year"] && $_POST["batch"])){
               echo "<P>ERROR!!</P><h2>Please be the formation of the form</h2>";
if (file_exists($file)){
    $item= file($file);
    echo "<h1>OLD STUDENTS REGISTERED</h1>";
    echo "<table width= 100% border =5px>";
    echo "<tr><th >Student Name</th><th>Email</th> <th>Student ID</th>
              <th>Student Year</th> <th>Batch</th></tr>";
    foreach ($item as $student) {
         $item = explode("**", trim($student));
        echo "<tr>";
        foreach ( $item  as $line) {
            echo "<td>$line</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
               exit(); } 
    else{
    $data_student = $_POST["student"] . "**" .
            $_POST["email"] . "**" .
            $_POST["id"] . "**" .
            $_POST["year"] . "**" .
            $_POST["batch"] .  PHP_EOL;
             file_put_contents($file, $data_student, FILE_APPEND);
             //وظيفةهذة الدالة حفظ البيانات في الملف ان وجد , وان لم يوجد تقوم بانشاء ملف نصي تلقاي
          echo "<b>تم التسجيل بالنجاح</b>";
//عرض سجل الطلاب بعد اضافة الطالب الجديد
if (file_exists($file)){
    $file_students = file($file);
    echo "<h1>STUDENTS REGISTERED</h1>";
    echo "<table border='10px' width='100%'>";
     echo "<tr><th >Student Name</th><th>Email</th> <th>Student ID</th>
              <th>Student Year</th> <th>Batch</th></tr>";
    foreach ($file_students as $student) {
        $data_student = explode("**", trim($student));
        echo "<tr>";
        foreach ($data_student as $line) 
            {
             echo "<td>$line</td>";
            }  
        echo "</tr>";
     }
    echo "</table>";
} } }
?>