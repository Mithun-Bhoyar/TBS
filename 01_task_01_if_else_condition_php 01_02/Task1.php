<?php
$a = 15;
$b = 25;
$c = 'sum';


function result($a ,$b ,$c){
    if($c == 'sum'){
        $res = $a +$b;
        return $res;
    }
    elseif($c == 'subtract'){
        $res =$a - $b;
        return $res;
    }
    elseif($c =='multipy'){
        $res = $a * $b;
        return $res;
    }
    elseif($c =='divide'){
        $res = $a / $b;
        return $res;
    }
    else{
        echo"please enter valid input.";
    }
}
$output = result($a, $b , $c);

echo "your result is $output";

?>