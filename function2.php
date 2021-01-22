<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    function basic()
    { //함수 구조나 선언상 문제는 없는데 컴파일러가 에러로 인식 하는 것 같다
        print("lorem ipsum dolor1<br>");
        print("lorem ipsum dolor2<br>");
    }
    basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $right){
        print($left+$right);
        print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>

    <h2>return</h2>
    <?php
    function sum2($left, $right){
        return $left+$right;
    }
    print(sum2(2,4));
    file_put_contents('result.txt', sum2(2,4)); //htdocs 에 result.txt 라는 파일이 생성된다.
    // email('tndud042713@gmail.com', sum2(2,4));
    // upload('tndud.net', sum2(2,4));

    ?>
</body>

</html>