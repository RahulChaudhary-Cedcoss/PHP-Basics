<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Element Insert</title>
</head>
<body>

<?php  

$mainarray = array('1','2','3','4','5');
foreach($mainarray as $x) {
   echo "$x  ";  
}
echo "<br>";
$insert = '$';
array_splice($mainarray, 3,0,$insert);
foreach($mainarray as $x) {
    echo "$x  ";
}
?> 
</body>
</html>