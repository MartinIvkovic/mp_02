<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<h1>Top ponuda</h1>
<div class="owl-carousel owl-theme">
    <?php
        for($i=5;$i<14;$i++){
            echo "<div class=\"item$i\"><a href=\"../automobili/novi_auto_$i\"><img src=\"../slike_projekat\Top_ponuda\auto_$i.jpg\"></a></div>";
        }
    ?>
    
</div>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
