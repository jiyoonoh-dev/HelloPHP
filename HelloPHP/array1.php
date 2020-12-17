<?php

//#1. 배열 선언하기
//1.
$subject = Array("Programming", "Math");
//2.
$subject = ["Programming", "Math"];


//#2. 배열 사용하기
echo "<h1>#2. 배열 사용하기</h1>";
echo $subject[0]."<br>"; //Programming
echo $subject[1]; //Math


//#3. 함수에 배열 사용하기
echo "<h1>#3. 함수에 배열 사용하기</h1>";
function get_subject(){
    return ["Programming", "Math"];
}
$tmp = get_subject();
echo $tmp[1];

#4. 더 편하게 함수에 배열 사용하기
echo "<h1>#4. 더 편하게 함수에 배열 사용하기</h1>";
function get_subject1(){
    return ["Programming", "Math"];
}
echo get_subject1()[1];

//#5. 배열과 반복문 사용하기
echo "<h1>#5. 배열과 반복문 사용하기</h1>";
function get_subject2(){
    return ["Programming", "Math"];
}
$subjects = get_subject2(); 
for($i=0; $i< count($subjects); $i++){
    echo ($subjects[$i]).'<br>';
}


?>