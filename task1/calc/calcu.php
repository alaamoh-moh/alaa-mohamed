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
                    calculator
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="calcu.php" method="POST">
                    <div class="form-group">
                        <label for="num1">Number1</label>
                        <input type="number" name="num1" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group my-3">
                        <label for="operator">operator</label>
                        <input type="submit" name="op" value="sum" />
                        <input type="submit" name="op" value="sub" />
                        <input type="submit" name="op" value="multi" />
                        <input type="submit" name="op" value="div" />
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="num2">Number2</label>
                        <input type="number2" name="num2" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                </form>
                <?php
if(isset($_POST['op'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$oprnd=$_POST['op'];
	switch($oprnd){
        case "sum":
		echo $num1+$num2;
    break;}
	switch($oprnd){
        case "sub":
		echo $num1-$num2;
    break;}
	switch($oprnd){
        case "multi":
		echo $num1*$num2;
    break;}
	switch($oprnd){
        case "div":
		echo $num1/$num2;
    break;}
	

}
                ?>



</body>

</html>