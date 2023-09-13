<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>EVEN|ODD</title>
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
        <h3 class="text-center mb-3">Even Odd Checker</h3>
        <div class="mb-3">
            <input type="number" class="form-control" name="number" id="number" placeholder="Enter a number...">
        </div>

        <button type="submit" class="btn btn-dark mb-3">Check</button>

        <div>
            <?php
            if (isset($_POST['number'])) {
                $result = $_POST['number'] % 2 == 0 ? "even" : "odd";
                echo "{$_POST['number']} is $result";
            }
            exit();
            ?>
        </div>

    </form>

</body>

</html>