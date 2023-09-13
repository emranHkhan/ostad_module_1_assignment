<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>Simple Calculator</title>
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
        <h3 class="text-center mb-3">Simple Calculator</h3>
        <div class="mb-3">
            <label for="num_1" class="form-label numerator">Number 1</label>
            <input name="num_1" type="number" step="any" class="form-control" id="num_1" required>
        </div>

        <div class="mb-3">
            <label for="num_2" class="form-label denominator">Number 2</label>
            <input name="num_2" type="number" step="any" class="form-control" id="num_2" required>
        </div>

        <div class="mb-3">
            <label for="operation" class="mb-1">Operation</label>
            <select class="form-select" name="operation" id="operation">
                <option value="add" selected>Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multipy">Multiplication</option>
                <option value="divide">Division</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark mb-3">Show Answer</button>

        <script>
            document.querySelector('.form-select').addEventListener("change", function(e) {
                if (e.target.value === "divide") {
                    document.querySelector(".numerator").innerHTML = "Number 1 -> Numerator";
                    document.querySelector(".denominator").innerHTML = "Number 2 -> Denominator";
                }
            })
        </script>


        <div>
            <?php
            if (isset($_POST['num_1']) && $_POST['num_2'] && isset($_POST['operation'])) {
                $num_1 = $_POST['num_1'];
                $num_2 = $_POST['num_2'];

                switch ($_POST['operation']) {
                    case 'add':
                        $result = $num_1 + $num_2;
                        echo "Answer = $result";
                        break;

                    case 'subtract':
                        $result = $num_1 > $num_2 ? $num_1 - $num_2 : $num_2 - $num_1;
                        echo "Answer = $result";
                        break;

                    case 'multiply':
                        $result = $num_1 * $num_2;
                        echo "Answer = $result";
                        break;

                    case 'divide':
                        $result = $num_1 / $num_2;
                        echo "Answer = $result";
                        break;

                    default:
                        echo "Not a valid operation!";
                }
            }
            exit();
            ?>
        </div>

    </form>

</body>

</html>