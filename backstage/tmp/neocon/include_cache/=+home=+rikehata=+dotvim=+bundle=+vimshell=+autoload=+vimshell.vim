create_shell|||function! s:create_shell(path, context)"{{{|||[I] vimshell.vim|||function
default_settings|||function! s:default_settings()"{{{|||[I] vimshell.vim|||function
event_bufwin_enter|||function! s:event_bufwin_enter()"{{{|||[I] vimshell.vim|||function
event_bufwin_leave|||function! s:event_bufwin_leave()"{{{|||[I] vimshell.vim|||function
g:vimshell_execute_file_list|||let g:vimshell_execute_file_list = {}|||[I] vimshell.vim|||variable
get_postfix|||function! s:get_postfix(prefix, is_create)"{{{|||[I] vimshell.vim|||function
initialize_context|||function! s:initialize_context(context)"{{{|||[I] vimshell.vim|||function
initialize_internal_commands|||function! s:initialize_internal_commands()"{{{|||[I] vimshell.vim|||function
initialize_vimshell|||function! s:initialize_vimshell(path, context)"{{{|||[I] vimshell.vim|||function
insert_user_and_right_prompt|||function! s:insert_user_and_right_prompt()"{{{|||[I] vimshell.vim|||function
s:create_shell|||function! s:create_shell(path, context)"{{{|||[I] vimshell.vim|||function
s:default_settings|||function! s:default_settings()"{{{|||[I] vimshell.vim|||function
s:event_bufwin_enter|||function! s:event_bufwin_enter()"{{{|||[I] vimshell.vim|||function
s:event_bufwin_leave|||function! s:event_bufwin_leave()"{{{|||[I] vimshell.vim|||function
s:exists_vimproc_version|||let s:exists_vimproc_version = vimproc#version()|||[I] vimshell.vim|||variable
s:get_postfix|||function! s:get_postfix(prefix, is_create)"{{{|||[I] vimshell.vim|||function
s:initialize_context|||function! s:initialize_context(context)"{{{|||[I] vimshell.vim|||function
s:initialize_internal_commands|||function! s:initialize_internal_commands()"{{{|||[I] vimshell.vim|||function
s:initialize_vimshell|||function! s:initialize_vimshell(path, context)"{{{|||[I] vimshell.vim|||function
s:insert_user_and_right_prompt|||function! s:insert_user_and_right_prompt()"{{{|||[I] vimshell.vim|||function
s:internal_commands|||let s:internal_commands = {}|||[I] vimshell.vim|||variable
s:last_vimshell_bufnr|||s:last_vimshell_bufnr|||[I] vimshell.vim|||variable
s:switch_vimshell|||function! s:switch_vimshell(bufnr, context, path)"{{{|||[I] vimshell.vim|||function
s:vimshell_options|||let s:vimshell_options = [|||[I] vimshell.vim|||variable
switch_vimshell|||function! s:switch_vimshell(bufnr, context, path)"{{{|||[I] vimshell.vim|||function
vimshell#available_commands|||function! vimshell#available_commands()"{{{|||[I] vimshell.vim|||function
vimshell#cd|||function! vimshell#cd(directory)"{{{|||[I] vimshell.vim|||function
vimshell#check_cursor_is_end|||function! vimshell#check_cursor_is_end()"{{{|||[I] vimshell.vim|||function
vimshell#check_prompt|||function! vimshell#check_prompt(...)"{{{|||[I] vimshell.vim|||function
vimshell#check_secondary_prompt|||function! vimshell#check_secondary_prompt(...)"{{{|||[I] vimshell.vim|||function
vimshell#check_user_prompt|||function! vimshell#check_user_prompt(...)"{{{|||[I] vimshell.vim|||function
vimshell#close|||function! vimshell#close(buffer_name)"{{{|||[I] vimshell.vim|||function
vimshell#compare_number|||vimshell#compare_number|||[I] vimshell.vim|||function
vimshell#complete|||function! vimshell#complete(arglead, cmdline, cursorpos)"{{{|||[I] vimshell.vim|||function
vimshell#echo_error|||function! vimshell#echo_error(string)"{{{|||[I] vimshell.vim|||function
vimshell#error_line|||function! vimshell#error_line(fd, string)"{{{|||[I] vimshell.vim|||function
vimshell#escape_match|||function! vimshell#escape_match(str)"{{{|||[I] vimshell.vim|||function
vimshell#execute|||function! vimshell#execute(cmdline, ...)"{{{|||[I] vimshell.vim|||function
vimshell#execute_current_line|||function! vimshell#execute_current_line(is_insert)"{{{|||[I] vimshell.vim|||function
vimshell#execute_internal_command|||function! vimshell#execute_internal_command(command, args, context)"{{{|||[I] vimshell.vim|||function
vimshell#get_alias|||function! vimshell#get_alias(name)"{{{|||[I] vimshell.vim|||function
vimshell#get_alias_pattern|||function! vimshell#get_alias_pattern()"{{{|||[I] vimshell.vim|||function
vimshell#get_argument_pattern|||function! vimshell#get_argument_pattern()"{{{|||[I] vimshell.vim|||function
vimshell#get_command_path|||function! vimshell#get_command_path(program)"{{{|||[I] vimshell.vim|||function
vimshell#get_context|||function! vimshell#get_context()"{{{|||[I] vimshell.vim|||function
vimshell#get_cur_line|||function! vimshell#get_cur_line()"{{{|||[I] vimshell.vim|||function
vimshell#get_cur_text|||function! vimshell#get_cur_text()"{{{|||[I] vimshell.vim|||function
vimshell#get_current_args|||function! vimshell#get_current_args(...)"{{{|||[I] vimshell.vim|||function
vimshell#get_cursor_filename|||function! vimshell#get_cursor_filename()"{{{|||[I] vimshell.vim|||function
vimshell#get_editor_name|||function! vimshell#get_editor_name()"{{{|||[I] vimshell.vim|||function
vimshell#get_galias|||function! vimshell#get_galias(name)"{{{|||[I] vimshell.vim|||function
vimshell#get_options|||function! vimshell#get_options()"{{{|||[I] vimshell.vim|||function
vimshell#get_program_pattern|||function! vimshell#get_program_pattern()"{{{|||[I] vimshell.vim|||function
vimshell#get_prompt|||function! vimshell#get_prompt(...)"{{{|||[I] vimshell.vim|||function
vimshell#get_prompt_command|||function! vimshell#get_prompt_command(...)"{{{|||[I] vimshell.vim|||function
vimshell#get_prompt_linenr|||function! vimshell#get_prompt_linenr()"{{{|||[I] vimshell.vim|||function
vimshell#get_right_prompt|||function! vimshell#get_right_prompt()"{{{|||[I] vimshell.vim|||function
vimshell#get_secondary_prompt|||function! vimshell#get_secondary_prompt()"{{{|||[I] vimshell.vim|||function
vimshell#get_user_prompt|||function! vimshell#get_user_prompt()"{{{|||[I] vimshell.vim|||function
vimshell#head_match|||function! vimshell#head_match(checkstr, headstr)"{{{|||[I] vimshell.vim|||function
vimshell#imdisable|||function! vimshell#imdisable()"{{{|||[I] vimshell.vim|||function
vimshell#is_windows|||function! vimshell#is_windows()"{{{|||[I] vimshell.vim|||function
vimshell#next_prompt|||function! vimshell#next_prompt(context, is_insert)"{{{|||[I] vimshell.vim|||function
vimshell#open|||function! vimshell#open(filename)"{{{|||[I] vimshell.vim|||function
vimshell#print|||function! vimshell#print(fd, string)"{{{|||[I] vimshell.vim|||function
vimshell#print_line|||function! vimshell#print_line(fd, string)"{{{|||[I] vimshell.vim|||function
vimshell#print_prompt|||function! vimshell#print_prompt(...)"{{{|||[I] vimshell.vim|||function
vimshell#print_secondary_prompt|||function! vimshell#print_secondary_prompt()"{{{|||[I] vimshell.vim|||function
vimshell#read|||function! vimshell#read(fd)"{{{|||[I] vimshell.vim|||function
vimshell#resolve|||function! vimshell#resolve(filename)"{{{|||[I] vimshell.vim|||function
vimshell#restore_pos|||function! vimshell#restore_pos(pos)"{{{|||[I] vimshell.vim|||function
vimshell#restore_variables|||function! vimshell#restore_variables(variables)"{{{|||[I] vimshell.vim|||function
vimshell#set_alias|||function! vimshell#set_alias(name, value)"{{{|||[I] vimshell.vim|||function
vimshell#set_context|||function! vimshell#set_context(context)"{{{|||[I] vimshell.vim|||function
vimshell#set_dictionary_helper|||function! vimshell#set_dictionary_helper(variable, keys, value)"{{{|||[I] vimshell.vim|||function
vimshell#set_execute_file|||function! vimshell#set_execute_file(exts, program)"{{{|||[I] vimshell.vim|||function
vimshell#set_galias|||function! vimshell#set_galias(name, value)"{{{|||[I] vimshell.vim|||function
vimshell#set_prompt_command|||function! vimshell#set_prompt_command(string)"{{{|||[I] vimshell.vim|||function
vimshell#set_syntax|||function! vimshell#set_syntax(syntax_name)"{{{|||[I] vimshell.vim|||function
vimshell#set_variables|||function! vimshell#set_variables(variables)"{{{|||[I] vimshell.vim|||function
vimshell#split|||function! vimshell#split(command)"{{{|||[I] vimshell.vim|||function
vimshell#start_insert|||function! vimshell#start_insert(...)"{{{|||[I] vimshell.vim|||function
vimshell#switch_shell|||function! vimshell#switch_shell(path, ...)"{{{|||[I] vimshell.vim|||function
vimshell#system|||function! vimshell#system(...)"{{{|||[I] vimshell.vim|||function
vimshell#tail_match|||function! vimshell#tail_match(checkstr, tailstr)"{{{|||[I] vimshell.vim|||function
vimshell#trunk_string|||function! vimshell#trunk_string(string, max)"{{{|||[I] vimshell.vim|||function
vimshell#version|||function! vimshell#version()"{{{|||[I] vimshell.vim|||function
vimshell#vimshell_execute_complete|||function! vimshell#vimshell_execute_complete(arglead, cmdline, cursorpos)"{{{|||[I] vimshell.vim|||function
vimshell.vim|||vimshell.vim|||[I] vimshell.vim|||file
