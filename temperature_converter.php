<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>Temperature converter</title>
    <style>
        body {
            background-color: #D3E9F3;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Nunito Sans', sans-serif;
        }

        form {
            width: 350px;
            background-color: #009EFA;
        }
    </style>
</head>

<body>
    <form class="border my-auto py-4 px-2 rounded text-white" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
        <h3 class="text-center mb-3">Temperature Converter</h3>
        <div class="mb-3">
            <label for="temp_value_from" class="mb-1">From</label>
            <select class="form-select" name="temp_value_from" id="temp_value_from">
                <option value="celcius" selected>Celcius</option>
                <option value="farenheit">Farenheit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="temp_value_to">To</label>
            <select class="form-select" name="temp_value_to" id="temp_value_to">
                <option value="celcius" selected>Celcius</option>
                <option value="farenheit">Farenheit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="temperature" class="form-label">Temperature</label>
            <input name="temp" type="number" step="any" class="form-control" id="temperature" required>
        </div>

        <button type="submit" class="btn btn-dark mb-3">Convert</button>


        <div>
            <?php
            if (isset($_POST['temp']) && isset($_POST['temp_value_from']) && isset($_POST['temp_value_to'])) {
                $temperature = $_POST['temp'];
                $temperature_value_from = $_POST['temp_value_from'];
                $temperature_value_to = $_POST['temp_value_to'];


                if ($temperature_value_from == $temperature_value_to) {
                    $temperature_sign = $temperature_value_from == "celcius" ? "°C" : "°F";

                    echo "Temperature: $temperature $temperature_sign";
                } else {
                    $celcius = ($temperature - 32) * 5 / 9;
                    $farenheit = $temperature * (9 / 5) + 32;

                    echo $temperature_value_from == "celcius" ? "Temperature: $farenheit °F" : "Temperature: $celcius °C";
                }
            }
            ?>
        </div>

    </form>

</body>

</html>