<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
 
    <div>
    <form action=""  method="POST">
         
       
         <label>Username</label><br><br>
        <input type="text" name="username" id="text" placeholder="Enter your username " required>
        <br><br>

        <label>email</label><br><br>
        <input type="text" name="email" id="text" placeholder="Enter your email" required>
        <br><br><br>

     
        <label>gender</label><br><br>
        <select name="gender">
        <option value="male" >male</option>
        <option value="female">female</option>
        </select>
        <br><br>

        <label>address</label><br><br>
        <input type="text" name="address" id="text" placeholder="Enter your address" required>
        <br><br>
    
        
        <label>DOB</label><br><br>
        <input type="date" name="DOB" id="text" placeholder="Enter your DOB" required>
        <br><br>

        <label>Password</label><br><br>
        <input type="password" name="password" id="text" placeholder="Enter your Pasword" required>
        <br><br><br>

        <label>confirm Password</label><br><br>
        <input type="password" name="cpass" id="text" placeholder="Enter your confirm Pasword" required>
        <br><br><br>

      <button id="btn1">NEXT</button>
          
   </form>
    </div> 
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $username = $_POST["username"];
    $email =   $_POST["email"];
    $password = $_POST["password"];
    $cpass = $_POST["cpass"];
  
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $DOB = $_POST["DOB"];
     
     $sql = "INSERT INTO register(username,email,password,cpass,DOB,address,gender)
           VALUES ('$username','$email','$password','$cpass','$DOB','$address','$gender')";

      try{
      mysqli_query($conn, $sql);
      header("location:patient.php");
      }
      catch(mysqli_sql_exception){
        echo 'ok';
      }
    }

      mysqli_close($conn);
  
?>    
      
