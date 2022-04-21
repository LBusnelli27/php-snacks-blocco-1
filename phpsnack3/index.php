<?php
    $string = "c,i,n,q,u,e";
    echo $string . '<br><br>';

    $array = explode(',', $string);
    for ($i=0; $i < count($array); $i++) { 
        echo $array[$i] . ' ';
    }
    echo '<br><br>';

    $result = [];
    foreach ($array as $key => $value) {
        $result[$value] = $value;
    }
    var_dump($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    
</body>
</html>