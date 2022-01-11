<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylesheet.css">

    <style>
        .veliki_div_o_nama {
           
            margin-bottom: 200px;
            display: block;
            text-align: center;
        }
        iframe {
            display:block;
            text-align: center;
        }
     .text {width:50%;}
 
  p {display:block;}
    </style>
</head>
<body>
<?php
    include_once "../elementi/header.php";
    ?>
    <?php
    include_once "../elementi/nav_bar.php";
    ?>
    <div class="veliki_div_o_nama">
    <div class="text"><p>KupiAuto je online prodaja luksuznih automobila, jedini u zemlji prodajemo najnovije i najluksuznije automobile</p><br></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54788.64428870668!2d21.91231944503361!3d43.317331956290666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1641717569845!5m2!1ssr!2srs" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <?php
                for($i=1;$i<4;$i++) {
                    echo "<div class=\"slika_salon_div\">";
                    echo "<img class=\"slika_salon\" src=\"../slike_projekat\o_nama\salon_$i.jpg\" height=\"400px\" width=\"500px\">". "<br>";
                    echo "</div>";

                }
        ?>
    </div>
    <?php
    include_once "../elementi/footer.php";
?>
</body>
</html>