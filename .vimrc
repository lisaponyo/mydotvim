" Note: Skip initialization for vim-tiny or vim-small.
 if !1 | finish | endif

 if has('vim_starting')
   if &compatible
     set nocompatible               " Be iMproved
   endif

   " Required:
   set runtimepath+=~/.vim/bundle/neobundle.vim/
 endif

 " Required:
 call neobundle#begin(expand('~/.vim/bundle/'))

 " Let NeoBundle manage NeoBundle
 " Required:
 NeoBundleFetch 'Shougo/neobundle.vim'

 " My Bundles here:
 " Refer to |:NeoBundle-examples|.
 " Note: You don't set neobundle setting in .gvimrc!
 NeoBundle 'Shougo/vimproc'
 "NeoBundle 'tpope/vim-fugitive'
 "NeoBundle 'Lokaltog/vim-easymotion' 爆速
 NeoBundle 'rstacruz/sparkup', {'rtp': 'vim/'}
 NeoBundle 'vim-scripts/Zenburn'
 NeoBundle 'vim-scripts/wombat256.vim'
 NeoBundle 'Shougo/neocomplcache'
 NeoBundle 'Shougo/neosnippet'
 NeoBundle 'Shougo/neosnippet-snippets'
 
 call neobundle#end()

 " Required:
 filetype plugin indent on

 " If there are uninstalled bundles found on startup,
 " this will conveniently prompt you to install them.
 NeoBundleCheck

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

set laststatus=2
set statusline=%n\:%y
set statusline+=[%{(&fenc!=''?&fenc:&enc)}]
set statusline+=[%{Getff()}]
set statusline+=%m%r\ %F%=[%l/%L]

function! Getff()
  if &ff == 'unix'
    return 'LF'
  elseif &ff == 'dos'
    return 'CR+LF'
  elseif &ff == 'mac'
    return 'CR'
  else
    return '?'
  endif
endfunction

set listchars=tab:>.,extends:<,trail:-,eol:$ "非表示文字の表現
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
set tabstop=4
set shiftwidth=4
set softtabstop=4
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
set tags=/home/rikehata/tags
"}}}
"==my setting== {{{
" 全角スペースの表示
 highlight ZenkakuSpace cterm=underline ctermbg=red guibg=#666666
 au BufWinEnter * let w:m3 = matchadd("ZenkakuSpace", '　')
 au WinEnter * let w:m3 = matchadd("ZenkakuSpace", '　')
"}}}


