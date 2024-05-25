<?php
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['vote'])) {
    $vote = $_POST['vote'];

    if ($vote == 'good' || $vote == 'bad') {
        try {
            $sql = 'INSERT INTO votes (vote) VALUES (:vote)';
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':vote', $vote);
            $stmt->execute();

            header('Location:../index.php');
            exit(1);
        } catch (PDOException $e) {
            echo "投票失敗: " . $e->getMessage() . "\n";
            exit(1);
        }
    }
}
