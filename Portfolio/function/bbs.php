<?php
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'  && !empty($_POST['comment'])) {
    $comment = $_POST['comment'];
    $commentLength = mb_strlen($comment);

    if ($commentLength >= 10) {
        try {
            $sql = 'INSERT INTO comments (comment) VALUE (:comment)';
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':comment', $comment);
            $stmt->execute();

            header('Location:../index.php');
            exit(1);
        } catch (PDOException $e) {
            echo "投稿失敗: " . $e->getMessage() . "\n";
            exit(1);
        }
    } else {
        echo "コメントの文字数が足りない（10文字以上）";
    }
} else {
    echo "空文字は投稿できないよ。10文字以上入力してね。";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content=" 5; url=../index.php">
    <title>入力エラーのページ</title>
</head>

<body>
    <p>これより先はhttp://localhost/class-c-01-07/portfolio/index.phpのサイトに遷移します。</p>
    <p>5秒後に自動転送します。</p>
    <p>自動に画面を読み込まない場合は、以下のリンクをクリックして下さい。</p>
    <p><a href="http://localhost/class-c-01-07/portfolio/index.php">自己紹介のページに戻る</a></p>
</body>

</html>