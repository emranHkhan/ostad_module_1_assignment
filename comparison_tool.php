<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>Comparison tool</title>
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
        <h3 class="text-center mb-3">Comparison tool</h3>
        <div class="mb-3">
            <label for="number_1" class="form-label">Number 1</label>
            <input type="number" class="form-control" name="number_1" id="number_1">
        </div>

        <div class="mb-3">
            <label for="number_2" class="form-label">Number 2</label>
            <input type="number" class="form-control" name="number_2" id="number_2">
        </div>

        <button type="submit" class="btn btn-dark mb-3">Check</button>

        <div>
            <?php
            if (isset($_POST['number_1']) && isset($_POST['number_2'])) {
                $result = $_POST['number_1'] > $_POST['number_2'] ? $_POST['number_1'] : $_POST['number_2'];
                echo "The larger between {$_POST['number_1']} and {$_POST['number_2']} is $result";
            }
            exit();
            ?>
        </div>

    </form>

</body>

</html>