
<!-- View форма для добавления записи в таблицу. action формы это ссылка на страницу гостевой книги с $_GET['action']
параметр &action=insert_data в методе render контроллера мы будем обрабатывать параметр $_GET['action'] -->
<form action="admin.php?page=wp_nova_poshta_control_guest_book_menu&action=insert_data" method="post">
<input type="text" name="user_name">
<textarea name="message"></textarea>
<input type="submit" name="<?php _e('Add', WPNOVAPOSHTA_PlUGIN_TEXTDOMAIN ); ?>">
</form>