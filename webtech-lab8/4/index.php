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
        $url = "http://10.0.15.12/lab8/restapis/10countries";    
        $response = file_get_contents($url);
        $result = json_decode($response);
       
        foreach ($result as $country) {  
            echo "<div style='clear: both; padding: 1%;'><div style='float:left; padding:2%;  width: 400px;'>Name : <b>$country->name</b><br>";
            echo "Capital : $country->capital<br>"; 
            echo "Population : $country->population<br>";
            echo "Region : $country->region<br>Location : ";
            foreach ($country->latlng as $locate)
                echo "$locate ";
            echo "<br>Bordes : ";
            foreach ($country->borders as $bord)
            echo "$bord ";
            echo "</div><img src='"  . $country->flag . "' style='width:100px; width:200px; height:200px; float:left; padding-top:2%;'></div>";
            echo "<br><p></p>";      
        }
    ?>
</body>
</html> 