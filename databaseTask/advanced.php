<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}

echo "<hr>";

//9
$sql = "SELECT students.first_name, students.last_name
        FROM enrollments
        JOIN students ON enrollments.student_id = students.student_id
        GROUP BY students.student_id
        HAVING count(course_id) >= 3";
    
$stmt = $pdo->query($sql);

echo "Name of the students taking more than 3 courses: <br><br>";
if ($stmt->rowCount() > 0) {

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "{$row['first_name']} {$row['last_name']} <br>";
    }
} else {
    echo "No students found! <br>";
}

echo "<hr>";

//10
$sql = "SELECT students.first_name, students.last_name
        FROM enrollments
        JOIN students ON enrollments.student_id = students.student_id
        WHERE grade = ''";
    
$stmt = $pdo->query($sql);

echo "Students with incomplete grades: <br><br>";
if ($stmt->rowCount() > 0) {

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "{$row['first_name']} {$row['last_name']} <br>";
    }
} else {
    echo "No students with incomplete grades! <br>";
}

echo "<hr>";

//11
$sql = "SELECT
            CASE    
                WHEN grade = 'A' THEN 4.0
                WHEN grade = 'A-' THEN 3.7
                WHEN grade = 'B+' THEN 3.3
                WHEN grade = 'B' THEN 3.0
                ELSE NULL
            END
        AS numeric_grades, students.first_name, students.last_name
        FROM enrollments
        JOIN students ON enrollments.student_id = students.student_id";
    
$stmt = $pdo->query($sql);

echo "The student with highest average grade is: <br><br>";
if ($stmt->rowCount() > 0) {

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $avg = $row['numeric_grades'];
        echo "{$row['first_name']} {$row['last_name']} average is {$avg} <br>";
    }
} else {
    echo "No students with incomplete grades! <br>";
}

echo "<hr>";
?>