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
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $sth = $result->meals[0];
    echo 
    "<div class='card text-center' style='width: 20rem; margin: auto; margin-top: 3%;'>
    <img class='card-img-top' src='$sth->strMealThumb' alt='Card image cap' style='height: 20rem;'>
    <div class='card-body'>
        <h5 class='card-title'>$sth->strMeal</h5>    
        <p class='card-text' style='-webkit-line-clamp:4; text-overflow: ellipsis;  display: -webkit-box; -webkit-line-clamp: 4; overflow: hidden;
        -webkit-box-orient: vertical'>$sth->strInstructions</p>
        <input type='button' value='Refresh' onClick='refreshPage()'>
        <a href='$sth->strSource' target='_blank'><input type='button' value='Learn More'></a>
    </div>
  </div>"
?>

    <script>
    function refreshPage(){
        window.location.reload();
    } 
    </script>
</body>
</html>
