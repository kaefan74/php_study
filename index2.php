<!-- http://localhost:8888/php_test/index2.php -->
<?php
 //関数　何らかの処理をする
 // 組込み関数　ユーザー定義関数
  // function test(引数){
  //   処理
  //   return 戻り値
  // }
  $commment= 'テスト';
  function getComment($string){
    echo $string;
  }
  getComment($commment);
  echo('<pre>');
  function getNumberOfcomment(){
    return 5;
  }
  $commmentNumber=getNumberOfcomment();

  echo $commmentNumber;
  echo('<pre>');
  var_dump(getNumberOfcomment());
  echo('<pre>');
  
?>