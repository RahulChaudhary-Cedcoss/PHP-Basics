<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<body>
    <?php  
    $first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
    
    $second_array = array('c2', 'c4');
    
    $output = array_diff_key( $first_array, array_flip( $second_array));
    print_r($output);
    
    ?>
</body>
</html>