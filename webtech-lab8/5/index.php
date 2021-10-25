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
    }
</style>
<body style="background-color: salmon;">
    <div style="width: 50%;  margin-top:3%;">
        <h1>BMX49 DANCER CONTEST</h1>
        <h3 style='color: green'>Voting Score</h3>
        <p></p>
        <form method='POST'>
            <div class="input-group">
                <div style='width:85%'><select name="num" id="num" class="custom-select">
                    <option value='11' selected>Select Number</option>
                    <option value='0'>1</option>
                    <option value='1'>2</option>
                    <option value='2'>3</option>
                    <option value='3'>4</option>
                    <option value='4'>5</option>
                    <option value='5'>6</option>
                    <option value='6'>7</option>
                    <option value='7'>8</option>
                    <option value='8'>9</option>
                    <option value='9'>10</option>
                </select></div>
                <div><button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
            </div>
        </form>
    <div>

    <?php
    if(isset($_POST['submit']) && $_POST['num']<=10)
    {
    $num = $_POST['num'];        
    $url = "http://10.0.15.12/lab8/restapis/candidates";
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);   
    $result = json_decode($response);
    $sth = $result[$num];

    echo  "<p></p><div class='card' style='width: 50%;'>
    <img src='$sth->img' class='card-img-top' alt=''>
    <div class='card-body'>
    <h5 class='card-title'>$sth->name</h5>
        <p class='card-text' style='color:red;'>อันดับ $sth->no</p>
        <p class='card-text'>$sth->score คะแนน</p>
    </div>
    </div>";
    }

    ?>

</body>
</html>