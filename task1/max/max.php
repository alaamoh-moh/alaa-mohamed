<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first page</title>
    <title>Bootstrap 01</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.js"></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    GET MAX!
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="max.php" method="POST">
                    <div class="form-group">
                        <label for="num1">Number1</label>
                        <input type="number" name="num1" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="num2">Number2</label>
                        <input type="number2" name="num2" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="num3">Number3</label>
                        <input type="number2" name="num3" id="number3" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <button class=" btn btn-outline-primary form-control my-4 "> GET </button>

                </form>
                <?php

                if ($_POST) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];

                    if ($num1 > $num2 && $num1 > $num3) {
                        echo "largest number is =" . $num1;
                    } else if ($num2 > $num1 && $num2 > $num3) {
                        echo "largest number is =" . $num2;
                    } else if ($num3 > $num1 && $num3 > $num1) {
                        echo "largest number is =" . $num3;
                    } else if ($num2 = $num1 && $num2 = $num3){
                        echo "all number are equal";
                    }
                   
                }



                ?>

            </div>
        </div>
    </div>



</body>

</html>