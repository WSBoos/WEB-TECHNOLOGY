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
<body>
<?php 
$ans="";
$from="";
    if(isset($_POST['submit']) && $_POST['from']!="")
    {
    $from = $_POST['from'];
    $int_from = (int)$from;
    $to = $_POST['to'];
    $currenf = $_POST['currenf'];
    $current = $_POST['current'];
    $url = "http://10.0.15.12/lab8/restapis/currencyrate";
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);   
    $result = json_decode($response);
    $sth = $result->rates;
    $value = $int_from/($sth->$currenf);
    $result = ($sth->$current)*$value;
    $ans = number_format((float)$result, 2, '.', '');
    $ques = $int_from;
    }

    echo
        '<form action="" method="POST" style="text-align: center; padding-top: 5%;">
        <b>Currency Converter</b>
        <p></p>
        <label for="from">From :</label>
        <select name="currenf" id="currenf">
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" value="'. $from .'" name="from" id="from">
        <p></p>
        <label for="to">To :</label>
        <select name="current" id="current" selected="selected">
            <option value="THB" selected>THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" value= "' . $ans . '" name="to" id="to">
        <p></p>
        <button type="submit" name="submit">Convert</button>
</form>';
?>
</body>
</html>