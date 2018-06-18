<?php 

function LongestWord($sen) {  
    $arr = explode(" ", $sen);
    $max = "";
    foreach($arr as $x){
        if(strlen($max) <  strlen($x)){
            $max = $x;
        }
    }
  // code goes here
  return $max; 
         
}
   
// keep this function call here  
echo LongestWord(fgets(fopen('php://stdin', 'r')));  

?>
