<?php
$str1 = file_get_contents("_1-100.txt");
//echo $str1;
$arr = explode(';', $str1);
//print_r($arr);

$result = 0;
foreach ($arr as $a){
    $result += $a;
}
//echo $result;
file_put_contents('_sum.txt', $result);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">

        <div class="row">
            <div class="col-12">
                <form action="" method="POST">

                    <div class="mb-3">
                        <p>Из файла _1-100.txt созданного ранее, функцией  file_get_contents("_1-100.txt");</p>
                        <p>Получаем строку и присваеваем её переменной $str1 </p>
                        <p>После этого строку зазбиваем на массив функцией explode(';', $str1);</p>
                        <p>Первый параметр - это по какому разделителю, второй сама строка</p>
                        <p>Присваиваем получившийся массив переменной $arr = explode(';', $str1);</p><br>

                        <p>Складываем все значения массива циклом foreach</p>
                        <p>И записываем результат в файл _sum.txt</p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>