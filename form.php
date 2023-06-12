<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{
background-image: url("f.jpg");
background-repeat: no-repeat;
background-size: 100%
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="login";
    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); }
    //echo "Connected successfully";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    if(isset($_POST['submit'])){
        $Name=$_POST["Name"];
        $Email=$_POST["Email"];
        $Address=$_POST["Address"];
        $Doctor=$_POST["Doctor"];
        $sql="INSERT INTO appointment (Name, Email, Address, Doctor) 
              VALUES ('$Name','$Email','$Address','$Doctor')";
              
        $result=mysqli_query($conn , $sql);
         
     }
$nameErr = $emailErr =  $websiteErr = "";
$name = $email =  $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $nameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  

  if (empty($_POST["Address"])) {
    $Address = "";
  } else {
    $Address = test_input($_POST["Address"]);
  }

  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>APPOINTMENT FORM</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:&nbsp;&nbsp;&nbsp; <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail:&nbsp;&nbsp; <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Address: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  
  Doctor:
  <input type="radio" name="doc" <?php if (isset($doc) && $doc=="Anne D'souza") echo "checked";?> value="female">Anne D'souza
  <input type="radio" name="doc" <?php if (isset($doc) && $doc=="Ruthvik Shah") echo "checked";?> value="male">Ruthvik Shah
  <input type="radio" name="doc" <?php if (isset($doc) && $doc=="Meghana R") echo "checked";?> value="male">Meghana R
 
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>