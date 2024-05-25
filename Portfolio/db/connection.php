<?php
// データベース接続情報の設定
$dsn = 'mysql:dbname=academy_db;host=docker_server-db-1';
$user = 's4LwPq';
$password = 'zXw8mVbL1';

try {
    $dbh = new PDO($dsn, $user, $password);
    // usersテーブルから全てのレコードを取得するためのSQLクエリ
    $sql = 'SELECT * FROM users';

    // $dbhはデータベース接続オブジェクト（PDOインスタンス）
    // prepareメソッドを使って、SQLクエリを準備
    $userList = $dbh->prepare($sql);

    // executeメソッドを使って、準備したSQLクエリをデータベースに対して実行
    $userList->execute();

    // fetchAllメソッドを使って、SQLクエリの結果を全て取得
    // PDO::FETCH_ASSOCは、取得する結果の形式を指定（各行を連想配列として取得）
    // $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($userList as $user);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit(1);
}