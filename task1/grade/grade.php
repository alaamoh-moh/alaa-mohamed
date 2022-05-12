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
                
                 define('grade',500);
                 
                if (isset($_POST)) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    $num4 = $_POST['num4'];
                    $num5 = $_POST['num5'];
                    echo $sum ?? '';
                    echo $op1 ?? '';
                    echo $op ?? '';
                    $sum = $num1+ $num2 +$num3 +$num4 +$num5 ;
                    echo $sum ."<br>";
                     echo $op1 = $sum/grade ."<br>";
                     echo $op=  $op1 *100 ."<br>";
                    

                }
                  if($op<40){echo "f";}
                  elseif ($op >=40 && $op <60) { echo "e";}
                  elseif ($op >=60 && $op <70) { echo "d";}
                  elseif ($op >=70 && $op <80) { echo "c";}
                  elseif ($op >=80 && $op <90) { echo "b";}
                  else {echo "a";}
                  
                  


                ?>

            </div>
        </div>
    </div>



</body>

</html>