<!-- http://localhost:8888/php_test/form/input.php -->
<?php
echo '<pre>';
  var_dump( $_POST);
  echo '<pre>';  
  $pageFlag = 0;
  if(!empty($_POST['btn_confirm'])){
    $pageFlag = 1;
  }
  if(!empty($_POST['btn_submit'])){
    $pageFlag = 2;
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<?php if($pageFlag === 1): ?>
<!-- 確認 -->
  <form method="POST"action="input.php">
    名前
    <?php echo $_POST['your_name'];?>
    <!-- <input type="text" name="your_name"> -->
    メールアドレス
    <?php echo $_POST['email'];?>
    <br>
    <input type="submit"name="back"value="戻る">
    <input type="submit"name="btn_submit" value="送信する">
    <input type="hidden" name="your_name" value="<?php echo $_POST['your_name'];?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
  </form>
<?php endif;?>

<?php if($pageFlag === 2): ?>
<!-- 完了 -->
送信が完了しました。
<?php endif;?>

<?php if($pageFlag === 0): ?>
<!-- 入力 -->
  <form method="POST"action="input.php">
    名前
    <input type="text" name="your_name"value="<?php echo $_POST['your_name'];?>">
    <br>
    メールアドレス
    <input type="email" name="email"value="<?php echo $_POST['email'];?>">
    <input type="submit"name="btn_confirm" value="確認する">
  </form>
<?php endif;?>
</body>
</html>