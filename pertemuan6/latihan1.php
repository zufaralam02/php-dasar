<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    // echo $angka[1][1];
    ?>

    <?php foreach ($angka as $ang) : ?>
        <?php foreach ($ang as $a) : ?>
            <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>