<?php
function printArray($arr){
    for($i=0; $i<count($arr); $i++){
        echo $arr[$i]."<br>";
    }
}
echo "<h1># 배열 값 추가/삭제</h1>";
echo "<h2># li 배열 선언</h2>";
$li = ['a','b','c'];
printArray($li);

echo "<br>";

echo "<h2># 마지막에 값 추가</h2>";
echo "<h3>array_push(array, value);<Br></h3>";
array_push($li,'bye, end :)');
printArray($li);

echo "<br>";

echo "<h2># 앞에 값 추가</h2>";
echo "<h3>array_unshift(array,value);<Br></h3>";
array_unshift($li,'hello, start!');
printArray($li);

echo "<br>";

echo "<h2># 마지막에 값 삭제</h2>";
echo "<h3>array_pop(array);<Br></h3>";
array_pop($li);
printArray($li);

echo "<h2># 앞에 값 삭제</h2>";
echo "<h3>array_shift(array);<br></h3>";
array_shift($li);
printArray($li);


echo "<h1># 배열 값 정렬하기</h1>";
echo "<h2># list 배열 선언</h2>";
$list = ['d','e','y','s','b','o'];
printArray($list);

echo "<br>";

echo "<h2># 오름차순 정렬</h2>";
echo "<h3>sort(array)<br></h3>";
sort($list);
printArray($list);

echo "<br>";

echo "<h2># 내림차순 정렬</h2>";
echo "<h3>rsort(array)<br></h3>";
rsort($list);
printArray($list);

echo "<br>";

?>

<a href="https://www.php.net/manual/en/ref.array.php" style="text-decoration:none; color:orange;">배열관련 함수 더 알아보기 click</a>
<br><br>

<?php
function printArray_A($arr){
    foreach($arr as $key=>$value){
        echo $key.":".$value."<br>";
    }
}
echo "<h1># 연관 배열</h1>";
//방법1
$grades1 = array('c++' => 100, 'java' => 95 );
//방법2
$grades2 = [];
$grades2['c++'] = 100;
$grades2['java'] = 95;

echo "<h2># 선언방법 두 개 출력</h2>";
echo "<h3>\$grades1 = array('c++' => 100, 'java' => 95 );<br></h3>";
printArray_A($grades1);
echo "<h3>\$grades2 = [];   \$grades2['c++'] = 100;   \$grades2['java'] = 95;<br></h3>";
printArray_A($grades2);

echo "<h2># 연관배열 값 출력하기</h2>";
echo "<h3>\$arrName['key']<br></h3>";
echo $grades1['c++'];
?>