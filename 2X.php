<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        สูตรคูณ
    </h1>
    <div class = "X2">
        <?php for ($i=2;$i<=24;$i++){
            for ($j=1;$j<=12;$j++){
                echo $i.'x'.$j.'='.$i*$j."<br>";
            }
            echo "<br>";
        }
        ?>
    </div>
    <style>
        .X2{
            width:200px ;
        height:200px ;
        overflow:auto ;
        }
        
    </style>
</body>
</html>