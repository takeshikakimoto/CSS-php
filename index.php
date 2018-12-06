<html lang="jp">
<title>データ送る方</title>

<head>
</head>

<body>
<h1>Hello World</h1>
<form action="output.php" method="post">
    <table border="1">
        <tr>
            <td>入力内容</td>
            <td><input type="text" name="name"></td>
            <td colspan="2" align="center">
                <input type="submit" value="送信">
            </td>
        </tr>
    </table>
</form>
<h2>DB出力先</h2>
<?php
    $pdo = new PDO("mysql:host=localhost;dbname=test_db;charset=utf8", "root", "");

    try {

    } catch (PDOException $e) {


        echo 'データベースにアクセスできません！' . $e->getMessage();


        exit;

}
$sql = "SELECT * FROM test_db";


$stmt = $pdo->query($sql);


foreach ($stmt as $row) {


echo $row['name'].'：'.$row['naiyou'];


echo '<br>';
}
?>
<h3>入力した内容を送ってDBに反映させるところ</h3>
<form action="modori.php" method="post">
    <dt>名前</dt>
    <dd><input type="text" name="name" value=""></dd>


    <dt>内容</dt>
    <dd><input type="text" name="naiyou" value=""></dd>
    <input type="submit" value="送信">
</form>

</body>

</html>