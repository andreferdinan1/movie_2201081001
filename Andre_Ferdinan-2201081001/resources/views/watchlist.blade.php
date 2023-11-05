<!DOCTYPE html>
<html>
<head>
    <title>Watchlist</title>
</head>
<body>
    <h1>Daftar Film Watchlist</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Sinopsis</th>
            <th>Tahun</th>
            <th>Pemain</th>
            <th>Rating</th>
        </tr>
        <?php
        $movieData = [
            [
                'id' => 'tt1746090',
                'judul' => 'Equalizer 3',
                'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
                'tahun' => 2023,
                'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
                'rating' => '6.7',
            ],
        ];

        foreach ($movieData as $movie) {
            echo '<tr>';
            echo '<td>' . $movie['id'] . '</td>';
            echo '<td>' . $movie['judul'] . '</td>';
            echo '<td>' . $movie['sinopsis'] . '</td>';
            echo '<td>' . $movie['tahun'] . '</td>';
            echo '<td>' . implode(', ', $movie['pemain']) . '</td>';
            echo '<td>' . $movie['rating'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
