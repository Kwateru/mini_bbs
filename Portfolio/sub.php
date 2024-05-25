<?php
// head要素
$title = '俺の行ってみたい焼肉ベスト3';
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
        <h1>俺の行ってみたい焼肉ベスト3</h1>
        <section class="main-content">
            <img src="image/サムネイル画像.png" alt="俺の行ってみたい焼肉ベスト3のサムネイル画像です。" width="600">
            <div class="main-introduction">
                <h3>ルール</h3>
                <ul>
                    <li>関西圏で比較的に行きやすいこと</li>
                    <li>ランキング自体はあまり関係がないこと</li>
                    <li>年内に頑張っていくこと</li>
                </ul>

                <h3>大変だったこと</h3>
                <ul>
                    <li>テーマ決め</li>
                    <li>デザイン（文字や余白のサイズ調整）など</li>
                    <li>CSSのコメントアウトの使い方</li>
                    <li>作業時間の捻出</li>
                </ul>
            </div>
        </section>
        <div class="image_source">
            出典元：https://www.photo-ac.com/main/search?q=%E5%AE%B6%E6%97%8F%E3%81%A7%E7%84%BC%E3%81%8D%E8%82%89&srt=dlrank
        </div>
        <!-- ランキング -->
        <section>
            <h2 class="site-heading">俺の行ってみたい焼肉 第3位</h2>
            <div class="rank-img">
                <img src="image/第三位の焼肉の画像.png" alt="俺の行ってみたい焼肉 第3位の画像です。" width="600">
            </div>
            <div class="image_source">出典元：https://tabelog.com/osaka/A2701/A270205/27000561/dtlphotolst/smp2/</div>
            <table class="table-design">
                <tbody>
                    <!-- 第3位 -->
                    <tr>
                        <th>店名：</th>
                        <td>万正</td>
                    </tr>
                    <tr>
                        <th>場所：</th>
                        <td>大阪府大阪市生野区桃谷3-3-2</td>
                    </tr>
                    <tr>
                        <th>予算：</th>
                        <td>￥6,000～￥7,999</td>
                    </tr>
                    <tr>
                        <th>食べログ：</th>
                        <td><a href="https://tabelog.com/osaka/A2701/A270205/27000561/">https://tabelog.com/osaka/A2701/A270205/27000561/</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2 class="site-heading">俺の行ってみたい焼肉 第2位</h2>
            <img src="image/第2位の焼肉の画像.png" alt="俺の行ってみたい焼肉 第2位の画像です。" width="600">
            <div class="image_source">出典元：https://tabelog.com/osaka/A2701/A270401/27000791/dtlphotolst/smp2/</div>
            <table class="table-design">
                <tbody>
                    <!-- 第2位 -->
                    <tr>
                        <th>店名：</th>
                        <td>安兵衛</td>
                    </tr>
                    <tr>
                        <th>場所：</th>
                        <td>大阪府大阪市此花区西九条3-11-18</td>
                    </tr>
                    <tr>
                        <th>予算：</th>
                        <td>￥8,000～￥9,999</td>
                    </tr>
                    <tr>
                        <th>食べログ：</th>
                        <td><a href="https://tabelog.com/osaka/A2701/A270401/27000791/">https://tabelog.com/osaka/A2701/A270401/27000791/</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2 class="site-heading">俺の行ってみたい焼肉 第1位</h2>
            <img src="image/第1位の焼肉の画像.png" alt="俺の行ってみたい焼肉 第1位の画像です。" width="600">
            <div class="image_source">出典元：https://tabelog.com/osaka/A2701/A270104/27008433/dtlphotolst/smp2/</div>
            <table class="table-design">
                <tbody>
                    <!-- 第1位 -->
                    <tr>
                        <th>店名：</th>
                        <td>和牛の紀楽</td>
                    </tr>
                    <tr>
                        <th>場所：</th>
                        <td>大阪府大阪市北区天満2-12-7</td>
                    </tr>
                    <tr>
                        <th>予算：</th>
                        <td>￥10,000～￥14,999</td>
                    </tr>
                    <tr>
                        <th>食べログ：</th>
                        <td><a href="https://tabelog.com/osaka/A2701/A270104/27008433/">https://tabelog.com/osaka/A2701/A270104/27008433/</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <!-- フッター -->
    <?php include('layout/footer.php'); ?>
</body>

</html>