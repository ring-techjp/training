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

        <?php 
        $items = array( "名前" => $_POST['name'], "電話番号" => $_POST['tel'], "メールアドレス" => $_POST['email']);
        ?>
        <div class="wrap">
                <?php foreach($items as $key => $item):?>
                <div class="confirmation-item">
                    <div class="confirmation-item-name"><?php echo $key ?></div>
                    <div class="confirmation-item-detail">
                        <?php $str= ""; ?>   
                        <?php if($item==$str){
                                echo "**{$key}が入力されていません**";
                            }else{
                                echo $item;
                            }
                        ?>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
</body>
</html>