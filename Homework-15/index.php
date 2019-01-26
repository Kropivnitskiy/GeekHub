
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insertion  Sort</title>

</head>
<body>

<?php
function insertSort($array){
    $length = count($array);
    for($i = 1; $i < $length; $i++){
        $key = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $array[$j]>$key){
            $array[$j+1]=$array[$j];
            $array[$j]=$key;
            $j--;
        }
    }
    return $array;
}

$array = range(0, 999);
shuffle($array);

$time_start = microtime(true);
insertSort($array);
$time_end = microtime(true);

echo ($time_end - $time_start);

?>

<div>
    <?php
    var_dump($array);
    ?>
</div>


</body>
</html>