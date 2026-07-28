<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            height: 40px;
            width: 40px;
            background-color: red;
            display: flex;
            text-align: center;
            align-items: center;
            align-content: center;
            font-size: 20px;
        }
        .box{
            height: 40px;
            width: 40px;
        }
    </style>
</head>
<body>
    <?php
    $n = 5;
    echo '<table border="1">';
    for($i = 1; $i <= $n; $i++)
    {
        echo '<tr>';
        for($j = 1; $j <= $i; $j++){
            echo "<td>*</td>";
        }
        echo "</tr>";
    }

    for($i = 1; $i <= $n; $i++)
    {
        echo '<tr>';
        for($j = $i; $j <= $n; $j++){
            echo "<td>*</td>";
        }
        echo "</tr>";
    }
    
    ?>
</body>
</html>