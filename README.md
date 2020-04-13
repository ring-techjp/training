# training

## 使い方

1. このリポジトリを fork
1. fork したリポジトリ名の後ろに .github.io をつける
1. 各 training ごとの指示に従う

# install Tools 
既にインストール済みのものはスキップしてね

## ★slack

#trainigチャンネルに招待されていない場合は社員に招待メッセージを送ってもらう

### tutorial
作業開始というコメントをチャンネルに投稿

## ★iterm2
https://www.iterm2.com/

### tutorial
1. 起動
1. コマンド入力  `pwd` 現在のパスの表示を確認
1. コマンド入力  `ls` 配下のフォルダの表示を確認

## ★Homebrew

### Description
Homebrew＝パッケージ管理システム  
開発に必要なアイテムをインストールしたりアンインストールするシステム

### install
1. iterm2を起動し入力
  
  `/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`
1. 下記の表示を確認
  ```
$ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
  ==> This script will install:
  /usr/local/bin/brew
  /usr/local/share/doc/homebrew
  /usr/local/share/man/man1/brew.1
  /usr/local/share/zsh/site-functions/_brew
  /usr/local/etc/bash_completion.d/brew
  /usr/local/Homebrew
  ==> The following existing directories will be made group writable:
  /usr/local/bin
  /usr/local/share
  /usr/local/share/man
  /usr/local/share/man/man1
  ==> The following existing directories will have their owner set to user-name:
  /usr/local/bin
  /usr/local/share
  /usr/local/share/man
  /usr/local/share/man/man1
  ==> The following existing directories will have their group set to admin:
  /usr/local/bin
  /usr/local/share
  /usr/local/share/man
  /usr/local/share/man/man1
  ==> The following new directories will be created:
  /usr/local/Cellar
  /usr/local/Homebrew
  /usr/local/Frameworks
  /usr/local/etc
  /usr/local/include
  /usr/local/lib
  /usr/local/opt
  /usr/local/sbin
  /usr/local/share/zsh
  /usr/local/share/zsh/site-functions
  /usr/local/var
  ==> The Xcode Command Line Tools will be installed.

  Press RETURN to continue or any other key to abort
```
1. Press RETURN to continue or any other key to abort に従いRETURNキーを押下
1. パスワードの入力を求められるのでmacのパスワードを入力
1. 最後に`successfull!`と表示されるのを確認
1. `brew -v`もしくは`brew help`を入力
1. `command not found`と表示されたら正常に**インストールされていない**ので手順確認

## ★composer

### Description
phpのパッケージ依存管理システム  
php開発において必要なパッケージを一括で管理してくれるよ

### install
1. iterm2を起動
1. `brew install composer`
1. 表示を確認
```php
==> Downloading https://getcomposer.org/download/1.8.4/composer.phar
######################################################################## 100.0%
🍺  /usr/local/Cellar/composer/1.8.4: 3 files, 1.8MB, built in 21 seconds
```
1. `composer -v`
1. 表示を確認
```php
$ composer -v
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.8.4 2019-02-11 10:52:10
```

## ★GitHub
### Description
Git＝バージョン管理システム  
誰が、いつ、どんな目的でソースを修正したのか一括管理できます  
トレーニングではあなたのリモートレポジトリ(training-name)をローカルレポジトリにクローンし、  
課題ごとにローカルレポジトリからリモートレポジトリにPushしてもらいます  
参考資料：https://backlog.com/ja/git-tutorial/intro/02

### Hands On
**◇アカウントの作成◇**  
https://github.com/  
※slackと同じユーザ名にしてください  既にアカウントがある場合は名前を変更するかslackの名前を変更
1. アカウントをデストラクタのGitHubに追加申請をする
1. リモートレポジトリと自分のローカルを連携させるため鍵を生成  
参考資料：「SSHとは」　https://www.kagoya.jp/howto/rentalserver/ssh/


**◇鍵の生成◇**  
`$ssh-keygen -t rsa`  
```
Generating public/private rsa key pair.
Enter file in which to save the key (/Users/(username)/.ssh/id_rsa):
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
```
1. 3回ほどEnter押下
1. id_rsaとid_rsa.pubの2つの鍵が生成される  
これが秘密鍵（id_rsa）と公開鍵(id_rsa.pub)。秘密鍵は基本自分しか持っちゃダメです

