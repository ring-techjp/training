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
