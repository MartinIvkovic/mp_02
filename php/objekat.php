<?php
class auto {
        public $id;
        public $naziv;
        public $godiste;
        public $cena;
        public $snaga;
        public $boja;


        function __toString()
        {
            return "naziv: $this->naziv
            <br>godiste: $this->godiste
            <br>cena:$this->cena Evra
            <br>snaga:$this->snaga KS
            <br> boja:$this->boja";
        }
        function __construct($id,$naziv,$godiste,$cena,$snaga,$boja)
        {
            $this->id=$id;
            $this->naziv=$naziv;
            $this->godiste=$godiste;
            $this->cena=$cena;
            $this->snaga=$snaga;
            $this->boja=$boja;
        }
        function setid($id) {
            $this->id=$id;
        }
        function setNaziv($naziv) {
                $this->naziv=$naziv;
            }
        function setGodiste($godiste) {
                $this->godiste=$godiste;
        }
        function setCena($cena) {
                $this->cena=$cena;
        }
        function setSnaga($snaga) {
                $this->snaga=$snaga;
        }
        function setBoja($boja) {
                $this->boja=$boja;
        }
    
    function getid() {
        return $this->id;
    }
        function getNaziv() {
            return $this->naziv;
        }
        function getGodiste() {
            return $this->Godiste;
        }
        function getCena() {
            return $this->Cena;
        }
        function getSnaga() {
            return $this->snaga;
        }
        function getBoja() {
            return $this->Boja;
        }

        function prikaziObjekat() {
            return "<div>";
            return "<img src=\"../slike_projekat/Top_ponuda/auto_$this->id.jpg\">";
            return "</div>";
        }

    
}
$auto_1 =new auto (1,"bmw m4",2021,100000,550,"zelena");
$auto_2 =new auto (2,"mercedes amg", 2020,150000,600,"siva");
$auto_3 =new auto (3,"porsche Taycan", 2020,90000, 450,"bela");
$auto_4 =new auto (4,"lamborghini urus",2019,200000,350,"zuta");
$auto_5 =new auto (5,"Opel Astra", 2022,25000,150,"zuta");
$auto_6 =new auto (6,"mazda cx-30", 2021,35000,120,"siva");
$auto_7 =new auto (7,"ford mustang", 2019,50000,300,"plava");
$auto_8 =new auto (8,"honda hcr",2021,30000,150,"siva");
$auto_9 =new auto (9,"mercedes G-class", 2019,90000, 250, "crna");
$auto_10 =new auto(10,"ford bronco",2022,30000,160,"siva");


$niz=[
    (array)$auto_1,
    (array)$auto_2,
    (array)$auto_3,
    (array)$auto_4,
    (array)$auto_5,
    (array)$auto_6,
    (array)$auto_7,
    (array)$auto_8,
    (array)$auto_9,
    (array)$auto_10,
];
?>
