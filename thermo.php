<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <title>PHP Thermometer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #00f7f7;
            flex-direction: column;
        }
        .content {
            border-radius: 12px;
            padding: 10px;
            background: #9de8ff;
            box-shadow: 0px 2px 20px #0000004f;
        }
        .image {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }
        button {
            cursor: pointer;
            position: absolute;
            /* left: 78.4px; */
            right: 49px;
            top: 122px;
            transform: translate(-50%, -50%);
            border: none;
            background: #ccc;
            font-size: 13px;
            padding: 21px 18px;
            border-radius: 50%;
        }
        .p {
            display: flex;
            align-items: center;
            position: absolute;
            right: 90px;
            height: 62px;
            background: #fff;
            width: 111px;
            border: 3px solid #077473;
            top: 122px;
            transform: translate(-50%, -50%);
            overflow: auto;
            word-break: break-all;
            justify-content: center;
            font-family: 'Roboto';

        }
        select,
        button {
            font-family: 'Raleway', sans-serif;
        }
        p {
            font-size: 15px;

        }
        h1 {
            margin: 16px 0px;
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Php Temperature Converter</h1>
        <div class="content">
            <div class="image">
                <form action="" method="POST">
                    <input type="number" name="value">
                    <select name="unit" id="">
                        <option value="cel">Celcius</option>
                        <option value="far">Fahrenheit</option>
                    </select>
                    <button name="check"> GO</button>
                    <div class="p">
                        <?php
                        if (isset($_POST['check'])) {

                            $getValue = $_POST['value'];
                            $unit = $_POST['unit'];
                        }
                        switch ($unit) {
                            case ("cel"):
                                $total = ($getValue * 9 / 5 + (32));
                                echo "$total*C";
                                break;
                            case ("far"):
                                $total = ($getValue - 32) * (5 / 9);
                                echo "$total*F";
                                break;
                            default:
                                echo 'Helooo';
                        }
                        ?>
                        </p>
                    </div>
                </form> <img src="thermo.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>