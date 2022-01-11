
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontakt</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
<?php
    include_once "../elementi/header.php";
    ?>
    <?php
    include_once "../elementi/nav_bar.php";
    ?>
    <div class="div_kontakt">
<fieldset>
    <form action="../php/komentar.php" method="get">
    <label for="ime">Ime:</label>
    <input type="text" name="ime" id="ime"><br>
    <label for="email">Email:  </label>
    <input type="email" name="email" id="email"> <br>
    <label for="tel">Telefon: </label>
    <input type="tel" id="tel" name="tel"><br>
    <label for="ta">Vas komentar:</label>
    <textarea name="ta" id="ta" cols="30" rows="5">Upisite komentar</textarea><br>
    <input type="submit">



    </form>


</fieldset>
</div>


    <?php
    include_once "../elementi/footer.php";
?>
</body>
</html>