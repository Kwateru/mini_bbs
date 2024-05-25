<?php
include('./db/connection.php');

try {
    $sql = 'SELECT 
        SUM(CASE WHEN vote = "good" THEN 1 ELSE 0 END) AS good_votes,
        SUM(CASE WHEN vote = "bad" THEN 1 ELSE 0 END) AS bad_votes
    FROM votes';

    $Stmt = $dbh->prepare($sql);
    $Stmt->execute();
    $result = $Stmt->fetch(PDO::FETCH_ASSOC);

    $goodVotes = $result['good_votes'];
    $badVotes = $result['bad_votes'];
} catch (PDOException $e) {
    echo "投票の集計に失敗しました。: " . $e->getMessage() . "\n";
}
