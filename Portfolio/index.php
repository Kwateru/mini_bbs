<?php
// 生年月日から年齢計算
include('function/util.php');

// head要素
$title = '自己紹介ページ';

// DB接続
include('db/connection.php');

// 投票の集計
include('function/get_votes.php');

// 掲示板
include('function/get_bbs.php');
?>

<!DOCTYPE html>
<html lang="ja">

<!-- head -->
<?php include('layout/head.php'); ?>

<body>
    <!-- ヘッダー -->
    <?php include('layout/header.php'); ?>

    <!-- メインコンテンツ -->
    <main class="site-wrapper">
        <h1 class="profile_title">自己紹介ページ</h1>
        <div class="profile">
            <img src="image/profile.png" alt="自己紹介用の画像です。" class="profile_img">
            <div class="profile_comment">
                <p>ニックネーム：<?php echo $user['name'] ?></p>

                <h2>コメント</h2>
                <p>一言：<?php echo $user['comment'] ?></p>
            </div>
        </div>

        <div class="features">
            <h2>詳細</h2>
            <dl>
                <div>
                    <dt>誕生日</dt>
                    <dd><?php echo getBirthday($user['birthday']) ?></dd>
                </div>
                <div>
                    <dt>年齢</dt>
                    <dd><?php echo getAge($user['birthday']) ?></dd>
                </div>
                <div>
                    <dt>性別</dt>
                    <dd>男</dd>
                </div>
                <div>
                    <dt>趣味</dt>
                    <dd>スノーボード</dd>
                </div>
                <div>
                    <dt>特技</dt>
                    <dd>サッカー</dd>
                </div>
            </dl>
        </div>

        <div class="features">
            <h2>投票</h2>
            <form method="post" action="function/vote.php">
                <button type="submit" name="vote" value="good" class="btn-vote"><span class="vote-css"><?php echo $goodVotes ?></span>Good</button>
                <button type="submit" name="vote" value="bad" class="btn-vote"><span class="vote-css"><?php echo $badVotes ?></span>Bad</button>
            </form>
        </div>

        <div class="features">
            <h2>ミニ掲示板</h2>
            <form action="function/bbs.php" method="post">
                <input type="text" name="comment" placeholder="コメントを書いてね！">
                <input type="submit" value="投稿">
            </form>
            <?php echo $commentList ?>
        </div>

        <div class="features">
            <h2>能力</h2>
            <dl>
                <div>
                    <dt>HTML/CSS</dt>
                    <dd>3ヶ月</dd>
                </div>
                <div>
                    <dt>PHP</dt>
                    <dd>3ヶ月</dd>
                </div>
                <div>
                    <dt>英語検定</dt>
                    <dd>2級</dd>
                </div>
            </dl>
        </div>
    </main>
    <!-- フッター -->
    <?php include('layout/footer.php'); ?>
</body>

</html>