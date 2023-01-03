<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
 
  <title>Chess "Maths table" and G  </title>
</head>
<body>
 
<table id="tbl1">
  <?php
  for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
      $total = $row + $col;
      if ($total % 2 == 0) {
        echo "<td height='30px' width='30px' bgcolor='#ffffff'></td>";
      } else {
        echo "<td height='30px' width='30px' bgcolor='#000000'></td>";
      }
    }
  }
  ?>
</table>


<table id="tbl2">
  <?php
  for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
       echo "<td height='50px' width='50px'>";
      echo $row * $col;
       echo "</td>" ;
    }
    echo "</tr>";
  }
  ?>
</table>

<div id="letter">
<?php
for ($i=0; $i<7; $i++)
{
  for ($j=0; $j<=7; $j++)
    {
    if (($j == 1 and $i != 0 and $i != 6) or (($i == 0 or $i == 6) and $j > 1 and $j < 5) or ($i == 3 and $j > 2 and $j < 6) or ($j == 5 and $i != 0 and $i != 2 and $i != 6))
            echo "*";    
        else  
            echo "&nbsp ";
    }        
  echo "<br>";
}
?>
</div>

</body>
</html>