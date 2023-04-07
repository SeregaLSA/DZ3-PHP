<?php
$dir = 'files';
$files = array_diff(scandir($dir), ['..', '.']);

foreach ($files as $file) {
    if(is_dir('files/' . $file) == true){
        echo("Папка: {$file}" . "<br>");
    }
    if(is_file('files/' . $file) == true){
        echo("Файл: {$file}" . "<br>");
    }

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

</body>

</html>