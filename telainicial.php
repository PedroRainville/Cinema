<?php

$api_key = 'e9199bf497fd854afbdc73771190c98b';
$base_url = 'https://api.themoviedb.org/3';
$endpoint = '/movie/popular';
$url = $base_url . $endpoint . '?api_key=' . $api_key;

$response = file_get_contents($url);

if ($response === false) {
    die("Erro na conexão com a API.");
}

$data = json_decode($response, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" href="img/cinema.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .movie {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
            text-align: center;
        }

        .movie img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .movie h2 {
            font-size: 16px;
            margin: 0;
        }
    </style>
    <title>Cinema</title>
</head>
<body>
    <header>
        <h1>Top Movies</h1>
    </header>

    <main>
        <?php
            if ($data && isset($data['results'])) {
                foreach ($data['results'] as $movie) {
                    echo '<div class="movie">';
                    echo '<img src="https://image.tmdb.org/t/p/w300' . $movie['poster_path'] . '" alt="' . $movie['title'] . '">';
                    echo '<h2>' . $movie['title'] . '</h2>';
                    echo '</div>';
                }
            } else {
                echo "Erro ao recuperar filmes populares.";
            }
        ?>
    </main>

</body>
</html>
