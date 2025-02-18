<?php
//1
$db_server= "localhost";
$db_name= "database";
$db_user = "root";
$db_password ="";

$conn = "";

try {

    $conn = mysqli_connect($db_server,
                            $db_user,
                            $db_password,
                            $db_name);
                            echo "You are connected! <br><br>";
                        }
catch(mysqli_sql_exception) {
    echo "You are not connected! <br><br>";
}

//     $sql = "CREATE TABLE Instructors (
//             instructor_id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
//             first_name VARCHAR(35) NOT NULL, 
//             last_name VARCHAR(35) NOT NULL, 
//             email VARCHAR(50) NOT NULL UNIQUE, 
//             hire_date TIMESTAMP NOT NULL , 
//             department VARCHAR(35) NOT NULL)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table created";
// } 
// else {
//     echo "Error creating table" . mysqli_error($conn);

// }

//     $sql = "CREATE TABLE Enrollments (
//             enrollment_id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//             student_id INT(255) NOT NULL, 
//             course_id INT(255) NOT NULL, 
//             FOREIGN KEY (student_id) REFERENCES students(student_id),
//             FOREIGN KEY (course_id) REFERENCES courses(course_id),
//             grade VARCHAR(4) NOT NULL)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table Enrollments created";
// } 
// else {
//     echo "Error creating table" . mysqli_error($conn);

// }

//     $sql = "CREATE TABLE Course_Assignments (
//             assignment_id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//             instructor_id INT(255) NOT NULL, 
//             course_id INT(255) NOT NULL, 
//             semester VARCHAR(255) NOT NULL, 
//             FOREIGN KEY (instructor_id) REFERENCES Instructors(instructor_id),
//             FOREIGN KEY (course_id) REFERENCES courses(course_id),
//             year INT(5) NOT NULL)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table Course Assignments created";
// } 
// else {
//     echo "Error creating table" . mysqli_error($conn);

// }
?>