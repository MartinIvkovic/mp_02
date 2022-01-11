<?php
include_once "../php/objekat.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW M4</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    
</head>
<body>
<?php
    include_once "../elementi/header.php";
    ?>
    <?php
    include_once "../elementi/nav_bar.php";
    ?>
    <div id="novi_auto_div">
<img class="novi_slike" src="../slike_projekat\top_ponuda\auto_6.jpg">


<?php
echo"<p> $auto_6 </p>";

?>
<br>
<form action="../glavne_stranice/korpa.php" method="get">
        <input type="hidden" name="id" value="6" id="id">
        <input type=submit value="ubaci u korpu">

</form>
</div>
<?php
    include_once "../elementi/footer.php";
?>
</body>
</html>