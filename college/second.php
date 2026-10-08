<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="second.php" method="get">
        <input type="text" name="a" id="">
        <input type="text" name="b" id="">
        <input type="submit" value="Show Range" name="show">
    </form>
    <br>
    <?php
    if(isset($_GET['show'])){
        $a=$_GET['a'];
        $b=$_GET['b'];

        for($i = $a; $i<=$b; $i++){
            if($i%2==0){
                echo "<h2>".$i."</h2>";
            }
        }

    }
    ?>
</body>

</html>