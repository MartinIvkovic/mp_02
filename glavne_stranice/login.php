<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
<?php
    include_once "../elementi/header.php";
    ?>
    <?php
    include_once "../elementi/nav_bar.php";
    ?>

<fieldset>
    <form action="../php/validacija" method="POST">
        <label for="ime"> Unesi Korisicko ime</label>
        <input type="text" id="ime" name="ime"> <br>
        <label for="password"> Unesi password</label>
        <input type="password" id="password" name="password"> <br>
        <input type="submit" value="uloguj se">


    </form>
</fieldset>

<?php
    include_once "../elementi/footer.php";
?>
</body>
</html>