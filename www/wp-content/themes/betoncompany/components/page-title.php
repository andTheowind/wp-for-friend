<?php if( is_archive() ): ?>
	<p class="page_title"><?php single_cat_title( ); ?></p>
<?php elseif( is_page() ): ?>
	<h1 class="page_title"><?php the_title( ); ?></h1>
<?php endif; ?>