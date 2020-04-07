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
1. `command not found`と表示されたら正常にインストールされていないので手順確認

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

### Hands on & tutorial
**アカウントの作成**  
https://github.com/  
※slackと同じユーザ名にしてください  既にアカウントがある場合は名前を変更するかslackの名前を変更
1. アカウントをデストラクタのGitHubに追加申請をする
1. リモートレポジトリと自分のローカルを連携させるため鍵を生成  
参考資料：「SSHとは」　https://www.kagoya.jp/howto/rentalserver/ssh/  
**鍵の生成**   
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

