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
    
    <main>
    <div>
    <form action=""  method="POST">
         
       
         <label>E-Mail</label><br><br>
        <input type="text" name="email" id="text" placeholder="Enter your email ID" required>
        <br><br>
    
        <label>Password</label><br><br>
        <input type="password" name="password" id="text" placeholder="Enter your Pasword" required>
        <br><br><br>
          <button id="btn1">Login</button>
         
      
    </form>
    </div> 
  </main>
  <footer>
    
  </footer>


   
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $mail = $_POST["email"];
    $password =$_POST["password"];
    
      $sql = "INSERT INTO doctor(email,password)
          VALUES ('$mail','$password')";

      try{
      mysqli_query($conn, $sql);
      header("location: patient det.php");
      }
      catch(mysqli_sql_exception){
        echo 'ok';
      }
    }

      mysqli_close($conn);
  
?>    
      
