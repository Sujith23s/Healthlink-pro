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
    label{
      width: 200px;
      display: inline-block;
    }
    button{
      width:150px;
      height: 50px;
      margin-left: 30px;
    }
    form{
      margin-top: -20px;
    }
    p{
    margin-top: 30px;
    font-size: xx-large;
   text-align: center;
    margin-left: -50px;
    text-shadow: 5px 5px 10px darkslategray;
   }
  #btn{
    width: 240px;
    margin: 20px;
  }
  #btn1{
   
  }

   </style>
</head>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    
   <a href="nav.php"> <button>BACK</button></a>
    <div>
    <form action=""  method="POST">
         <p><b>Book appointment</b></p>
         <label >NAME</label>
        <input type="text" name = "name" id="btn6" required><br>

      

        <label >SPECIALIST</label>
        <select id="btn" name="gen" required>
          <option value="">--select--</option>
            <option value="general">general</option>
            <option value="specialist">specialist</option>
            <option value="cardio">cardio</option>
         </select>
        <br>

       <label >DATE & TIME</label>
        <input type="datetime-local" name = "date" id="btn6" required><br>

      

         <button type="submit" name="submit" id="btn1"  >click</button>
         
         
      
    </form>
    </div> 
 
</body>
</html>
<?php
  
      if(isset($_POST['submit']))
      {
        $gen=$_POST['gen'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        
       
        
      $sql = "INSERT INTO booking (gen,name,date)
          VALUES ('$gen','$name','$date')";
      
      try{
        mysqli_query($conn, $sql);
         echo'<script>alert("successfully booked")</script>';
         
        }
        catch(mysqli_sql_exception){
          echo 'ok';
        }
      }
  
        mysqli_close($conn);
    

?>    
    