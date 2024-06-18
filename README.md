![image](https://github.com/Kwateru/mini_bbs/assets/33171676/809bbbe8-3dce-482c-bf35-39fff9c08e58)

## 1.概要
ページ内にコメントを投稿して表示出来る機能を追加する。
<br><br>



## 2.機能要件
* レベル1：投稿ボタンを押下したらコメントをDBに保存する。
* レベル2：DB保存時にPHPで入力チェック（必須チェックと文字数チェック）を実施して、適宜エラーを表示する。
* レベル3：SQLを実行する処理の中にSQLインジェクション対策を追加する。

## 3.仕様動作のイメージ
![2024-06-19_02h06_07](https://github.com/Kwateru/mini_bbs/assets/33171676/96b872fa-ece9-4f0f-8de0-6d279e288e99)

## 4.機能一覧
| トップ画面 |　バリデーション１ |
| ---- | ---- |
| ![image](https://github.com/Kwateru/mini_bbs/assets/33171676/702016ba-6ba4-4e6b-adbd-0181f136c3a7) | ![image](https://github.com/Kwateru/mini_bbs/assets/33171676/004cda8d-6f6c-4073-b8cf-41e8dd9ecea2) |
| ミニ掲示板の投稿欄とコメント一覧です。 | 空文字の投稿時の画面です。DBには登録されず5秒後に自動リダイレクトします。 |

| バリデーション２ |　投稿成功 |
| ---- | ---- |
| ![image](https://github.com/Kwateru/mini_bbs/assets/33171676/d3c6b57d-c2e1-40cc-9b97-87f47f8eb9fe) | ![image](https://github.com/Kwateru/mini_bbs/assets/33171676/5f74cb93-0abe-4189-8f3c-320cc040a173) |
| 9文字以下の投稿時の画面です。DBには登録されず5秒後に自動リダイレクトします。 | 10文字以上の投稿があれば、コメント一覧の最上位に表示します。 |



## 5.使用技術
| Category          | Technology Stack    | 
| ----------------- | ------------------- | 
| Frontend          | HTML, CSS           | 
| Backend           | PHP                 | 
| Database          | phpMyAdmin          | 
| Environment setup | Docker              | 
| etc.              | Git, GitHub, vscode | 

## 6.今後の展望
* 投稿時間を日本の時間にしたい。
* ユーザー名を表示して会話っぽさを見せたい。
* 「｜」区切りではなく、綺麗なレイアウトで表示させたい。
