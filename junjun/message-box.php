<?php


function showMsgBox($message) {


    $len = strlen($message);


    $separator = "";





    for($i=1; $i<=$len+4; $i++){


if ($i == 1) {


// 最初の+


$separator = $separator . "+";


} elseif ($i==$len+4) {


// 最後の+


$separator = $separator . "+" . PHP_EOL;


} else {


 $separator = $separator . "-";


}





    }





    print $separator;


    print  "| ".$message." |". PHP_EOL;


    print $separator;





}


showMsgBox('This is a sample.');


?>











