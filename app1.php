<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Appointment Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->

  <link rel="stylesheet" href="css/normalize1.css">

  
      <link rel="stylesheet" href="css/style1.css">


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
        $Name=$_POST["name"];
        $Email=$_POST["email"];
        $Address=$_POST["address"];
        $Doctor=$_POST["doctor"];
        $sql="INSERT INTO appointment (name, email, address, doctor) 
              VALUES ('$Name','$Email','$Address','$Doctor')";
              
        $result=mysqli_query($conn , $sql);
         
     }
     
?>


  <div class="form">
      
      <!-- <ul class="tab-group">
        <center>
        <li class="tab active"><a href="#signup">Book Appointment</a></li>
        </center>      
      </ul> -->
      
      <div class="tab-content">
      <!--   <div id="signup">   --> 
          <h1>Services At Your Doorstep</h1>
           
          <form method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
        
            

          <div class="field-wrap">
            <label>
             Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" />
          </div>
          </div>
          
          
          <div class="field-wrap">
            <label>
             Address<span class="req">*</span>

            </label>
            <input type="text" required autocomplete="off" name="address" />
          </div>

          <div class="field-wrap">
            <label>
             Dr.Anne, Dr.Ruthvik, Dr.Ananya<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="doctor" />
          </div>

          <button type="submit" class="button button-block" name="submit" />Book Now</button>
    
          </form>
          </div>
        <!-- </div> -->
    </div><!-- tab-content -->
</div> 

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
