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
    }else{
        echo "コメントの文字数が足りない（10文字以上）";
    }
}else{
    echo "空文字は投稿できないよ。10文字以上入力してね。";
}