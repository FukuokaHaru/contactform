<?php

mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root","root");

$sql ="insert into contactform(name, mail, age, comments) values(?,?,?,?)";
$stml = $pdo->prepare($sql);

$stml->bindValue(1, $_POST['name']);
$stml->bindValue(2, $_POST['mail']);
$stml->bindValue(3, $_POST['age']);
$stml->bindValue(4, $_POST['comments']);

$stml->execute();

?>

<!doctype HTML>
<html lang ="ja">

<head>
<meta charset ="utf-8">
    <title>お問い合わせフォームを作る</title>
<link rel ="stylesheet" type ="text/css" href ="style2.css">
</head>

<body>

    <h1>お問い合わせフォーム</h1>

    <div class ="confirm">
        <p>
            お問い合わせ有難うございました。<br>3日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

</body>
</html>