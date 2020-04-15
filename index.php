<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibonacci suite</title>
</head>

<body>

    <h1>Fibonacci suite</h1>
    <?php
    fibonacci();

    function fibonacci()
    {
        $f = [
            '0'=>0,
            '1'=>1,
            '2'=>1
        ];

        for ($i = 3; $i < 100; $i++) {
            $new = $f[$i - 1] + $f[$i - 2];
            array_push($f,$new);
        }
        var_dump($f);
    }



    ?>
</body>

</html>