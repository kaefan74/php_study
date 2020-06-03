<?php 
//組込み関数
//日本語の場合utf-8
$text = 'あい';
  echo(strlen($text));//6
//マルチバイト
echo('<br>');
echo(mb_strlen($text));//2
//文字列の置換
echo('<br>');
$str = '文字列を置換します';
echo str_replace('置換','ちかん',$str);

//指定文字列で分割
  
  $str_2 = '指定文字列で、分割します';
  echo'<pre>';
  var_dump( explode('、',$str_2));
  echo('</pre>');

  //正規表現
  $str_3='特定の文字列が含まれているか確認';
  echo preg_match('/文字列/',$str_3);

  //指定文字列から文字列を取得する
  echo mb_substr('アイウエオ',2);
?>