**◇公開鍵をGitHubにアップ◇**
1. https://github.com/settings/keys  
New SSH keyをクリックして公開鍵（id_rsa.pub）の中身をコピペする  
```php
$cd ~/.ssh
$cat id_rsa.pub
```
1. titleはなんでもよし　わかりやすいやつで

### ◆Tutorial-fork,commit,push,pull Request
研修中のレポジトリの運用について  
gitのフォークを使用します。  
参考 ： https://qiita.com/matsubox/items/09904e4c51e6bc267990  

1. GitHubのdestruacter/trainingへアクセス
1. ページ右上のForkをクリック
1. 自分のアカウントを選択
1. 自分のGitHubにtrainingレポジトリが追加されることを確認
1. 自分のGitHub上のtrainingレポジトリをローカルにクローン  

1. iterm2を起動
1. ローカルにクローン  
`git clone https://github.com/[自分のGitHub]/training.git`

1. ローカルでクローンされたか確認  
`cd ../`  
`ls`  

1. 適当にファイルを作成(あとで削除しといてください)  
`touch test.txt`
1. `git status #ファイルの編集状態確認`
1. `git add . #コミットしたいファイル追加`
1. `git commit -m "コミットコメント" #addしたファイルをコミット`
1. コミットしたファイルをリモートブランチにpushする  
```
git push origin HEAD 
        or
git push origin ブランチ名 
#コミットをリモートにpushする。HEADと記述するとわざわざブランチ名を書かなくてよくなる
```
※pushしたらプルリクを  
自分のGitHug/trainingにはpushした内容が反映されています  
コードレビューはそれをさらにdestructer/trainingへプルリク することで行われます  
1. 自分のGitHub/trainingのページにアクセス
1. 画面中央左寄りに「New Pull Request」があるのでクリック
1. コミットしたメッセージが表示されるので、その内容に対するリクエスト（改修内容や追加した機能、見て欲しいところ）などを記述し送信する

### ◆tutorial-branch
課題はブランチごとに管理していきます  
ブランチとは？参考 : https://www.sejuku.net/blog/71071  

1. iterm2でローカルtrainingへ移動　`cd training`
1. 現在のブランチを確認 
`git branch`
1. 対象のブランチがある場合
`git checkout [branch_name] //ブランチ移動`
`git branch　//現在のブランチを確認`
1. 対象のブランチがない場合
`git branch [branch_name] //新規ブランチを作成`
`git checkout [branch_name] //ブランチ移動`
`git branch //現在のブランチを確認`

## ★NetBeans
### Description
NetBeansはオープンソースの統合開発環境（IDE）
JavaやPHP、フレームワークが標準で対応している
他のIDEを使用する場合は個人で拡張するなど行ってください

### install
1. Open JDKをインストール  
https://jdk.java.net/12/  
今回はVer12をインストールしますが適当なバージョンをインストールしてください

1. macOS/x64を選択
1. NetBeansをインストール  
https://netbeans.apache.org/download/index.html
1. 表示画面に
1. NetBeansをしたがってインストール
1. 起動確認  
起動できない場合はJavaがうまく入っていない可能性があるので確認してください

## ★MySQL

### Description
データベース管理システム

### install
1. iterm2を起動
1. `brew update`
1. `brew install mysql`
1. `brew info mysql`でインストールを確認

## ★PHP

### install
1. iterm2を起動
1. `brew install php@7.--`  
バージョンは最新のものを指定
1. `php -v`  
バージョンが確認できたら正常にインストール完了
1. パスを通す  
`export PATH="/usr/local/opt/php@7.--/bin:$PATH`
## ★Docker
### Description
dockerとはコンテナ上で仮想環境を構築し、ミドルウェアやOSを動かす仕組みのこと  
参考資料：https://kitsune.blog/docker-summary
### install
1. 下記にアクセスしてdmgファイルをダウンロード
https://hub.docker.com/editions/community/docker-ce-desktop-mac
1. ダウンロードを完了したらインストール

### tutorial
1. dockerアプロケーションを起動
1. 画面右上にdockerのマークが表示されることを確認
## ★Options

### Description
1. ghq  
予め設定したディレクトリ以下にgitリポジトリをクローンし、一元管理することが出来るツール
### install
1. `brew install ghq`


