<?php
//if($_POST[''])
file_put_contents('_article.txt', $_POST['input_txt']); //создание файла
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
                        <label for="input_text" class="form-label">Input</label>
                        <textarea class="form-control" name="input_txt" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Send</button>
                    </div>

                    <div class="mb-3">
                        <label for="output_text" class="form-label">Output</label>
                        <textarea class="form-control" name="output_txt" rows="3"><?php print file_get_contents( "_article.txt" ); ?></textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>