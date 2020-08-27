<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>確認</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>確認画面</h1>
        </div>
        <div class="wrap">
            <div class="confirmation-item">
                <div class="confirmation-item-name">名前</div>
                <div class="confirmation-item-detail"><?php echo $_POST['name']; ?></div>
                <div id="name-feedback">**名前が入力されていません**</div>
            </div>
            <div class="confirmation-item">
                <div class="confirmation-item-name">電話番号</div>
                <div class="confirmation-item-detail"><?php echo $_POST['tel']; ?></div>
            </div>
            <div class="confirmation-item">
                <div class="confirmation-item-name">メールアドレス</div>
                <div class="confirmation-item-detail"><?php echo $_POST['email']; ?></div>
            </div> 
        </div>
    </div>
    <script src="check.js"></script>
</body>
</html>