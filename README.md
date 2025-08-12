# Vim 環境セットアップ手順

```bash
git clone https://github.com/lisaponyo/mydotvim.git
````

## 1. 設定ファイルのシンボリックリンク作成

・mac

```bash
ln -s ~/mydotvim/.vimrc_mac ~/.vimrc
ln -s ~/mydotvim ~/.vim
````

・windows

```bash
ln -s ~/mydotvim/.vimrc ~/.vimrc
ln -s ~/mydotvim ~/.vim
````

* `~/mydotvim` フォルダにある `.vimrc` と `.vim` をホームディレクトリにリンクします。
* これにより、設定ファイルを一元管理できます。

---

## 2. vim-plug のインストール

```bash
curl -fLo ~/.vim/autoload/plug.vim --create-dirs \
    https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim
```

* Vim用プラグインマネージャー `vim-plug` を自動でダウンロードしインストールします。

---

## 3. Vim でプラグインをインストール

1. ターミナルで `vim` を起動します。

2. Vim のコマンドモードで以下を入力して実行してください。

```vim
:PlugInstall
```
