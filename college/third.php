<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="third.php" >
        <input type="text" name="num" id="">
        <input type="submit" value="Check" name="prime">
    </form>
    <br>
    <?php
    if(isset($_GET['prime'])){
        $num=$_GET['num'];
        $f=0;
        for($i=2; $i<=$num/2; $i++){
            if($num % $i ==0){
                $f=1;
                break;
            }
        }
        echo $f==0 ? "Prime Number " : "Not a Prime Number";
    }
    ?>
</body>

</html>