<!DOCTYPE html>
<html >
<head>

  <title>Sign-Up/Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->

  <link rel="stylesheet" href="css/normalize.css">

  
      <link rel="stylesheet" href="css/style.css">


      <script type="text/javascript">
   
      // Form validation code will come here.
      function validate()
      {   
         var flag_0=0;
         var p=document.myForm.password.value;
         
         if(p.length < 6)
           {
            alert("password must contain more than 5 characters");
            document.myForm.password.focus();
            return false;
          }
         
         else{
          var flag_0=1;
          return true;
         }
         
         
      }
      
   
</script>

</head>

<body>


  <?php   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="login";
    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $error = NULL; 
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
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $phone=$_POST["phone"];
        $sql="INSERT INTO users (name, email, password, phone) 
              VALUES ('$name','$email','$password','$phone')";
              
        $result=mysqli_query($conn , $sql);
         
     }
    if(isset($_POST['loginButton'])){
      $flag_1=0;
      if(!empty($_POST['email']) || !empty($_POST['password'])){
          $eid=$_POST["email"];
          $pid=htmlspecialchars($_POST["password"]);
          $sql= "SELECT * FROM users WHERE email='$eid'";
          $result = mysqli_query($conn , $sql);
          if(mysqli_num_rows($result)>0){
              $row = mysqli_fetch_assoc($result);
              $email=$row["email"];
              $password=$row["password"];
              if($email==$eid && $password==$pid)
                {echo "<br>Logged in!";
                 $flag_1=1;
                 //echo $flag_1;
                  header("Location:test.php");
                }
              else 
                { $error = "<h1>Invalid Credentials! Try Login Again</h1>";
                  //echo $flag_1;
                } 
          }
          else{
            $error = "<h1>Not an existing user! Please sign up!</h1>";
              
              //echo $flag_1;
          }
     }
   }
  $conn->close(); 
?>


  <div class="form">
    

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
       <?php
                if($error){
                  echo $error;
                }
              ?> 
        <div id="signup">   

          <h1>Sign Up for Free</h1>

          <form method="post" name="myForm">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
          </div>
        
            

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>

          <div class="field-wrap">
            <label>
              Phone<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="phone" />
          </div>

          
          
          
          <button type="submit" class="button button-block" name="submit" />Get Started</button>
    
          </form>
        </div>
      </div>

        <div id="login">   
          <h1>Welcome Back!</h1>
          <form method="post">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button name="loginButton" type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>