""==neocomplcache setting== {{{
""Note: This option must set it in .vimrc(_vimrc).  NOT IN .gvimrc(_gvimrc)!
"" Disable AutoComplPop.
"let g:acp_enableAtStartup = 0
"" Use neocomplcache.
"let g:neocomplcache_enable_at_startup = 1
"" Use smartcase.
"let g:neocomplcache_enable_smart_case = 1
"" Set minimum syntax keyword length.
"let g:neocomplcache_min_syntax_length = 3
"let g:neocomplcache_lock_buffer_name_pattern = '\*ku\*'
"
"" Enable heavy features.
"" Use camel case completion.
""let g:neocomplcache_enable_camel_case_completion = 1
"" Use underbar completion.
""let g:neocomplcache_enable_underbar_completion = 1
"
"" Define dictionary.
"let g:neocomplcache_dictionary_filetype_lists = {
"    \ 'default' : '',
"    \ 'vimshell' : $HOME.'/.vimshell_hist',
"    \ 'scheme' : $HOME.'/.gosh_completions'
"        \ }
"
"" Define keyword.
"if !exists('g:neocomplcache_keyword_patterns')
"    let g:neocomplcache_keyword_patterns = {}
"endif
"let g:neocomplcache_keyword_patterns['default'] = '\h\w*'
"
"" Plugin key-mappings.
"inoremap <expr><C-g>     neocomplcache#undo_completion()
"inoremap <expr><C-l>     neocomplcache#complete_common_string()
"
"" Recommended key-mappings.
"" <CR>: close popup and save indent.
"inoremap <silent> <CR> <C-r>=<SID>my_cr_function()<CR>
"function! s:my_cr_function()
"  return neocomplcache#smart_close_popup() . "\<CR>"
"  " For no inserting <CR> key.
"  "return pumvisible() ? neocomplcache#close_popup() : "\<CR>"
"endfunction
"" <TAB>: completion.
"inoremap <expr><TAB>  pumvisible() ? "\<C-n>" : "\<TAB>"
"" <C-h>, <BS>: close popup and delete backword char.
"inoremap <expr><C-h> neocomplcache#smart_close_popup()."\<C-h>"
"inoremap <expr><BS> neocomplcache#smart_close_popup()."\<C-h>"
"inoremap <expr><C-y>  neocomplcache#close_popup()
"inoremap <expr><C-e>  neocomplcache#cancel_popup()
"" Close popup by <Space>.
""inoremap <expr><Space> pumvisible() ? neocomplcache#close_popup() : "\<Space>"
"
"" For cursor moving in insert mode(Not recommended)
""inoremap <expr><Left>  neocomplcache#close_popup() . "\<Left>"
""inoremap <expr><Right> neocomplcache#close_popup() . "\<Right>"
""inoremap <expr><Up>    neocomplcache#close_popup() . "\<Up>"
""inoremap <expr><Down>  neocomplcache#close_popup() . "\<Down>"
"" Or set this.
""let g:neocomplcache_enable_cursor_hold_i = 1
"" Or set this.
""let g:neocomplcache_enable_insert_char_pre = 1
"
"" AutoComplPop like behavior.
""let g:neocomplcache_enable_auto_select = 1
"
"" Shell like behavior(not recommended).
""set completeopt+=longest
""let g:neocomplcache_enable_auto_select = 1
""let g:neocomplcache_disable_auto_complete = 1
""inoremap <expr><TAB>  pumvisible() ? "\<Down>" : "\<C-x>\<C-u>"
"
"" Enable omni completion.
"autocmd FileType css setlocal omnifunc=csscomplete#CompleteCSS
"autocmd FileType html,markdown setlocal omnifunc=htmlcomplete#CompleteTags
"autocmd FileType javascript setlocal omnifunc=javascriptcomplete#CompleteJS
"autocmd FileType python setlocal omnifunc=pythoncomplete#Complete
"autocmd FileType xml setlocal omnifunc=xmlcomplete#CompleteTags
"
"" Enable heavy omni completion.
"if !exists('g:neocomplcache_force_omni_patterns')
"  let g:neocomplcache_force_omni_patterns = {}
"endif
"let g:neocomplcache_force_omni_patterns.php = '[^. \t]->\h\w*\|\h\w*::'
"let g:neocomplcache_force_omni_patterns.c = '[^.[:digit:] *\t]\%(\.\|->\)'
"let g:neocomplcache_force_omni_patterns.cpp = '[^.[:digit:] *\t]\%(\.\|->\)\|\h\w*::'
"
"" For perlomni.vim setting.
"" https://github.com/c9s/perlomni.vim
"let g:neocomplcache_force_omni_patterns.perl = '\h\w*->\h\w*\|\h\w*::'
"
""==neocomplcache== {{{
"imap     <C-l>       <Plug>(neocomplcache_snippets_expand)
"smap     <C-l>       <Plug>(neocomplcache_snippets_expand)
"imap     <C-j>       <Plug>(neocomplcache_start_unite_complete)
"inoremap <expr><CR>  neocomplcache#smart_close_popup() . "\<CR>"
"inoremap <expr><TAB> pumvisible() ? "\<C-n>" : "\<TAB>"
"inoremap <expr><C-h> neocomplcache#smart_close_popup()."\<C-h>"
"inoremap <expr><BS>  neocomplcache#smart_close_popup()."\<C-h>"
"nnoremap <silent> <Leader>ss  :<C-u>NeoComplCacheEditSnippets<CR>
""}}}
"==neocomplcache== {{{
imap     <C-l>       <Plug>(neosnippet_expand_or_jump)
smap     <C-l>       <Plug>(neosnippet_expand_or_jump)
imap     <C-j>       <Plug>(neocomplcache_start_unite_complete)
inoremap <expr><CR>  neocomplcache#smart_close_popup() . "\<CR>"
inoremap <expr><TAB> pumvisible() ? "\<C-n>" : "\<TAB>"
inoremap <expr><C-h> neocomplcache#smart_close_popup()."\<C-h>"
inoremap <expr><BS>  neocomplcache#smart_close_popup()."\<C-h>"
nnoremap <silent> <Leader>ss  :<C-u>NeoComplCacheEditSnippets<CR>
"}}}
"=PLUGIN SETTINGS= {{{
"==neocomplcache== {{{
let g:neocomplcache_enable_at_startup            = 1
let g:neocomplcache_enable_smart_case            = 1
let g:neocomplcache_enable_camel_case_completion = 1
let g:neocomplcache_enable_underbar_completion   = 1
let g:neocomplcache_min_syntax_length            = 3

"let g:neocomplcache_enable_auto_delimiter        = 1 "TODO 後で変更するかも
let g:neocomplcache_snippets_dir  = $HOME."/.vim/snippets"
let g:neocomplcache_temporary_dir = $HOME."/.vim/backstage/tmp/neocon"
" Enable omni completion.
autocmd FileType css           setlocal omnifunc=csscomplete#CompleteCSS
autocmd FileType html,markdown setlocal omnifunc=htmlcomplete#CompleteTags
autocmd FileType javascript    setlocal omnifunc=javascriptcomplete#CompleteJS
autocmd FileType python        setlocal omnifunc=pythoncomplete#Complete
autocmd FileType xml           setlocal omnifunc=xmlcomplete#CompleteTags
autocmd FileType php           setlocal omnifunc=phpcomplete#CompletePHP
autocmd FileType c             setlocal omnifunc=ccomplete#Complete
autocmd FileType xml           setlocal omnifunc=xmlcomplete#CompleteTags
autocmd FileType ruby          setlocal omnifunc=rubycomplete#Complete
autocmd FileType *
      \if &l:omnifunc == ''
      \ |   setlocal omnifunc=syntaxcomplete#Complete
      \ | endif
"}}}

