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
                    MY GRADE
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="grade.php" method="POST">
                    <div class="form-group">
                        <label for="num1">PHY</label>
                        <input type="number" name="num1" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="num2">CHEM</label>
                        <input type="number2" name="num2" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="num3">BIO</label>
                        <input type="number3" name="num3" id="number3" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="num4">MATH</label>
                        <input type="number4" name="num4" id="number4" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="num5">COMP</label>
                        <input type="number5" name="num5" id="number5" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <button class=" btn btn-outline-primary form-control my-4 "> GET </button>

                </form>
                <?php

                define('grade', 500);

                if ($_POST) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    $num4 = $_POST['num4'];
                    $num5 = $_POST['num5'];
                    $sum = $num1 + $num2 + $num3 + $num4 + $num5; // 490
                    $totalGrade = $sum / grade ;
                    $totalGradePercentage =  $totalGrade * 100 ;
                    if ($totalGradePercentage < 40) {
                        echo "f";
                    } elseif ($totalGradePercentage >= 40 && $totalGradePercentage < 60) {
                        echo "e";
                    } elseif ($totalGradePercentage >= 60 && $totalGradePercentage < 70) {
                        echo "d";
                    } elseif ($totalGradePercentage >= 70 && $totalGradePercentage < 80) {
                        echo "c";
                    } elseif ($totalGradePercentage >= 80 && $totalGradePercentage < 90) {
                        echo "b";
                    } else {
                        echo "a";
                    }
                   
                }
                
                




                ?>

            </div>
        </div>
    </div>



</body>

</html>