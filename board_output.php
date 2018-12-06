<!DOCTYPE html>
<head>
    <meta charset = “UFT-8”>
    <title>ありがとうございます</title>
</head>
<body>


<?php
date_default_timezone_set('Asia/Tokyo');
session_start();

$error = array();


$title = $_POST['title'];
$name = $_POST['name'];
$text = $_POST['text'];
$date = date('Y-m-d H:i:s');

if ($title == '') {
    $error[] = "<br />タイトルを入力してください<br />";
}
if (mb_strlen($title) > 40) {
    $error[] = "タイトルは40文字以内で入力して下さい<br />";
}
if ($name == '') {
    $error[] = "名前を入力してください<br />";
}
if (mb_strlen($name) > 20) {
    $error[] = "名前は20文字以内で入力して下さい<br />";
}
if ($text == '') {
    $error[] = "本文を入力してください<br />";
}
if (mb_strlen($text) > 140) {
    $error[] = "本文は140文字以内で入力して下さい<br />";
}

if (count($error) > 0){
    foreach($error as $errorms)
        print ("警告：$errorms<br />");
    print ("戻ってください：<a href = \"http://localhost/board_input.php\"> トップへ </a>");
}

?>
<?php if (count($error) == 0){

    try {$pdo = new PDO("mysql:host=localhost;dbname=board_test;charset=utf8", "root", "");
        $sql = "INSERT INTO board(title,name,text,date) VALUES('$title','$name','$text','$date')";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();
    } catch (PDOException $e) {

        echo 'エラーが発生しました';
        exit;
    }

    print ("タイトル：$title<br />");
    print ("お名前：$name<br />");
    print ("メッセージ：$text<br />");
    print ("日付：$date<br />");
    print ("<a href = \"http://localhost/board_input.php\"> トップへ </a>");}
?>


</body>
</html>