<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
    echo "<hr>";
}

$student_id = "";
$first_name = "";
$last_name = "";
$email = "";
$date_of_birth = "";
$gender = "";
$major = "";
$enrollment_year = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["student_id"])) {
        header("location: /website/databaseTask/form.php");
        exit;
    }
    $student_id = $_GET["student_id"];

    $sql = "SELECT * FROM  students WHERE student_id = $student_id";
        
    $stmt = $pdo->query($sql);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$student) {
        header("location: /website/databaseTask/form.php");
        exit;
    }
    $student_id = $student["student_id"];
    $first_name = $student["first_name"];
    $last_name = $student["last_name"];
    $email = $student["email"];
    $date_of_birth = $student["date_of_birth"];
    $gender = $student["gender"];
    $major = $student["major"];
    $enrollment_year = $student["enrollment_year"];

}
else {
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name =$_POST['last_name'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $major = $_POST['major'];
    $enrollment_year = $_POST['enrollment_year'];

    do {
        if (empty($student_id) || empty($first_name) || empty($last_name) || empty($email) || empty($date_of_birth) || empty($gender) || empty($major) || empty($enrollment_year)) {
            $errorMessage = "All the fileds are required";
            break;
        }
        
        try {
            
            $sql = "UPDATE students 
                    SET first_name = '$first_name', last_name = '$last_name', email = '$email', date_of_birth = '$date_of_birth', gender = '$gender', major = '$major', enrollment_year = '$enrollment_year'
                    WHERE student_id ='$student_id'";
            
    
                
            $stmt = $pdo->query($sql);
        } catch (PDOException $e) {

            $errorMessage = "Invalid query: " . $e->getMessage();
            break;
        }

        $successMessage = "Student information updated successfully!";
     
            
    } while (false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Update Student's Details</h2>
        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role = 'alert'>
                <strong>$errorMessage</strong>
                <button type = 'button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label = 'Close'></button>
            </div>";
        }

        ?>
        <form method="post">
            <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">First Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Date of Birth</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="date_of_birth" value="<?php echo $date_of_birth; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Gender</label>
                <div class="col-sm-6">
                    <select name="gender" id="gender" class="form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Major</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="major" value="<?php echo $major; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Enrollment Year</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="enrollment_year" value="<?php echo $enrollment_year; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/website/databaseTask/form/form.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>