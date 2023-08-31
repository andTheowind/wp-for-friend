<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="search_form">
    <input type="text" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	<div class="button_wrapper">
		<input type="submit" value="Найти" id="searchsubmit">
	</div>
</form>
