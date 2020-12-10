<html>
 <body>
  <?php
  //변수 선언하기
  echo "<h1>변수에 int 넣기</h1>";
   $a = 1;
   echo $a+12; #13
   echo "<br>";
   //변수에 값 넣기
   $a = -5;
   //print는 echo와 같은 의미
   print $a+10; #5

   //변수에 string넣기
   echo "<h1>변수에 String 넣기</h1>";
   $c = "This is";
   echo $c." PHP";
  
   //상수 선언하기
   echo "<h1>상수 선언하기</h1>";
   define('TITLE','PHP Constant');
   echo TITLE;

   //상수에 값을 또 넣으면 에러
   //define('TITLE','HIHI I\'m constant.');

   echo "<h1>변수의 데이터타입 받기 OR 변환하기</h1>";
   $d = '5';
   echo gettype($d);
   settype($d,'int');
   echo "<br>";
   echo gettype($d);

 echo "<h1>가변변수 사용하기</h1>";
 $aaa = "Hello";
 $$aaa = "World";
 echo "$aaa<br>";
 echo "${$aaa}<br>";
 echo "$Hello<br>";
 echo "$aaa ${$aaa}";

   ?>

dsf
 </body>
</html>