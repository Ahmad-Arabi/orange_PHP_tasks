<?php
include("database.php");

$sql = "INSERT INTO students (first_name, last_name, email, date_of_birth, gender, major, enrollment_year)
VALUES 
('Ahmad', 'Al-Zahrani', 'ahmad.alzahrani@example.com', '2000-05-10', 'Male', 'Computer Science' , 2023),
('Mohmamad', 'Al-Otaibi' , 'mohammad.alotaibi@example.com', '1999-11-20', 'Male', 'Biology', 2024)
,('Ali', 'Al-Qahtani', 'ali.alqahtani@example.com', '2001-01-15', 'Male', 'Mathematics', 2025)
,('Yousef', 'Al-Shamrani', 'yousef.alshamrani@example.com', '2002-08-30', 'Male', 'Physics', 2022)
,('Ameer', 'Al-Ghamdi','ameer.alghamdi@example.com', '2000-03-25', 'Male', 'Chemistry', 2023)
,('Noura', 'Al-Dosari', 'noura.aldosari@example.com', '2003-07-18', 'Female', 'English', 2024)
,('Sarah', 'Al-Shahrani', 'sarah.alshahrani@example.com', '1999-02-14', 'Female', 'Economics', 2022)
,('Fatima', 'Al-Harbi', 'fatima.alharbi@example.com', '2002-10-05', 'Female', 'Psychology', 2023)
,('Maryam', 'Al-Mutairi', 'maryam.almutairi@example.com	' , '2000-04-22', 'Female', 'Art', 2025),
('Layla', 'Al-Anzi', 'layla.alanzi@example.com', '2001-12-09', 'Female', 'History', 2025)";

if (mysqli_query($conn, $sql)) {
    echo "Students datas added to students table";
    } 
    else {
        echo "Error adding students" . mysqli_error($conn);
    }


$sql = "INSERT INTO courses (course_name, course_code, credits, department)
VALUES 
('Introduction to HTML & CSS', 'WD101', 3, 'Computer Science')
,('JavaScript Essentials', 'WD201', 4, 'Computer Science')
,('Responsive Web Design', 'WD301', 3, 'Information Technology')
,('Advanced Web Development with React', 'WD401', 4, 'Software Engineering')
,('Backend Development with Node.js', 'WD501', 4, 'Software Engineering')";

if (mysqli_query($conn, $sql)) {
    echo "Courses datas added to courses table";
    } 
    else {
        echo "Error adding courses" . mysqli_error($conn);
    }

$sql = "INSERT INTO instructors (first_name, last_name, email, hire_date, department)
VALUES 
('Aisha', 'Al-Hassan', 'aisha.alhassan@example.com', '2020-05-14', 'Web Development')
,('Omar', 'Al-Tamimi', 'omar.altamimi@example.com', '2021-08-22', 'Web Development')
,('Zainab', 'Al-Omari', 'zainab.alomari@example.com', '2019-03-10', 'Web Development')
,('Khalid', 'Al-Basri', 'khalid.albasri@example.com', '2022-01-18', 'Web Development')
,('Layla', 'Al-Saleh', 'layla.alsaleh@example.com', '2021-06-30', 'Web Development')";

if (mysqli_query($conn, $sql)) {
    echo "instructors datas added to instructors table";
    } 
    else {
        echo "Error adding instructors" . mysqli_error($conn);
    }

$sql = "INSERT INTO course_assignments (instructor_id, course_id , semester, year)
VALUES 
(1, 1, 'Fall', 2023)

,(2, 2, 'Spring', 2024)

,(3, 3, 'Fall', 2025)

,(4, 4, 'Spring', 2022)

,(5, 5, 'Fall', 2023)

,(1, 2, 'Spring', 2023)

,(2, 3, 'Fall', 2024)

,(3, 4, 'Spring', 2025)

,(4, 5, 'Fall', 2022)

,(5, 1, 'Spring', 2023)";

if (mysqli_query($conn, $sql)) {
    echo "course_assignments datas added to course_assignments table";
    } 
    else {
        echo "Error adding course_assignments" . mysqli_error($conn);
    }

$sql = "INSERT INTO enrollments (student_id, course_id, grade)
VALUES 
(1, 1, 'A')

,(1, 2, 'B')

,(2, 2, 'A-')

,(2, 3, 'B+')

,(3, 3, 'A')

,(3, 4, 'B')

,(4, 4, 'A-')

,(4, 5, 'B+')

,(5, 5, 'A')

,(5, 1, 'B-')

,(6, 1, 'B+')

,(6, 2, 'A')

,(7, 3, 'B-')

,(7, 4, 'B')

,(8, 5, 'A')

,(8, 1, 'B+')

,(9, 2, 'A-')

,(9, 3, 'B+')

,(10, 4, 'A')

,(10, 5, 'B')";

if (mysqli_query($conn, $sql)) {
    echo "enrollments datas added to enrollments table";
    } 
    else {
        echo "Error adding enrollments" . mysqli_error($conn);
    }

mysqli_close($conn);
?>