<?php
$file = __DIR__ . "/counter.txt";

if (!file_exists($file)) {
    file_put_contents($file, "0");
}

$count = (int) file_get_contents($file);
$count++;

file_put_contents($file, $count, LOCK_EX);
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

        p {
            color: #555;
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
