<?php
    include_once "../php/objekat.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korpa</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
<?php
    include_once "../elementi/header.php";
    ?>


    <?php
    include_once "../elementi/nav_bar.php";
    ?>
<?php
    if(isset($_GET["id"])) {
        $id=$_GET["id"];

        for($i=0;$i<9;$i++) {
            if($niz[$i]["id"] == $id) {
                    echo $niz[$i]["naziv"];
            }
        }
    //    foreach ($niz as $elem){
    //        if ($elem["id"] == $id){
    //            echo $auto_["id"];
    //        }
    //    }

        }
    
    ?>


<?php
    include_once "../elementi/footer.php";
?>
</body>
</html>