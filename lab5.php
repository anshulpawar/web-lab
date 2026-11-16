<?php
    echo "<h1> REFRESH PAGE </h1>";
    $file = 'count.txt';

    // Create count.txt with 0 if it doesn't exist yet
    if (!file_exists($file)) {
        file_put_contents($file, 0);
    }

    $c = (int) file_get_contents($file);
    file_put_contents($file, $c + 1);
    echo "The number of users visited : " . $c;
?>
