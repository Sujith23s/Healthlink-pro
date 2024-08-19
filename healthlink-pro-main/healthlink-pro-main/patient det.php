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
    </style>
</head>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    
    
    <div class="pat">
    <form action=""  method="POST" enctype="multipart/form-data">
        
        <label id="lab"> Patient name</label>
        <input type="text" name="Name" id="btn2" required><br>

        <label id="lab">Patient age </label>
        <input type="number" name="age" id="btn2" required>
        <label id="lab">Symptoms</label>
        <input type="text" name="symptoms" id="btn2" required><br>
        
    
            <button id="btn5">NEXT</button>
    </form>
    </div> 
   

</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $Name = filter_input(INPUT_POST, "Name" ,FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age" ,FILTER_SANITIZE_SPECIAL_CHARS);
    $Symptoms = filter_input(INPUT_POST, "symptoms" ,FILTER_SANITIZE_SPECIAL_CHARS);

   

      $sql = "INSERT INTO patient_details(Name,Age,Symptoms)
          VALUES ('$Name','$age','$Symptoms')";

      try{
      mysqli_query($conn, $sql);
      header("location: history.html");
      }
      catch (mysqli_sql_exception) {
        echo "error";
    }
    }

      mysqli_close($conn);
  
?>    