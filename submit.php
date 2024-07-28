<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="sanpuru.css">
    <title>完了画面/サンプル</title>
</head>

<body>
    <div class="hedar">
        <div class="hedar-logo"><a href="top.html">サンプル</a></div>
        <div class="hedar-list">
            <ul>
                <li><a href="hello.html">挨拶</a></li>
                <li><a href="overview.html">概要</a></li>
                <li><a href="fee.html">料金</a></li>
                <li><a href="notice.html">お知らせ</a></li>
                <li><a href="contact.html">お問い合わせ</a></li>
            </ul>
        </div>
    </div>

    <div class="contact">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 送信先のメールアドレスを設定
    $to = "2p3jvg5o8@gmail.com"; // ここに実際にメールを受信するメールアドレスを設定

    // メールの件名
    $subject = "お問い合わせがありました";

    // メール本文
    $body = "お名前: $name\n";
    $body .= "メールアドレス: $email\n";
    $body .= "お問い合わせ内容:\n$message";

    // メール送信処理
    if (mail($to, $subject, $body)) {
        echo "<p>お問い合わせありがとうございます。メールが送信されました。</p>";
    } else {
        echo "<p>メールの送信に失敗しました。後ほど、再度お願いいたします。</p>";
    }
    }
    ?>
    </div>

    <div class="footer">
        <div class="footer-rist">
            <div class="footer-rist1">
                <p>住所・・・テンプレ</p>
                <p>電話番号・・・テンプレ</p>
                <p>メールアドレス・・・テンプレ</p>
            </div>
            <div class="footer-rist2">
                <ul>
                    <li><a href="hello.html">挨拶</a></li>
                    <li><a href="overview.html">概要</a></li>
                    <li><a href="fee.html">料金</a></li>
                    <li><a href="notice.html">お知らせ</a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>
