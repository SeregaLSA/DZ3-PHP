<?php
$filename = '_sum.txt';
if (file_exists($filename)){
    $sum = file_get_contents('_sum.txt');
    echo("Сумма чисел от 1 до 100 равна: {$sum}");
}
else{
    echo("Файл _sum.txt не найден!");
}
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
                        <p>Строковой переменной $filename присваиваем '_sum.txt': $filename = '_sum.txt';</p>
                        <p>Условием с помощью функции file_exists($filename)<br>
                            проверяем есль ли данный файл в корневом каталоге </p>
                        <p>Если файл существует то переменной $sum присваиваем значение текстового файла<br>
                            $sum = file_get_contents('_sum.txt'); и выводим на экран
                        </p>
                        <p>А если данного файла нет, то что сделать? НЕТ ТАК НЕТ.</p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>