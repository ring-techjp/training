<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>フォーム</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>アンケートフォーム</h1>
        </div>
        <div class="main">
                <form  class="questionnaire-form" name="form" action="sent.php" method="post" onsubmit="return formCheck()">
                    <div class="questionnaire-form-items">
                        <div class="questionnaire-form-item">
                            <div class="questionnaire-form-item-name">名前</div>
                            <input class="name" type="text" name="name">
                        </div>
                        <div class="questionnaire-form-item">
                            <div class="questionnaire-form-item-name">電話番号</div>
                            <input class="tel" type="text" name="tel">
                        </div>
                        <div class="questionnaire-form-item">
                            <div class="questionnaire-form-item-name">メールアドレス</div>
                            <input class="email" type="text" name="email">
                        </div>
                    </div>
                    <input class="btn" type="submit" value="送信">
                </form>
        </div>
    </div>
    <script src="check.js"></script>
</body>
</html>