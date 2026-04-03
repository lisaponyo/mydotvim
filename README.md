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
> このリポジトリは Vim 用 (`.vimrc`) なので、`~/.vim/plugged`（Windows は `~/vimfiles/plugged`）を使う設定です。

### トラブルシュート（Windows で `E492: Not an editor command: PlugInstall/PlugStatus`）

Windows 版 Vim では、`~/.vim` ではなく `~/vimfiles`、`~/.vimrc` ではなく `_vimrc` を見る環境があります。  
`E492` が出る場合は次を確認してください。

1. `plug.vim` が `~/vimfiles/autoload/plug.vim` にあるか  
2. 設定ファイルが Vim から読み込まれているか（`_vimrc`）
3. Vim 内で `:runtime autoload/plug.vim` 実行後に `:echo exists('*plug#begin')` を実行して `1` になるか
4. `:echo exists(':PlugInstall')` が `2` になるか（`0` の場合は Vim 内で `:source ~/.vimrc` または `:source ~/_vimrc`）

Git Bash で以下を実行すると、`~/.vim` と `~/.vimrc` の内容を Windows 側の場所にも反映できます。

```bash
mkdir -p ~/vimfiles/autoload
cp ~/.vim/autoload/plug.vim ~/vimfiles/autoload/plug.vim
cp ~/.vimrc ~/_vimrc
```

`scriptnames` に `~/.vimrc` が見えていても、`plug.vim` が読み込まれていないと `:PlugInstall` / `:PlugStatus` は使えません。  
その場合は Vim で `:echo glob('~/.vim/autoload/plug.vim')` → `:runtime autoload/plug.vim` → `:echo exists('*plug#begin')` を確認してください。
`plug#begin` が `1` でも `:PlugInstall` が反応しない場合は、`source ~/.vimrc`（Windows は `source ~/_vimrc`）を実行してから再度 `:PlugInstall` を実行してください。

※ `source ~/.vimrc` は **bash コマンドではなく Vim コマンド**（先頭に `:` を付けて Vim 内で実行）です。  
bash で実行すると `.vimrc` の Vimscript を shell が解釈してエラーになります。
`neobundle#begin` が表示される場合は古い `.vimrc` を読んでいるため、`~/mydotvim/.vimrc` を再リンクしてください。
以下を Git Bash で実行して最新の `.vimrc` に差し替えてください。

```bash
ln -snf ~/mydotvim/.vimrc ~/.vimrc
cp ~/mydotvim/.vimrc ~/_vimrc
```

その後 Vim で `:echo $MYVIMRC` を実行し、`/c/Users/<you>/.vimrc` または `/c/Users/<you>/_vimrc` を読んでいることを確認します。

最新の `.vimrc` では `~/.vim/autoload/plug.vim` と `~/vimfiles/autoload/plug.vim` の両方を確認して `plug.vim` を読み込むようにしています。

---

## 3. Vim でプラグインをインストール

1. Vim を起動します。
2. コマンドモードで以下を実行します。

```vim
:PlugInstall
```
