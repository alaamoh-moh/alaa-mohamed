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
                    GET ROOT
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="root.php" method="POST">
                    <div class="form-group">
                        <label for="num1">Number</label>
                        <input type="number" name="num1" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                   

                    <button class=" btn btn-outline-primary form-control my-4 "> GET </button>

                </form>
                <?php

                if ($_POST) {
                    $num1 = $_POST['num1'];
                    
                    echo sqrt($num1);
                   
                }



                ?>

            </div>
        </div>
    </div>



</body>

</html>