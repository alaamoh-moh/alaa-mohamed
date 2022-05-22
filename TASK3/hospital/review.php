<?php
session_start();
?>
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



    <form class="col-12 text-center text-primary mt-5" method="post" action="review.php">
        <table class="col-12 text-center text-primary mt-5">
            <tr>
                <td>question</td>
                <td>bad</td>
                <td>good</td>
                <td>verygood</td>
                <td>excellent</td>
            </tr>


            <tr>
                <td>Are you satified with level of cleanliness?</td>
                <td> <input class="form-check-input" type="radio" name="n1" id="exampleRadios1" value=0><?= $bad ?? ""; ?> </td>
                <td> <input class="form-check-input" type="radio" name="n1" id="exampleRadios1" value=3><?= $good ?? ""; ?> </td>
                <td> <input class="form-check-input" type="radio" name="n1" id="exampleRadios1" value=5><?= $verygood ?? ""; ?> </td>
                <td> <input class="form-check-input" type="radio" name="n1" id="exampleRadios1" value=10> <?= $excellent ?? ""; ?></td>
            </tr>
            <tr>
                <td>Are you satified with level of cleanliness?</td>
                <td> <input class="form-check-input" type="radio" name="n2" id="exampleRadios1" value=0> </td>
                <td> <input class="form-check-input" type="radio" name="n2" id="exampleRadios1" value=3> </td>
                <td> <input class="form-check-input" type="radio" name="n2" id="exampleRadios1" value=5> </td>
                <td> <input class="form-check-input" type="radio" name="n2" id="exampleRadios1" value=10> </td>

            </tr>
            <tr>
                <td>Are you satified with level of cleanliness?</td>

                <td> <input class="form-check-input" type="radio" name="n3" id="exampleRadios1" value=0> </td>
                <td> <input class="form-check-input" type="radio" name="n3" id="exampleRadios1" value=3> </td>
                <td> <input class="form-check-input" type="radio" name="n3" id="exampleRadios1" value=5> </td>
                <td> <input class="form-check-input" type="radio" name="n3" id="exampleRadios1" value=10> </td>
            </tr>

            <tr>
                <td>Are you satified with level of cleanliness?</td>
                <td> <input class="form-check-input" type="radio" name="n4" id="exampleRadios1" value=0> </td>
                <td> <input class="form-check-input" type="radio" name="n4" id="exampleRadios1" value=3> </td>
                <td> <input class="form-check-input" type="radio" name="n4" id="exampleRadios1" value=5> </td>
                <td> <input class="form-check-input" type="radio" name="n4" id="exampleRadios1" value=10> </td>

            </tr>


        </table>
        <button class=" btn btn-outline-primary form-control my-4 ">RESULT </button>




    </form>
    <?php
    $n1 = "";
    $n2 = "";
    $n3 = "";
    $n4 = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $i = $n1 + $n2 + $n3 + $n4;
        
            if ($i <= 25) {
                echo " We will call you later on this phone " . $_SESSION['num'];
            } elseif ($i > 25) {
                echo "thanks";
            
        };
    };


    ?>












</body>

</html>