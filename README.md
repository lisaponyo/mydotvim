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

うまくいかない場合は、以下を Git Bash で実行してください。

```bash
ln -snf ~/mydotvim/.vimrc ~/.vimrc
cp ~/mydotvim/.vimrc ~/_vimrc
```

---

## 3. Vim でプラグインをインストール

1. Vim を起動します。
2. コマンドモードで以下を実行します。

```vim
:PlugInstall
```
