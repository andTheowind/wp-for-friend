<?php

class Content
{
	public function __construct()
	{
		echo '<div class="content">';
		while( have_rows('content') )
		{
			the_row();
			if( get_row_layout() == 'content-text' ) $this->text();
			elseif( get_row_layout() == 'content-quote' ) $this->quote();
			elseif( get_row_layout() == 'content-files' ) $this->files();
			elseif( get_row_layout() == 'content-text_underline' ) $this->textUnderline();
			elseif( get_row_layout() == 'content-certificates' ) $this->certificates();
			elseif( get_row_layout() == 'content-gallery' ) $this->gallery();
			elseif( get_row_layout() == 'content-subpage_block' ) $this->subpages();
		}
		echo '</div>';
	}


	// Обычный текст
	private function text()
	{
		echo '<div class="content-text">'.get_sub_field('text').'</div>';
	}

	// Цитата
	private function quote()
	{
		echo '<div class="quote"><p class="quote-text">'. get_sub_field('quote') .'</p></div>';
	}

	// Файлы
	private function files()
	{
		?>
			<div class="files">
				<div class="row">
					<?php $i = 0; ?>
					<?php while( have_rows('files') ) : $i++; the_row (); ?>
						<?php $file = get_file_info( get_sub_field( 'file' ) ); ?>
						<div class="col-md-6 col-xs-12">
							<a class="file" href="<?php print $file['url']; ?>" target="_blank">
								<div class="file-thumbnail">
									<svg role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/file.svg#<?php print $file['mime']; ?>"></use></svg>
								</div>
								<div class="file-info">
									<span class="name"><em><?php the_sub_field('file-name'); ?></em></span>
									<span class="size"><?php print $file['mime'].' ' .$file['size']; ?></span>
								</div>
							</a>
						</div>
						<?php if( $i % 2 == 0 ) echo '<div class="clearfix hidden-sm hidden-xs"></div>'; ?>
					<?php endwhile; ?>
				</div>
			</div>
		<?php
	}

	// Таблица
	private function table()
	{
		?>
			<div class="content-text">
				<div class="table">
					<h3><?php the_sub_field('table-title'); ?></h3>
					<div class="table-responsive">
						<table>
							<thead>
								<tr>
									<th><?php the_sub_field('table-th-l'); ?></th>
									<th><?php the_sub_field('table-th-r'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php while( have_rows( 'table-repiter' ) ) : the_row(); ?>
									<tr>
										<td><?php the_sub_field('table-td-l'); ?></td>
										<td><?php the_sub_field('table-td-r'); ?></td>
									</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<?php
	}

	// Заголовок с выделением
	private function textUnderline()
	{
		echo '<div class="text_underline"><p>'. get_sub_field('text_underline') .'</p></div>';
	}

	private function certificates()
	{
		?>
			<?php $images = get_sub_field('certificates'); ?>
			<?php if($images) : ?>
				<div class="certificates">
					<div class="row">
						<?php $i = 0; foreach( $images as $image ) : $i++; ?>
							<div class=" col-sm-4 col-6">
								<div class="certificate">
									<a class="certificate-thumbnail" href="<?php echo $image['url']; ?>" data-lightbox="certificates-set" style="background-image: url('<?php echo $image['url']; ?>');"></a>
									<div class="certificate-sign">
										<p><?php echo $image['caption']; ?></p>
									</div>
								</div>
							</div>
							<?php if($i % 3 == 0) echo '<div class="clearfix hidden-xs"></div>'; ?>
							<?php if($i % 2 == 0) echo '<div class="clearfix hidden-lg hidden-md hidden-sm"></div>'; ?>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php
	}

	private function gallery()
	{
		?>
			<?php $images = get_sub_field('gallery'); ?>
			<?php if($images) : ?>
				<div class="gallery">
					<div class="row">
						<?php $i = 0; foreach( $images as $image ) : $i++; ?>
							<div class=" col-sm-<?php the_sub_field('gallery-count'); ?> col-6">
								<div class="item">
									<a class="item-thumbnail" href="<?php echo $image['url']; ?>" data-lightbox="gallery-set" style="background-image: url('<?php echo $image['url']; ?>');"></a>
									<div class="item-sign">
										<p><?php echo $image['caption']; ?></p>
									</div>
								</div>
							</div>
							<?php if ($i % (12 / get_sub_field('gallery-count')) == 0) echo '<div class="clearfix hidden-xs"></div>'; ?>
							<?php if ($i % 2 == 0) echo '<div class="clearfix hidden-lg hidden-md hidden-sm"></div>'; ?>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php
	}
	private function subpages()
	{
		?>
			<?php $subpages = get_sub_field('subpages'); ?>
			<?php //var_dump($subpages); ?>
			<?php if($subpages): ?>
				<div class="subpages">
					<div class="row">
						<?php foreach( $subpages as $subpage) : ?>
							<div class="col-12 col-sm-6 col-lg-4">
								<a href="<?php echo get_permalink($subpage->ID); ?>" class="subpage">
									<?php if(!get_the_post_thumbnail($subpage->ID)): ?>
										<div class="img_wrapper">
											<svg role="img" width="36" height="28">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#no_picture"></use>
											</svg>
										</div>
									<?php else: ?>
										<?php //var_dump( get_the_post_thumbnail_url($subpage->ID) ); ?>
										<div class="img_wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url($subpage->ID); ?> );"></div>
									<?php endif; ?>
									<div class="info">
										<span><span><?php echo $subpage->post_title; ?></span></span>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php
	}
}