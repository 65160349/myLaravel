<html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<body>
    <br>
    <h1>แม่สูตรคูณ&nbsp;&nbsp;</h1>
    <form method ="post" action ="/my-display">
        @csrf
        <label for="NumberInput">ป้อนตัวเลข:</label>
        <input type ="number" name ="myinputnumber">
        <button type ="submit">แสดง</button>
    </form>
    <style>
        body {
            background-color: #ffffff;
            background-image: url('https://w.wallhaven.cc/full/85/wallhaven-8586my.png');
            background-position: center;
            background-size: cover;
            background-repeat: repeat;
            font-family: 'Itim', cursive;
        }

        h1 {
            font-size: 70px;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(219, 204, 216, 0.8);
            color: #000000;
            /* สีข้อความ */
        }

        form {
            margin-bottom: 40px;
            text-align: center;
            font-size: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 30px;
        }

        input[type="number"] {
            padding: 8px;
            border: 3px solid #ccc;
            /* สีขอบของ input */
            border-radius: 7px;
        }

        button {
            padding: 8px;
            cursor: pointer;
            background-color: #878787;
            color: #ffffff;
            border: none;
            border-radius: 10px;
        }
    </style>
</body>

</html>
