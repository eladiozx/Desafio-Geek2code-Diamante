<?php
//Para adicionar a quantidade, mudar na váriavel "$num"
echo "\n======= DIAMOND =======\n\n";

$num=4;


$repetition=$num*2-1;
$space_between=1;
$space_before=$num-2;

for($i=0;$i<$repetition;$i++){
    
    if($i==0 || $i==$repetition-1){

        space($num-1);
        echo "#";
        space($num-1);
    }else{
     space($space_before);
       echo "#";
 
        space($space_between);
       
       echo "#";

       if($i >= floor($repetition/2)){
        $space_between-=2;
        $space_before++;
    }else{
        $space_between+=2;
        $space_before--;
    }
    }
    echo "\n";
}

function space($space){
  for($i=0;$i<$space;$i++){
        echo " ";
  }
}


echo "\n\n";
?>
