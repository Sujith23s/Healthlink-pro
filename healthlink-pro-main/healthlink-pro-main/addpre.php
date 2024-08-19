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

      #btn5{
        margin-left: 300px;
      }
 
    </style>
</head>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    
   
        <div>
  
    <form action=""  method="POST">

     
       <textarea name="tex" ></textarea><br>
        <button id="btn5">NEXT</button>

    </form>
</div>
  
    <
  
    

   
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $tex = filter_input(INPUT_POST, "tex" ,FILTER_SANITIZE_SPECIAL_CHARS);
    
    
      $sql = "INSERT INTO Prescription (data)
          VALUES ('$tex')";
     
      try{
      mysqli_query($conn, $sql);
      header("location: history.html");
      }
      catch(mysqli_sql_exception){
        echo 'ok';
      }
    }

      mysqli_close($conn);
  
?>    