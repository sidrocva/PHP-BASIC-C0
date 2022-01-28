<?php
$var =12;
$var1 = 10;
if($var < 10 && $var1 > 5){
    echo "is beide waar" . "<br>";
}
else{
    echo "is niet zo" . "<br>";<?php
    $var =12;
    $var1 = 10;
    if($var < 10 && $var1 > 5){
        echo "is beide waar" . "<br>";
    }
    else{
        echo "is niet zo" . "<br>";
    }
    
    if($var <10 || $var1 > 5){
        echo "1 van die 2 is waar of allebei" . "<br>";
    }
    else{
        echo"geen van die 2 is waar" . "<br>'";
    }
    
    if($var <10 xor $var1 > 5){
        echo "alleen 1 is waar" . "<br>";
    }
    else{
        echo "nope geen 1 of allebei is waar" . "<br>";
    }
    
    if($var <10 != $var1 > 5){
        echo "niks is waar";
    }
    else{
        echo"ik had het fout er is wel iets waar" . "<br>";
    }
    
    ?>
}

if($var <10 || $var1 > 5){
    echo "1 van die 2 is waar of allebei" . "<br>";
}
else{
    echo"geen van die 2 is waar" . "<br>'";
}

if($var <10 xor $var1 > 5){
    echo "alleen 1 is waar" . "<br>";
}
else{
    echo "nope geen 1 of allebei is waar" . "<br>";
}

if($var <10 != $var1 > 5){
    echo "niks is waar";
}
else{
    echo"ik had het fout er is wel iets waar" . "<br>";
}

?>