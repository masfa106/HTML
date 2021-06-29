<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['Name']) && isset($_POST['rollno']) &&
        isset($_POST['Date']) && isset($_POST['Attendence'])) {
        
        $Name = $_POST['Name'];
        $rollno = $_POST['rollno'];
        $Date = $_POST['Date'];
        $Attendence = $_POST['Attendence'];
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "Masfa";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            #$Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO Student(Name, rollno, Date, Attendence) values(?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            #$stmt->bind_param("s", $email);
            #$stmt->execute();
            #$stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$Name, $rollno, $Date, $Attendence);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>