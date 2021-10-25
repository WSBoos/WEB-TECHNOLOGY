<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
        $response = file_get_contents($url);
        $result = json_decode($response);

        foreach ($result->tracks->items as $music){
            echo $music->album->album_type."<br>";
        } 
    ?>
</body>
</html>