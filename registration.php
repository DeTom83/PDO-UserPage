<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/style2.css">

</head>
<body> 
    <header>
        <h1>Registration Form</h1>
    </header>

<?php
// define variables and set to empty values
$first_name = $last_name = $age = $email = $comment = $website = "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") 
if (isset($_POST['btn'])){
    $first_name = test_input($_POST['fname']);
    $last_name = test_input($_POST['lname']);
    $email = test_input($_POST['email']);
    $website = test_input($_POST['website']);
    $comment = test_input($_POST['comment']);
    $age = test_input($_POST['age']);
    echo "<div class='reg-wapper'>
        <div class='reg-input-fields'> ";
    echo "The Transfer data is this: <br/>";
    echo "----------------------------<br>";
    echo "First Name: ".$first_name."<br />";
    echo "Last Name: ".$last_name."<br />";
    echo "Email: ".$email."<br />";
    echo "Age: ".$age."<br />";
    echo "Website: ".$website."<br />";
    echo "Comment: ".$comment."<br />";
    echo "</div></div>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html> 