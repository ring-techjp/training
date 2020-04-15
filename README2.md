### 研修課題の提出
研修課題はこのレポジトリをForkし、ご自身のGiuHub上のレポジトリを使用していただきます。
まずは課題１のPullRequest（以降PRと記述します）を手順通りに進めてみましょう。  
(すでにやっている作業はスキップしてね！)
 
## ☆Fork
### Description
フォークとは、共有ワークスペース（destructer）にあるレポジトリを自分のGutHub上にコピーする機能です。  
* destructer/traningへアクセス
* 画面右上寄りにある**Fork**というボタンを押下  
<img width="900" alt="スクリーンショット 2020-04-15 15 24 58" src="https://user-images.githubusercontent.com/48113599/79305212-ee826400-7f2d-11ea-90a3-c7e3f1df5342.png">
  

* **自分のレポジトリ**を選択
<img width="1040" alt="スクリーンショット 2020-04-15 15 35 04" src="https://user-images.githubusercontent.com/48113599/79307398-cd237700-7f31-11ea-90d1-8d3ed68b6578.png">
  

* こんな画面が出るから待機
<img width="1027" alt="スクリーンショット 2020-04-15 15 39 59" src="https://user-images.githubusercontent.com/48113599/79307558-0a880480-7f32-11ea-8153-aed6ec6d0b0e.png">
  

* **自分のGitHubにtrainingレポジトリができた**ことを確認
<img width="1013" alt="スクリーンショット 2020-04-15 15 41 12" src="https://user-images.githubusercontent.com/48113599/79306115-a3695080-7f2f-11ea-8fe9-65d971fca012.png">
  

## ☆Clone
### Description
実際の作業は自分のGitHub上のレポジトリをさらに**ローカル**にコピーし行います。  
鍵の設定ができていない場合はREADME1.mdへ戻って設定してください。
* 画面右上寄りにある**clone**をクリック
<img width="1024" alt="スクリーンショット 2020-04-15 15 46 44" src="https://user-images.githubusercontent.com/48113599/79306589-74071380-7f30-11ea-9769-e328b026d5d9.png">
  

* コピー
<img width="451" alt="スクリーンショット 2020-04-15 15 48 11" src="https://user-images.githubusercontent.com/48113599/79306646-926d0f00-7f30-11ea-94d5-243ac24e9fae.png">
  

* GitBushもしくはIterm2（ターミナルが開けるツール）を起動してクローンするディレクトリを作成  
  `mkdir training`  ★trainingというディレクトリを作成(画像はdemoとなってますがスルーしてください)  
  `cd training`　★trainingディレクトリに移動  
  `pwd`　★自分の現在いるディレクトリを表示（この場合trainingが表示されれば合ってます）  
<img width="553" alt="スクリーンショット 2020-04-15 15 55 25" src="https://user-images.githubusercontent.com/48113599/79307232-8d5c8f80-7f31-11ea-9bca-7b841d357530.png">
  
* 先ほどコピーしたURLを使ってクローン
`git clone https://github.com/[自分のGitHub名]/[コピーしたいレポジトリ名]`
<img width="646" alt="スクリーンショット 2020-04-15 16 05 35" src="https://user-images.githubusercontent.com/48113599/79308118-fbee1d00-7f32-11ea-9280-0847fe334cdf.png">

## ★Branch & Checkout
### Description
課題は、課題ごとのブランチを切ってそのブランチ上で作業していただきます。  
今回はdestructer/practice001に課題をプッシュすると仮定し、ローカルにもpractice001というブランチを作成します。（課題ごとのブランチはdestracter/trainingに作成してあります）  

* 自分のローカルレポジトリでブランチを作成する
`git branch practice001`






