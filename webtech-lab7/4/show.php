<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>
    *{
        text-align: center;
        margin: auto;
        padding: 2%;
        font-size: large;
        color: white;
    }

    table{
        background-color: salmon;
        border-radius: 4px;
    }
</style>
<body>
    <?php
    $data = array( // Key => Value
        "1" =>  $_POST["idnum"],
        "2" =>  $_POST["name"],
        "3" =>  $_POST["lastname"],
        "4" =>  $_POST["address"],
        "5" =>  $_POST["ked"],
        "6" =>  $_POST["coun"],
        "7" =>  $_POST["code"],
        "8" =>  $_POST["call"],

    );
    ?>

    <table class='table'>
        <tr>
            <th scope='col'>ลำดับ</th>
            <th scope='col'>รายการ</th>
        </tr>

    <?php
    foreach ($data as $head => $chil) {
        if(strlen($chil) < 5){
            echo "<tr><td>" . $head . "</td><td style='color: red;'>" . $chil. "<td></tr>";
        }
        else{
            echo "<tr><td>" . $head . "</td><td>" . $chil . "<td></tr>";
        }
    }
    ?>
    </table>

</body>
</html>