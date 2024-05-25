<?php
include('./db/connection.php');

try {
    $sql = 'SELECT * FROM `comments` ORDER BY date DESC';

    $Stmt = $dbh->prepare($sql);
    $Stmt->execute();
    $comment = $Stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($comment as $commentList){
        echo $commentList['id'];
        echo $commentList['comment'];
        echo $commentList['date'];
    }
} catch (PDOException $e) {
    echo "投稿の出力に失敗しました。: " . $e->getMessage() . "\n";
}