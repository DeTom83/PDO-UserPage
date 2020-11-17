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

Class User{
    public $first_name;
    public $last_name;
    public $email;
    public $website;
    public $comment;
    public $age;

    public function __construct($array){
        $this->first_name = $this->test_input($array['fname']);
        $this->last_name = $this->test_input($array['lname']);
        $this->email = $this->test_input($array['email']);
        $this->website = $this->test_input($array['website']);
        $this->comment = $this->test_input($array['comment']);
        $this->age = $this->test_input($array['age']);    
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function getUser(){
        echo "<div class='reg-wapper'>".
        "<div class='reg-input-fields'> ".
        "The Transfer data is this: <br/>".
        "----------------------------<br>".
        "First Name: ".$this->first_name."<br />".
        "Last Name: ".$this->last_name."<br />".
        "Email: ".$this->email."<br />".
        "Age: ".$this->age."<br />".
        "Website: ".$this->website."<br />".
        "Comment: ".$this->comment."<br />".
        "</div></div>"; 
    }
}



//if ($_SERVER["REQUEST_METHOD"] == "POST") 
if (isset($_POST['btn'])){
    $user = new User($_POST);
    $user->getUser();
}


?>
</body>
</html> 