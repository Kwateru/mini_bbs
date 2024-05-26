<?php
include('./db/connection.php');

try {
    $sql = 'SELECT * FROM `comments` ORDER BY date DESC';

    $Stmt = $dbh->prepare($sql);
    $Stmt->execute();
    $comment = $Stmt->fetchAll(PDO::FETCH_ASSOC);

    function commentArray($comment)
    {
        foreach ($comment as $commentList) {
            echo '<p>' . $commentList['id'] . '｜';
            echo $commentList['comment'] . '｜';
            echo $commentList['date'] . '</p>';
        }
    }
} catch (PDOException $e) {
    echo "投稿の出力に失敗しました。: " . $e->getMessage() . "\n";
}
