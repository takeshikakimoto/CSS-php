<!DOCTYPE html>
<head>
    <meta charset = “UFT-8”>
    <title>データ受け取る方</title>
</head>
<body>
<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=test_db;charset=utf8", "root", "");


$name = $_POST['name'];
$naiyou = $_POST['naiyou'];

var_dump($naiyou, $name);

$sql = "INSERT INTO test_db(name,naiyou) VALUES('$name','$naiyou')";
$stmt = $pdo -> prepare($sql);
$stmt -> execute();
print ("登録しました<br />");
print ("お名前：$name<br />");
print ("内容：$naiyou<br />");
?>

<a href = "http://localhost/"> ここから最初の画面へ </a>

</body>
</html>