<?php
 class Post {
     private $title;
     private $text;
     private $image;
     private $date;
     
     public function __construct($tit,$t,$i) {
         $this->title=$tit;
         $this->text=$t;
         $this->image=$i;
         //$this->date=date("Y/m/d");
    }
    
    public function pechati(){
        $tekst="<h1 style='text-align:center; background:black;color:white;'>".
                $this->title."</h1>"."<img style='text-align:center;width:70%;padding-left:16%' src='./images/".
                $this->image."'/><br><p style='text-align:center;color:black;background:#fdf1ba;padding:5%;font-weight:bolder;'>".
                $this->text."</p>";
        echo "<div style='background-color:#fdb200;color:black; padding:5%; width:auto';padding-left:10%>".$tekst."</div>";
    }
 }
 //rgb(111, 175, 169)
 ?>