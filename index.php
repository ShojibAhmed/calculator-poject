<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=d, initial-scale=1.0">
    <title>Shojib-Ahmed</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="area">
        <div class="calculator">
            <p>fx-991</p>
            <h1>Calculator</h1>
        <form action="index.php" method="get">
           <div class="input">
                <input type="text" name="input1" placeholder="number">
                <input type="text" name="input2" placeholder="number"> 
           </div> <br> <br>

            <div class="btn">
                <input type="submit" name="addition" value="+">
                <input type="submit" name="subtraction" value="-">
                <input type="submit" name="multiplication" value="*">
                <input type="submit" name="divition" value="/">
                <input type="submit" name="modulo" value="%">
                <input type="submit" name="clear" value="AC">
            </div>

        </form>
            <h2>Ans.....</h2>

<script src="js/script.js"></script>
</body>

<?php 
    $box1=$_GET["input1"];
    $box2=$_GET["input2"];

    if(isset($_GET['addition'])) {
        echo $box1+$box2;
    }

    elseif(isset($_GET["subtraction"])) {
        echo $box1-$box2;
    }
    elseif(isset($_GET['multiplication'])) {
        echo $box1*$box2;
    }
    elseif(isset($_GET['divition'])) {
        echo $box1/$box2;
    }
    elseif(isset($_GET['modulo'])) {
        echo $box2 % $box1;
    }
    elseif(isset($_GET['clear'])) {
        echo '0';
    }
?>
<br><br><br><br><br><br><br><br><br><br>
<h4>create by shojib ahmed</h4>
 </div>
    </div>

</html>
