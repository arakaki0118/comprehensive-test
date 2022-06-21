# 今回作成したLaravelアプリの環境構築手順

LaravelはPHPフレームワークのため、PHPの環境構築が必要です。
コードエディタ(VS Code)はインストールされている前提で記述します。

## XAMPPのインストール

公式HP(https://www.apachefriends.org/jp/index.html) からインストーラをダウンロードします。

ご自身のOS(Windows/Mac)に合わせてインストーラを選択してください。

インストーラの標準設定から変更することはありませんので、インストーラの指示に従ってインストールを行ってください。

## Composer(コンポーザー)のインストール

公式HP(https://getcomposer.org/download/) からインストーラをダウンロードします。

ご自身のOS(Windows/Mac)に合わせてインストーラを選択してください。

特にインストーラの標準設定から変更することはありませんので、インストーラの指示に従ってインストールを行ってください。

ComposerをインストールすることでLaravelが使用できるようになります。

XAMPP/Composerのインストールについては下記URLを参考にしてください。

(https://qiita.com/mitashun/items/ced252681edf2b01cd32)

## Laravelの起動

1.XAMPPアプリケーションの起動、Apache/MySQLの起動を確認してください。

2.GitHub内の'Laravel'フォルダをC:\xampp\htdocs直下にコピーしてください。

3.コピー後、VS Codeでフォルダを開きます。

4.VS Code内のターミナルでC:\xampp\htdocs\laravelまで移動してください。

5.ターミナルで'php artisan serve'と入力してください。

6.ターミナルに[Laravel development server started: http://127.0.0.1:8000]　と表示されます。

7.(http://127.0.0.1:8000) にアクセスしてログイン画面が表示されれば起動完了です。
