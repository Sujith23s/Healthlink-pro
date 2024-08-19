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
      textarea{
         margin-left: 400px;
         height: 300px;
         margin-top: 30px;
         font-size: large;
         padding: 20px;
      }
    </style>
</head>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    
    <main>

    
    <?php
   $sql="select * from prescription";
   $res=$conn->query($sql);
   if($res->num_rows>0) 
   {
 
     while($row=$res->fetch_assoc())
     {
    
      
      
       echo"<textarea>{$row["data"]}</textarea><br>";
       
     }
   }
?>
</button>
    </form>
    </div> 
  </main>
  <footer>
    
  </footer>
</body>
</html>
