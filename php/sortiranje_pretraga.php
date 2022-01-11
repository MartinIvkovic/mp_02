<?php
    if(isset($_GET["pretraga"])) {
        $pretraga=$_GET["pretraga"];
        $niz= array_filter($niz, function ($item) use ($pretraga) {
            if (stripos($item['naziv'], $pretraga) !== false) {
                return true;
            }
            return false;
        });
    }

?>
<?php
    if(isset($_GET["poredjaj"])){
        if($_GET["poredjaj"]=="cena_opadajuce"){
            usort($niz, function($a,$b){
                if($a["cena"]>$b["cena"]) {return -1;}
                elseif ($a["cena"]==$b["cena"]) {return 0;}
                else {return 1;}
        
            });
        }
        else{
            usort($niz, function($a,$b){
                if($a["cena"]>$b["cena"]) {return 1;}
                elseif ($a["cena"]==$b["cena"]) {return 0;}
                else {return -1;}
        
            });
        }
    }
?>