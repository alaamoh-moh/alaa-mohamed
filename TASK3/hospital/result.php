<?php
session_start();
if ($_POST) {


  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];
  $n4 = $_POST['n4'];
  $i = $n1 + $n2 + $n3 + $n4;

  
};


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

<table class="table">
  <thead>
    <tr>
      <th scope="col">Question </th>
      <th></th>
      <th scope="col">review</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Are you satified with level of cleanliness? </td>
      <td><?php  switch ($n1) {
        case '0':
          echo "bad";
          break;
          case '3':
            echo "good";
            break;
            case '5':
              echo "verygood";
              break;
        default:
         echo "excellent";
          break;
      }   ?></td>
       <tr>
      <th scope="row">2</th>
      <td>Are you satified with level of cleanliness? </td>
      <td><?php  switch ($n2) {
        case '0':
          echo "bad";
          break;
          case '3':
            echo "good";
            break;
            case '5':
              echo "verygood";
              break;
        default:
         echo "excellent";
          break;
      }   ?></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Are you satified with level of cleanliness? </td>
      <td><?php  switch ($n3) {
        case '0':
          echo "bad";
          break;
          case '3':
            echo "good";
            break;
            case '5':
              echo "verygood";
              break;
        default:
         echo "excellent";
          break;
      }   ?></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Are you satified with level of cleanliness? </td>
      <td><?php  switch ($n4) {
        case '0':
          echo "bad";
          break;
          case '3':
            echo "good";
            break;
            case '5':
              echo "verygood";
              break;
        default:
         echo "excellent";
          break;
      }   ?></td>
      
    </tr>
    <tr>
    <th scope="row">total review</th>
      <td> </td>
      <td> <?php if ($i <= 25) {
    echo " bad";
  } elseif ($i > 25) {
    echo "good";
  }; ?></td>
      
</tr>


    
  </tbody>
</table>
<?php 


if ($i <= 25) {
    echo " We will call you later on this phone " . $_SESSION['number'];
  } elseif ($i > 25) {
    echo "thanks";
  };?>


</body>

</html>