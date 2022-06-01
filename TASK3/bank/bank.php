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

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    BANK
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="bank.php" method="POST">
                    <div class="form-group">
                        <label for="username">USER NAME</label>
                        <input type="text" name="username" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                        <?= $username ?? "" ?>

                    </div>


                    <div class="form-group my-5">
                        <label for="loan">LOAN AMOUNT</label>
                        <input type="number" name="loan" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>


                    LOAN YEARS
                    <select class="form-select" name="numberofyears"  aria-label="Default select example">>
                        <option  value="1">One</option>
                        <option  value="2">Two</option>
                        <option  value="3">Three</option>
                        <option  value="4">four</option>
                        <option  value="5">five</option>
                        <option  value="6">six</option>

                    </select>
                    <button class=" btn btn-outline-primary form-control my-4 "> GET </button>

                </form>

                <?php

                $username = 'username';

                //$i = "";
                $interestrate = '';
                $loanafterinterest = '';
                
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                    $username = $_POST['username'];
                    $loan = $_POST['loan']; 
                    $numberofyears=$_POST['numberofyears'];
                    
                  

                    if ($numberofyears  <= 3) {
                        $interestrate = ($loan * .1) * 2;
                        $loanafterinterest = $loan + $interestrate;
                        $monthly= $loanafterinterest / ($numberofyears * 12) ;
                    } elseif ($numberofyears > 3) {
                        $interestrate = ($loan * .15) * 2;
                        $loanafterinterest = $loan + $interestrate;
                        $monthly = $loanafterinterest / ($numberofyears * 12) ;
                    };

                    $table = "
                    <table class='table'>
                    <thead>
                      <tr>
                        <th> username </th>
                        <th>interest rate</th>
                        <th >loanafterinterest</th>
                        <th >monthly</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope='row'>{$username}</td>
                        <td scope='row'>{$interestrate}</td>
                        <td scope='row'>{$loanafterinterest}</td>
                        <td scope='row'>{$monthly }</td>
                    </tbody>
                  </table>";
                    echo $table;
                };

                ?>


</body>



</html>