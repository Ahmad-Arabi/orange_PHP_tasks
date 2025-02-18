<?php
include('database.php');
//1
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    echo "<table border=1px>";
    echo "<tr><td>student_id</td> <td>first_name</td> <td>last_name</td> <td>email</td> <td>date_of_birth</td> 
        <td>gender</td> <td>major</td> <td>enrollment_year</td></tr>";
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>{$row["0"]}</td>" . "<td>{$row["1"]}</td>" . "<td>{$row["2"]}</td>" . "<td>{$row["3"]}</td>"
                . "<td>{$row["4"]}</td>" . "<td>{$row["5"]}</td>" . "<td>{$row["6"]}</td>" . "<td>{$row["7"]}</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else {
    echo "No student found";
}
echo "<hr>";

//2
$sql = "SELECT count(*) as total_courses FROM courses";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "Total number of courses is {$row["total_courses"]}";
} 
else {
    echo "No courses found";
}

echo "<hr>";

//3
$sql = "SELECT * FROM enrollments WHERE course_id = '2'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {

    $sql = "SELECT course_name FROM courses WHERE course_id = '2'";
    $course = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($course);
    echo "Students enrolled in {$row["course_name"]}: <br><br>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "{$row["student_id"]} <br>"

        $sql = "SELECT * FROM students WHERE student_id = '{$row["student_id"]}'";
        $name = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($name);
        echo $row["first_name"] . $row["last_name"] . "<br>";
    }
} 
else {
    echo "No courses found";
}

echo "<hr>";

//4
$sql = "SELECT email FROM instructors WHERE department = 'Web Development'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["email"] . "<br>";
    }
} 
else {
    echo "No emails found";
}

echo "<hr>";

//5
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    

    while ($course= mysqli_fetch_assoc($result)) {
        $sql = "SELECT count('course_id') as number_of_students FROM enrollments WHERE course_id = '{$course["course_id"]}'";
        $result1 = mysqli_query($conn, $sql);
        $count= mysqli_fetch_assoc($result1);
       
        echo "{$count["number_of_students"]} students enrolled in {$course["course_name"]} <br>";
    }
} 
else {
    echo "No courses found";
}

echo "<hr>";

mysqli_close($conn);
?>