<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;500&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container row" style="margin: auto">
            <?php
                $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
                $response = file_get_contents($url);
                $result = json_decode($response);
                $count = 0;

                foreach ($result->tracks->items as $items){
                    echo '<div class="card" style="width: 25%; margin: 2%;">';
                    echo '<img class="card-img-top" src="' . $items->album->images[0]->url . '" alt="Card image cap">';
                    echo "<div class='card-body'><h5 class='card-head'>" . $items->album->name . "</h5>";
                    foreach ($items->album->artists as $artists){
                        echo "Artist: " . $artists->name . "<br><p></p>";
                    }
                    echo "Release date: " . $items->album->release_date . "<br><p></p>";
                    foreach ($items->album->available_markets as $available_markets){
                        $count++;
                    }
                    echo "Avaliable : " . $count . " countries<br><p></p></div></div>";
                }
            ?>
    </div>
</body>
</html>
