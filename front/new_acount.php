<?php
session_start();

include ('db_connect.php');

$name =     $_SESSION['name'];
$id =    $_SESSION['id'] ;
$phone=    $_SESSION['phone'];
$address=    $_SESSION['address'] ;
$password=    $_SESSION['password'] ;
$role=    $_SESSION['role'];


echo "HELLO";
echo "\n id=".$id;
echo "\n phone=".$phone;
echo "\n address=".$address;
echo "\n password=".$password;
echo "\n role=".$role;
echo "\n roless=".$name;


if ( $_SESSION['name']&&$_SESSION['id']&&$_SESSION['phone']&&$_SESSION['address']&&$_SESSION['password']&&$_SESSION['role'] )
{
    if($role == 'admin'){

    }
    if($role == 'faculty'){
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the provided values exist in the 'faculty' table
$sql = "SELECT * FROM faculty WHERE faculty_name = '$name' AND faculty_id = '$id' AND phone_number = '$phone' AND address = '$address'";

$result = $conn->query($sql);

// If a matching record is found in the faculty table, insert into the login table
if ($result->num_rows > 0) {
    // Prepare the insert query for the login table
    $insert_sql = "INSERT INTO login (id, role, name, password) VALUES ('$id', '$role', '$name', '$hashed_password')";
    
    // Execute the insert query
    if ($conn->query($insert_sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['massage'] = "Account created successfully.";
        header('Location: signup.php');
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['massage'] = "Error inserting data into login table.";
        header('Location: signup.php');

    }
} else {
    $_SESSION['status'] = "error";
    $_SESSION['massage'] = "Invalid faculty details.";
    header('Location: signup.php');

}
    }
    if($role == 'student'){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the provided values exist in the 'faculty' table
$sql = "SELECT * FROM students_info WHERE student_name  = '$name' AND student_roll = '$id' AND phone_no = '$phone' AND address = '$address'";

$result = $conn->query($sql);

// If a matching record is found in the faculty table, insert into the login table
if ($result->num_rows > 0) {
    // Prepare the insert query for the login table
    $insert_sql = "INSERT INTO login (id, role, name, password) VALUES ('$id', '$role', '$name', '$hashed_password')";
    
    // Execute the insert query
    if ($conn->query($insert_sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['massage'] = "Account created successfully.";
        header('Location: signup.php');
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['massage'] = "Error inserting data.";
        header('Location: signup.php');

    }
} else {
    $_SESSION['status'] = "error";
    $_SESSION['massage'] = "Invalid details.";
    header('Location: signup.php');

}
    }
    }

else
{
        $_SESSION['status'] = "error";
        $_SESSION['massage'] = "Please fill all the fields.";
    header('Location: signup.php');
}

?>