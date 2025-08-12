ln -s ~/mydotvim/.vimrc ~/.vimrc
ln -s ~/mydotvim/ ~/.vim

curl -fLo ~/.vim/autoload/plug.vim --create-dirs \
    https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim

# viで下記コマンド実行
:PlugInstall
