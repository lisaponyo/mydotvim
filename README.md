# Vim 環境セットアップ手順

```bash
git clone https://github.com/lisaponyo/mydotvim.git
```

## 1. 設定ファイルの配置

### macOS

```bash
ln -s ~/mydotvim/.vimrc_mac ~/.vimrc
ln -s ~/mydotvim ~/.vim
```

### Windows

```bash
ln -s ~/mydotvim/.vimrc ~/.vimrc
ln -s ~/mydotvim ~/.vim
```

* Git Bash で実行する場合は上記で設定できます。

---

## 2. vim-plug をインストール

### macOS / Linux

```bash
curl -fLo ~/.vim/autoload/plug.vim --create-dirs \
  https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim
```

### Windows (Git Bash)

```bash
curl -fLo ~/.vim/autoload/plug.vim --create-dirs \
  https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim
```

### Windows (PowerShell)

```powershell
iwr -useb https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim | `
  ni "$env:USERPROFILE\\vimfiles\\autoload\\plug.vim" -Force
```

`.vimrc` / `.vimrc_mac` はどちらも **vim-plug** を利用します。

> `call plug#begin('~/.config/nvim/plugged')` は **Neovim (init.vim)** 向けの例です。  
> このリポジトリは Vim 用 (`.vimrc`) なので、`~/.vim/plugged` を使う現在の設定（`call plug#begin(expand($HOME . '/.vim/plugged/'))`）のままで問題ありません。

### トラブルシュート（Windows で `E492: Not an editor command: PlugInstall/PlugStatus`）

Windows 版 Vim では、`~/.vim` ではなく `~/vimfiles`、`~/.vimrc` ではなく `_vimrc` を見る環境があります。  
`E492` が出る場合は次を確認してください。

1. `plug.vim` が `~/vimfiles/autoload/plug.vim` にあるか  
2. 設定ファイルが Vim から読み込まれているか（`_vimrc`）
3. Vim 内で `:echo exists('*plug#begin')` を実行して `1` になるか（`0` の場合は `plug.vim` 未読込）

Git Bash で以下を実行すると、`~/.vim` と `~/.vimrc` の内容を Windows 側の場所にも反映できます。

```bash
mkdir -p ~/vimfiles/autoload
cp ~/.vim/autoload/plug.vim ~/vimfiles/autoload/plug.vim
cp ~/.vimrc ~/_vimrc
```

`scriptnames` に `~/.vimrc` が見えていても、`plug.vim` が読み込まれていないと `:PlugInstall` / `:PlugStatus` は使えません。  
その場合は Vim で `:echo glob('~/.vim/autoload/plug.vim')` と `:echo exists('*plug#begin')` を確認してください。

---

## 3. Vim でプラグインをインストール

1. Vim を起動します。
2. コマンドモードで以下を実行します。

```vim
:PlugInstall
```
