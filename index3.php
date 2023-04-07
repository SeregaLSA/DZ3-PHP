<?php
$arr = [];
for($i = 1; $i <= 100; $i++){
    $arr[] += $i;
}
//print_r($arr); использовалось для проверки введенных данных в массив
file_put_contents("_1-100.txt", implode("; ", $arr)); // запись данных в массив с разделителем ";"
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
                        <p>Массив с числами от 1 до 100 создаётся циклом "FOR"</p>
                        <p>После чего массив записывается в текстовый файл _1-100.txt с разделителем ";"</p>
                        <label for="output_text" class="form-label">Output_ARRAY</label>
                        <textarea class="form-control" name="output_txt" rows="3"><?php print file_get_contents( "_1-100.txt" ); ?></textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>