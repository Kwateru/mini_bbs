# C級/自己紹介ページDB編（ミニ掲示板）

## 1.概要
ページ内にコメントを投稿して表示出来る機能を追加する。
<br><br>

## 2.レビューポイント
### 機能要件
* レベル1：投稿ボタンを押下したらコメントをDBに保存する。
* レベル2：DB保存時にPHPで入力チェック（必須チェックと文字数チェック）を実施して、適宜エラーを表示する。
* レベル3：SQLを実行する処理の中にSQLインジェクション対策を追加する。

※機能の実現方式やテーブル設計は開発者の判断に委ねる。

### 成果物の前提条件
* PHPとMySQLが使える状態であること。
* テーブルデータをエクスポートして提出する or CREATE TABLE 文をテキストファイルとして提出する。

### 使う技術の一例
* formタグ（HTML）
* POST（PHP）
* SELECT、INSERT（SQL）
<br><br>

## 3.画面設計
<img width="700" alt="image" src="https://github.com/ppf-academy/class-c-01-07/blob/main/image/SelfIntroduction7_layoutmap.png">

※デザインは上の画像と一致する必要はない。
