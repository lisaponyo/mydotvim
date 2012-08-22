set nocompatible               " Be iMproved
 filetype off                   " Required!

 if has('vim_starting')
   set runtimepath+=~/.vim/bundle/neobundle.vim/
 endif

 call neobundle#rc(expand('~/.vim/bundle/'))

 " Let NeoBundle manage NeoBundle
 "NeoBundle 'Shougo/neobundle.vim'

 " Recommended to install
 " After install, turn shell ~/.vim/bundle/vimproc, (n,g)make -f your_machines_makefile
 NeoBundle 'Shougo/vimproc'

 " My Bundles here:
 "
 " Note: You don't set neobundle setting in .gvimrc!
 " Original repos on github
 NeoBundle 'tpope/vim-fugitive'
 NeoBundle 'Lokaltog/vim-easymotion'
 NeoBundle 'rstacruz/sparkup', {'rtp': 'vim/'}
 " vim-scripts repos
 NeoBundle 'L9'
 NeoBundle 'FuzzyFinder'
 NeoBundle 'rails.vim'
 " Non github repos
 NeoBundle 'git://git.wincent.com/command-t.git'
 " Non git repos
 NeoBundle 'http://svn.macports.org/repository/macports/contrib/mpvim/'
 NeoBundle 'https://bitbucket.org/ns9tks/vim-fuzzyfinder'

 "増やし中 
 NeoBundle 'vim-scripts/Zenburn'
 NeoBundle 'vim-scripts/wombat256.vim'
 NeoBundle 'Shougo/neocomplcache'
 " ...
"==neocomplcache== {{{
let g:neocomplcache_enable_at_startup            = 1
"}}}
 filetype plugin indent on     " Required!
 "
 " Brief help
 " :NeoBundleList          - list configured bundles
 " :NeoBundleInstall(!)    - install(update) bundles
 " :NeoBundleClean(!)      - confirm(or auto-approve) removal of unused bundles

 " Installation check.
 if neobundle#exists_not_installed_bundles()
   echomsg 'Not installed bundles : ' .
         \ string(neobundle#get_not_installed_bundle_names())
   echomsg 'Please execute ":NeoBundleInstall" command.'
   "finish
 endif
"=SET= {{{
"==initialize== {{{
autocmd!
filetype plugin indent on "ファイル形式の判別。ファイル形式に沿ったプラグインの読み込み
syntax enable             "構文ハイライト機能On

let s:iswin = has('win32') || has('win64')
"}}}
"==temporary files== {{{
set nobackup                               "Backup作成
set noswapfile                             "Swap作成
"}}}
"==search== {{{
set notagbsearch     "Tagsの検索に効率の悪い線形探索を使用(HelptagsのVimバグ対応)
set ignorecase       "大文字/小文字を区別しない
set smartcase        "ignorecase時大文字が混じったら大文字小文字を区別
set wrapscan         "最下部まで検索したら最初に戻る
set incsearch        "文字列入力中にマッチ文字列に自動移動
set hlsearch         "マッチ文字をハイライト表示
set grepprg=internal "GrepはVim標準を使用
"}}}
"==display== {{{
"set statusline=\ [%n]\ %f\%m%r%h%w%{'['.(&fenc!=''?&fenc:&enc).']['.&ff.']['.cfi#get_func_name().']'}%=\ (0x%B\,%l,%c)
"set listchars=tab:>.,extends:<,trail:-,eol:$ "非表示文字の表現
set list                 "非表示文字の表示
set noruler              "カーソル行列の非表示
set wrap                 "長い文字は折り返し表示
set title                "Windowタイトル表示
set cmdheight=2          "コマンドラインの行数
set laststatus=2         "ステータス行を常に表示
set scrolloff=3          "カーソル位置から上下は常に表示
set sidescrolloff=3      "カーソル位置から上下は常に表示
set showcmd              "入力コマンドを画面下部に表示
set display=uhex         "印字不可能文字を16進数で表示"
set imsearch=1
set iminsert=1
set cursorline           "カーソル行をハイライト
set lazyredraw           "コマンド実行中は再描画しない
set t_Co=256             "256 colors
set matchpairs+=<:>      "<>にもマッチするようにする
set showtabline=2        "タブは常に表示
set equalalways          "Windowサイズ自動調整
set cpoptions-=m         "移動キーを押しても括弧の強調を有効にする
set matchtime=3          "移動キーを押しても括弧の強調を有効にする
set eadirection=both
set background=dark
colorscheme wombat256mod
set number               "行番号表示
"}}}
"==insert support== {{{
set complete=.,w,b,u,t,i,k "補完候補設定
set wildmenu               "コマンドライン入力の補完
set noexpandtab
set tabstop=2
set shiftwidth=2
set softtabstop=2
set autoindent
"}}}
"==move== {{{
set hidden          "未保存でも別ファイルを開けるように(Buffer to Hidden)
set virtualedit+=block
"}}}
"==directory== {{{
set browsedir=current      "browseコマンドで開く場合の相対パス
set noautochdir
"}}}
"==others== {{{
set whichwrap=b,s,h,l,<,>,[,] "行末から次の行へ移動できるように
set helplang=ja,en            "helpの優先順位
set linebreak                 "単語レベルの折り返りを有効化
set nrformats-=octal          "先頭0始まりでも10進数として扱う
set clipboard+=autoselect     "Visual選択した範囲をClipBoardに自動コピー
set more
"}}}
"==ctags== {{{
set tags=/home/ikehata/tags
"}}}
"
