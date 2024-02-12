<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            font-family: 'Itim', cursive;
            font-family: 'Noto Sans Thai', sans-serif;
            background-color: #ffffff;
            background-image: url('https://wallpapercave.com/wp/wp2428456.jpg');
            background-position: center top;
            background-size: cover;
            background-repeat: repeat;

        }

        h1 {
            font-size: 50px;
            text-shadow: 2px 2px 2px rgba(61, 56, 61, 1);
            color: #ffffff;
            font-family: 'Itim', cursive;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
            font-family: 'Itim', cursive;
            font-family: 'Noto Sans Thai', sans-serif;
            border-radius: 8px;
        }

        input {
            padding: 5px;
            font-size: 16px;
            font-family: 'Itim', cursive;
            font-family: 'Noto Sans Thai', sans-serif;
            border-radius: 8px;
        }

        table {
            border-radius: 8px;
            width: 40%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: 'Itim', cursive;
            font-family: 'Noto Sans Thai', sans-serif;
            backdrop-filter: blur(10px);
            background-color: #ffffff66

        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ffffff66;
        }

        th {
            background-color: #ffffff66;
        }

        tr:nth-child(even) {
            background-color: #ffffff66;
        }


    </style>
</head>

<body>
    <h1>ตารางแม่สูตรคูณ</h1>
    <h1 id="myh1"></h1>
    <input type="text" id="my_number" placeholder="ป้อนตัวเลข">
    <button onclick="generateMultiplicationTable()">Submit</button>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <th>#</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())

        });

        function generateMultiplicationTable() {
            let factor = parseInt($('#my_number').val());
            let my_code_tr = ``;

            for (let i = 1; i <= 12; i++) {
                let result = factor * i;
                my_code_tr += `<tr><td>${i}</td><td>${factor} * ${i} = ${result}</td></tr>`;
            }

            $('#my_tbody').html(my_code_tr);
        }
    </script>
</body>

</html>
