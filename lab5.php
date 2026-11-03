
<?php
$file = __DIR__ . "/counter.txt";

$fp = fopen($file, "c+");

if (flock($fp, LOCK_EX)) {

    $count = (int) stream_get_contents($fp);

    $count++;

    ftruncate($fp, 0);
    rewind($fp);

    fwrite($fp, (string)$count);

    fflush($fp);
    flock($fp, LOCK_UN);
}

fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>

    <style>
        body {
            font-family: Arial;
            background-color: #E8F0FE;
            text-align: center;
            padding-top: 100px;
        }

        .box {
            background-color: white;
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px #999;
        }

        h1 {
            color: #3949AB;
        }

        h2 {
            color: #E91E63;
            font-size: 45px;
        }
    </style>
</head>

<body>

    <div class="box">
        <h1>Visitor Counter</h1>
        <p>Welcome to my website!</p>

        <h2><?php echo $count; ?></h2>

        <p>Total Visitors</p>
    </div>

</body>
</html>
