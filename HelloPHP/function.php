<?php
echo "<h1>함수 사용하기</h1>";
function numbering(){
    $i = 0;
    while ($i<10) {
        echo $i."<br>";
        $i += 1;
    }
}
numbering();



echo "<h1>return 사용하기</h1>";
function returnSum(){
    $sum = 0;
    for($i = 1; $i <= 10; $i=$i+2){
        $sum += $i;
    }
    return "sum=".$sum."<br>";
}
echo returnSum();



echo "<h1>인자(argument) 사용하기</h1>";
function arg($a){
    echo $a;
}
echo arg("Hi Argument:)");

?>