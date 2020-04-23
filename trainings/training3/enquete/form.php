<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>確認</title>
        <link rel="stylesheet" type="text/css" href="../enquete/php.css">
    </head>
    <body>
        <main>
            <section id="main_confirm">
                <h1>入力内容</h1>
                <div class="main_confirm_result">
                    <?php
                    $receiveData = $_POST['data'];
                    if($receiveData['name'] === ''){
                            $receiveData['name'] = '名前が入力されていません';
                        }
                    $keyChange = array(
                    '名前' => $receiveData['name'],
                    '電話番号' => $receiveData['tel'],
                    'メール' => $receiveData['mail']
                    );
                    foreach ($keyChange as $key => $value){
                        echo '<p>'.$key.':</p><p>'.$value.'</p>';
                    }
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>
