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
    <style>
        p{
         font-size: x-large;
         margin-left: 30px;
         margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    
  
    <div>
    <form action=""  method="POST">
         
       
         <label>Username</label><br><br>
        <input type="text" name="username" id="text" placeholder="Enter your email ID" required>
        <br><br>
    
        <label>Password</label><br><br>
        <input type="password" name="password" id="text" placeholder="Enter your Pasword" required>
        <br><br><br>
          <button id="btn1" name="Login">Login</button>
          <p>If you don't have account   <a href="register.php">sign up</a></p>
         
      
    </form>
    </div> 



   
</body>
</html>
<?php
   
    if (isset($_POST['Login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="select * from register where username='$username' and password='$password'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo"success";
            header("location:nav.php");
        }
    else{
        echo'<script>alert("Invalid username and password")</script>';
    }
    }
  ?>
 
  
  