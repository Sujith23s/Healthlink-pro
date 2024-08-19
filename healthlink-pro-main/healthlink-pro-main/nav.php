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
<style>
   .container{
    display: inline-block;
    margin-left: 10%;
    margin-top: 50px;
    font-size: x-large;
    border: 5px solid blue;
    width: 400px;
    height: 500px;  
    word-spacing: 5px;
    padding-left: 20px;
}

.container1{
    display: inline-block;
}

</style>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    

    <div class="container">

  
    <?php
    $sql="select * from register ORDER BY id DESC LIMIT 1";
    $res=$conn->query($sql);
    if($res->num_rows>0) 
    {
     
      while($row=$res->fetch_assoc())
      {
        echo"<tr><br><br><br><br><br><br><br>";
        echo"username: <td>{$row["username"]}</td><br>";
        echo"email: <td>{$row["email"]}</td><br>";
        echo"Gender: <td>{$row["gender"]}</td><br>";
        echo"Address: <td>{$row["address"]}</td><br>";
        echo"DOB: <td>{$row["DOB"]}</td><br>";
      
        echo"</tr>";
      }
    }
  ?>

   </div>
   
     
   <div class="container1">
    <a href="booking appointment.php"><button id="btn10">appoinntment</button></a> 
    <a href="view prescription.php"> <button id="btn10">view prescription</button></a> 
    <a href="view.appointment.php"><button id="btn10">view appointment</button></a> 

    </div>

</body>
</html>

 
      
