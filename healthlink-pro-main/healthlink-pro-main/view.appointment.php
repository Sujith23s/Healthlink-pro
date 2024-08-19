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
     button{
      width:150px;
      height: 50px;
      margin-left: 30px;
    }
</style>
<body>
    <header>
       <img src="original-8fd9fa62cdec8996333698d3c6a78ebc.png">
    </header>
    <a href="nav.php"> <button>BACK</button></a>
    <table>
    <tr>
        <th>general</th>
        <th>name</th>
        <th>date</th>
        
    </tr>

    <?php
    $sql="select * from booking ORDER BY gen LIMIT 1 ";
    $res=$conn->query($sql);
    if($res->num_rows>0) 
    {
    
      while($row=$res->fetch_assoc())
      {
       
        echo"<tr>";
      
        echo"<td>{$row["gen"]}</td>";
        echo"<td>{$row["name"]}</td>";
        echo"<td>{$row["date"]}</td>";
       
        echo"</tr>";
      }
    }
?>
</table>
    </form>
    </div> 
  
</body>
</html>
