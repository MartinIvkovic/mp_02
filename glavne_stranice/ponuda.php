<?php
    include_once "../php/objekat.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponuda</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <style>
        .ponuda_div {
            width:50%;
        }
    </style>
</head>
<body>
<?php
    include_once "../elementi/header.php";
    ?>
    <?php
    include_once "../elementi/nav_bar.php";
    ?>
    <h1>Ponuda</h1>
    <?php
        include_once "../elementi/search_bar.php";
    ?>
<?php
        include_once "../php/sortiranje_pretraga.php"
?>

<?php
echo "<div class=\"ponuda_veliki_div\">";
        function tostring($niz) {
            $to_return="";
    foreach ($niz as $val) {
        echo "<div class=\"ponuda_div\">";
        echo "<img class=\"ponuda_slike\" src="."../slike_projekat/top_ponuda/auto_".$val["id"].">";
        echo "<div class=\"ponuda_text\">".$val["naziv"]."<br>".$val["boja"]."<br>".$val["cena"]."eura"."<br>". "<button onclick=\"location.href = '../automobili/novi_auto_".$val["id"]."';\" id=\"myButton\" class=\"float-left submit-button\" >saznaj vise</button>"."</div>";
        echo "</div>";
    }
    return $to_return;
}
echo tostring($niz);
echo "</div>";
?>

<?php
    include_once "../elementi/footer.php";
?>
</body>
</html>