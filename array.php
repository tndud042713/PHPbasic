<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $numbers = array('하나','둘','셋','넷');
    echo $numbers[0].'<br>';
    echo $numbers[1].'<br>';
    echo $numbers[2].'<br>';
    echo $numbers[3].'<br>';
    echo count($numbers).'<br>';
    var_dump(count($numbers));
    echo'<br>';
    array_push($numbers,'다섯','여섯');
    var_dump(count($numbers));
    echo '<br>'.'====================================================='.'<br>'.'-실습예제-'.'<br>';    
    for($i=0;$i<count($numbers);$i++){
        echo $numbers[$i].'<br>';
    }    
    ?>
</body>
</html>