<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #291d3c;
            background-image: url('https://w.wallhaven.cc/full/49/wallhaven-498e2w.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Itim', cursive;
        }


        h1 {
            color: #ffffff;
            text-shadow: 4px 3px rgb(61, 32, 81);
            font-size: 28px;
            font-weight: bold;
        }

        table {
            color: #fff;
            width: 45%;
            margin: auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        th,
        td {
            border: 1px solid #fff;
            padding: 10px;
        }

        div.HW {
            width: 500px;
            height: 600px;
            overflow-y: scroll;
            text-align: center;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 50px 50px;
            backdrop-filter: blur(10px);


        }
    </style>
</head>

<body>

    <div class="HW">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $x = $_POST['myinputnumber'];
            echo "<h1>ตารางสูตรคูณแม่ $x</h1>";
            echo '<table>';
            echo '<thead><tr><th>Multiplier</th><th>Result</th></tr></thead>';
            echo '<tbody>';
            for ($i = 1; $i <= 24; $i++) {
                echo "<tr><td>$x x $i</td><td>" . $x * $i . '</td></tr>';
            }
            echo '</tbody></table>';
        }
        ?>
    </div>

</body>

</html>
