<?php


$arr = ['abc','edf','ghi',1];

// array_reduce($arr,test(),3)的最后返回值为一个闭包，两个参数为
// $arg2：数组参数的最后一个,$arg1:闭包,参数arg1为参数ghi和上一个闭包为参数组成的闭包

echo
//  function test()
// {
 
 
//   return function($arg1,$arg2){
//     echo 'arg1';
//   dump($arg1);
  
//     echo "<br/>";
//     echo "arg2";
//    dump($arg2);
//  exit;
//     return function($p1) use($arg1,$arg2){
//     echo '----arg1';
//   dump($arg1);
  
//     echo "<br/>";
//     echo "----arg2";
//    dump($arg2);
//    echo "<br/>";
//    echo "----p1";
//    dump($p1);
   
//     };
//   };
// }


// $closure1 = function ($value='')
// {
//   echo 2222;
// };

// $t = call_user_func(array_reduce($arr,test(),3),'canshu');

  // $t(); 