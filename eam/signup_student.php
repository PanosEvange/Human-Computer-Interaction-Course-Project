<?php
    include 'login_db.php';
    // define variables and set to empty values
    $email = $pass = $passConf = $firstName = $lastName = $date = $uni = $dept = $am = $address = $phone = "";
    $succ = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        $pass = $_POST["password"];
        $passConf = $_POST["passwordConf"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $date = $_POST["date"];
        $uni = $_POST["university"];
        $dept = $_POST["department"];
        $am = $_POST["am"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        require_once 'login_db.php'; //db info

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = ("INSERT INTO Users (Email, Password, FirstName,
                                LastName, DateOfBirth, Phone, Address, UserType)
                                VALUES ('$email', '$pass', '$firstName',
                                    '$lastName', '$date', '$phone', '$address', 'Student')");

        if ($conn->query($sql) === TRUE) {
            $succ = "Επιτυχής καταχώρηση!";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $last_id = $conn->insert_id;
        $sql = ("INSERT INTO Student (idStudent, DepartmentName, UniversityName, AM)
                                VALUES ($last_id, '$uni', '$dept', '$am')");
        if ($conn->query($sql) === TRUE) {
            $succ = "Επιτυχής καταχώρηση!";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
