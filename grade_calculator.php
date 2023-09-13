<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>Garde Calculator</title>
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
        <h3 class="text-center mb-3">Grade Calculator</h3>
        <div class="mb-3">
            <label for="score_1" class="form-label">score 1</label>
            <input type="number" min="0" max="100" class="form-control" name="score_1" id="score_1">
        </div>

        <div class="mb-3">
            <label for="score_2" class="form-label">score 2</label>
            <input type="number" min="0" max="100" class="form-control" name="score_2" id="score_2">
        </div>

        <div class="mb-3">
            <label for="score_3" class="form-label">score 3</label>
            <input type="number" min="0" max="100" class="form-control" name="score_3" id="score_3">
        </div>

        <button type="submit" class="btn btn-dark mb-3">Average Grade</button>

        <div>
            <?php
            if (isset($_POST['score_1']) && isset($_POST['score_2']) && isset($_POST['score_3'])) {

                $average = ($_POST['score_1'] + $_POST['score_2'] + $_POST['score_3']) / 3;
                $grade = '';

                if ($average <= 49) {
                    $grade = "F";
                } else if ($average > 49 && $average <= 54) {
                    $grade = "D";
                } else if ($average > 54 && $average <= 64) {
                    $grade = "C";
                } else if ($average > 64 && $average <= 79) {
                    $grade  = "B";
                } else if ($average > 79 && $average <= 100) {
                    $grade = "A";
                } else {
                    echo "Please enter a valid score between 0-100";
                    exit();
                }

                printf("Average score is %.2f and the corresponding grade is %s", $average, $grade);
                exit();
            }


            ?>
        </div>

    </form>

</body>

</html>