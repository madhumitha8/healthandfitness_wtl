<html>
<head>
<style>

body {
	background: url("a.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
 
  color: #444;
  font: 80%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
  text-shadow: 0 1px 0 #fff;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 3px 5px;
    overflow: hidden;
    background-color: #333;
  text-decoration: none;
  }

li {
    float: left;
    text-decoration: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: black;
  text-decoration: none;
    color: white;

}

strong {
  font-weight: bold; 
}

em {
  font-style: italic; 
}

table {
  background: #f5f5f5;
  border-collapse: separate;
  box-shadow: inset 0 1px 0 #fff;
  font-size: 12px;
  line-height: 24px;
  margin: 30px auto;
  text-align: left;
  width: 800px;
} 

th {
  background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
  border-left: 1px solid #555;
  border-right: 1px solid #777;
  border-top: 1px solid #555;
  border-bottom: 1px solid #333;
  box-shadow: inset 0 1px 0 #999;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  position: relative;
  text-shadow: 0 1px 0 #000;  
}

th:after {
  background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
  content: '';
  display: block;
  height: 25%;
  left: 0;
  margin: 1px 0 0 0;
  position: absolute;
  top: 25%;
  width: 100%;
}

th:first-child {
  border-left: 1px solid #777;  
  box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
  box-shadow: inset -1px 1px 0 #999;
}

td {
  border-right: 1px solid #fff;
  border-left: 1px solid #e8e8e8;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #e8e8e8;
  padding: 10px 15px;
  position: relative;
  transition: all 300ms;
}

td:first-child {
  box-shadow: inset 1px 0 0 #fff;
} 

td:last-child {
  border-right: 1px solid #e8e8e8;
  box-shadow: inset -1px 0 0 #fff;
} 

tr {
  background: url(https://jackrugile.com/images/misc/noise-diagonal.png); 
}

tr:nth-child(odd) td {
  background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png); 
}

tr:last-of-type td {
  box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
  box-shadow: inset 1px -1px 0 #fff;
} 

tr:last-of-type td:last-child {
  box-shadow: inset -1px -1px 0 #fff;
} 

tbody:hover td {
  color: transparent;
  text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
  color: #444;
  text-shadow: 0 1px 0 #fff;
}
</style>
  </head>
  <body>
<ul>
  <li style="float:right"><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
</ul>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>

      <th>Doctor</th>
    </tr>
  </thead>
  
  <tbody>
    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Name, Email, Address, Doctor FROM appointment";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Doctor"]."</td></tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 










  </tbody>




</table></body></html>