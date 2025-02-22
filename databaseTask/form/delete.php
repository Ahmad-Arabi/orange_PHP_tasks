<?php
if (isset($_GET["student_id"])) {
    $student_id = $_GET["student_id"];
    // echo "Student ID to be deleted: " . $student_id . "<br>";
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "<br>";
        echo "<hr>";
    }

    $sql = "DELETE FROM students WHERE student_id = $student_id";
    $stmt = $pdo->query($sql);
}

header("location: /website/databaseTask/form/form.php");
exit;
?>