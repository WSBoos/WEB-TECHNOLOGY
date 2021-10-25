<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td, th, table{
        border: solid 1px black;
        text-align: center;
        margin: auto;
        font-size: xx-large;
    }

    table{
        margin-top: 5%; 
    }
</style>
<body>
    <?php
    echo "<table><tr>";
    $day = array("Su", "Mo", "Tu", "We", "Th", "Fr", "Sa");
    $num = 1;
    for ($i = 0; $i < 7; $i++) {
        echo "<th>" . $day[$i] . "</th>";
    }
    echo "</tr><tr>";
    for ($i = 1; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 7; $j++){
            if (($i == 1 && $j == 1)||($num > 30)){
                echo "<td></td>";
            }
            else{
                echo "<td>" . $num . "</td>";
                $num ++;
            }
        }
        echo "</tr>";
    }
    echo "</table>"
    ?>
</body>
</html>