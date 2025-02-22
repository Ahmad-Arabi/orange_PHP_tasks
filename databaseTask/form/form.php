<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="my-3 mx-5">
    <h1>Students Table</h1>
    <a class='btn btn-primary' href='/website/databaseTask/form/create.php'>Add New Student</a>
    <table id="main_table" class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Major</th>
            <th>Enrollment Year</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully <br>"; 
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage() . "<br>";
            }
            echo "<hr>";

            $sql= "SELECT * FROM students";
            $stmt = $pdo->query($sql);
            while ($student = $stmt->fetch(PDO::FETCH_ASSOC)) {

                echo "<tr>
                    <td>$student[student_id]</td>
                    <td>$student[first_name]</td>
                    <td>$student[last_name]</td>
                    <td>$student[email]</td>
                    <td>$student[date_of_birth]</td>
                    <td>$student[gender]</td>
                    <td>$student[major]</td>
                    <td>$student[enrollment_year]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/website/databaseTask/form/edit.php?student_id=$student[student_id]'>Update</a>
                        <a class='btn btn-danger btn-sm' href='/website/databaseTask/form/delete.php?student_id=$student[student_id]'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>