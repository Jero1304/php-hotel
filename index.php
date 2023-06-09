<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c5d4023dee.js" crossorigin="anonymous"></script>

    <title>PHP Hotel</title>

</head>

<body>
    <div class="container py-5">
        <table class="table border text-center text-capitalize">
            <thead>
                <tr>
                    <?php
                        foreach ($hotels[0] as $key => $value) {
                            if ($key == 'distance_to_center') {
                                $key = 'distance';
                            }
                            ?>
                                <th scope="col"><?php echo($key) ?></th>
                            <?php
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < count($hotels); $i++) {
                        ?>
                            <tr>
                                <?php
                                    foreach ($hotels[$i] as $key => $value) {
                                        if ($key == 'distance_to_center') {
                                            ?>
                                                <td><?php echo ($value);?> km</td>
                                            <?php
                                        }
                                        elseif($key == 'parking'){
                                            if ($value) {
                                                ?>
                                                    <td>
                                                        <i class="fa-solid fa-square-parking" style="color: blue;"></i>
                                                    </td>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                    <td>
                                                        <i class="fa-solid fa-ban" style="color: red;"></i>
                                                    </td>
                                                <?php
                                            }
                                        }
                                        else{
                                            ?>
                                                <td><?php echo ($value);?></td>
                                            <?php
                                        }
                                    }
                                ?>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>