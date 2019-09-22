<?php

                // //サーバー名 ユーザー名 パスワードを設定して接続する
                // mysqli_connect("localhost","root","root");


                // if(mysqli_connect_error()){
                //         echo "データベースへの接続へ失敗しました。";
                // }else{
                //         echo"データベースへの接続へ成功しました";
                // }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
        <title>WEB</title>
        <link rel="stylesheet" href="css/form.css">
        <link rel="shortcut icon" href="img/do.ico">
        <meta charset="UTF-8">
</head>
<body>  


<a href="index.php"><img src="img/t.jpg" alt="メインメニューへ"></a>

<div id="form"> 

<h2>アカウントの作成</h2>
<form action="form.php">
<label />氏名<p><input type=""></p>
<label />フリガナ<p><input type=""></p>
<label />メールアドレス<p><input type=""></p>
<label />パスワード<p><input type=""></p>
<label />パスワード再入力<p><input type=""></p>
<input type="submit" value="送信">
<input type="reset" value="リセット">


<p><label>既にアカウントお持ちですか？<a href="SignIn.php">ログイン</a></p>
</form>
</div>
<footer>
        <ul>
                <li><a href="">sample</a></li>
                <li><a href="">sample</a></li>
                <li><a href="">sample</a></li>
                <li><a href="">sample</a></li>
                <li><a href="">sample</a></li>
                <li><a href="">sample</a></li>
                <li><a href="">sample</a></li>
        </ul>
</footer>


<script src="js/index.js"></script>
</body>
</html>