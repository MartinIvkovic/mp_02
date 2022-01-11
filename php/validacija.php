<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        
?>

    <?php
        class korisnici {
                    public $ime;
                    public $password;

                    function __construct($ime,$password)
                    {
                        $this->ime=$ime;
                        $this->password=$password;
                    }
                    function getIme(){
                        return $this->ime;
                    }
                    function getPassword(){
                        return $this->password;
                    }
                    function __toString() {
                        return $this->ime . "i". $this->password;
                    }


        }
        $korisnik_1=new korisnici ("martin", "bootcamp");
        $korisnik_2=new korisnici ("Hela", "pas123");

        $niz_korisnika =[
            (array)$korisnik_1,
            (array)$korisnik_2,
        ]
    ?>
    
    
    <?php
    if(isset($_POST["ime"]) && isset($_POST["password"])) {
            $ime=$_POST["ime"];
            $password=$_POST["password"];

         function find_username(array $niz,string $val){
            for ($i=0; $i<count ($niz); $i++){
                if ($niz[$i]["ime"] == $val) {return true;}
                
            
            }
            return false;
         }
         function find_password(array $niz,string $val){
            for ($i=0; $i<count ($niz); $i++){
                if ($niz[$i]["password"] == $val) {return true;}
               }
               return false;
        }

            if(find_username($niz_korisnika,$ime)&& find_password($niz_korisnika,$password)) {
                echo "dobrodosli nazad";
            }
            else {"podaci nisu ispravni";}
    }

        else {echo exit;}





// if($ime == $niz_korisnika["ime"] && $password == $niz_korisnika["password"]){
//     echo "dobrodosli nazad";
// }
// else {"nije pronadjen korisnik";}
        ?>
</body>
</html>