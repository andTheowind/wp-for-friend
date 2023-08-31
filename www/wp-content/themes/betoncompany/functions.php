<?php


/*	Контент
---------------------------------------*/
require_once('includes/Content.php');

/*	FIX SSL by Astafiev Vladimir Killerht@gmail.com */
if (stripos(get_option('siteurl'), 'https://') === 0) {
    $_SERVER['HTTPS'] = 'on';
}

if (function_exists('register_sidebar'))
	register_sidebar(array( 'id' => 'sidebar-1' ));


if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
}

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


// Remove Canonical Link Added By Yoast WordPress SEO Plugin
function at_remove_dup_canonical_link() {
		return false;
}
// add_filter( 'wpseo_canonical', 'at_remove_dup_canonical_link' );

remove_filter( 'the_content', 'wpautop' );// для контента



function get_file_info( $file_info ) {

	$mime_types = array(
		'application/msword'            => 'doc',
		//'image/jpeg'                    => 'jpg',
		'application/pdf'               => 'pdf',
		'image/png'                     => 'png',
		'application/vnd.ms-powerpoint' => 'ppt',
		'application/x-rar-compressed'  => 'rar',
		'image/tiff'                    => 'tiff',
		'text/plain'                    => 'txt',
		'application/vnd.ms-excel'      => 'xls',
		'application/zip'               => 'zip',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document'   => 'docx',
		'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',
		'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'         => 'xlsx',
	);

	$file_size                          = array( 'b', 'kb', 'Mb' );
	$file_info_output                   = array();
	$file_info_output[ 'size' ]			= filesize( get_attached_file( $file_info['id'] ) );
	
	$i = 0;

	while( $file_info_output[ 'size' ] > 1024 ) {
		$file_info_output[ 'size' ] = $file_info_output[ 'size' ] / 1024;
		$i++;
	}

	$file_info_output[ 'url' ]  = $file_info[ 'url' ];
	$file_info_output[ 'size' ] = round($file_info_output[ 'size' ], 2) . " " . $file_size[$i]; // Размер файла                           
	$file_info_output[ 'mime' ] = $mime_types[ $file_info[ 'mime_type' ] ]; // Расширение файла

	if(is_null($file_info_output[ 'mime' ])) $file_info_output[ 'mime' ] = 'none';

	$file_info_output['pathinfo'] = pathinfo( get_attached_file( $file_info['id'] ) );

	return $file_info_output;
}

/*	ACF
---------------------------------------*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'    => 'Главная страница',
		'menu_title'    => 'Главная страница',
		'menu_slug'     => 'main-settings',
		'capability'    => 'edit_posts',
		'icon_url'		=> 'dashicons-layout',
		'redirect'      => true
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Слайдер',
		'menu_title' => 'Слайдер',
		'menu_slug'  => 'main-slider',
		'parent_slug' => 'main-settings'
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Основное',
		'menu_title' => 'Основное',
		'menu_slug'  => 'main-general',
		'parent_slug' => 'main-settings'
	));
	acf_add_options_page(array(
		'page_title'    => 'Настройки сайта',
		'menu_title'    => 'Настройки сайта',
		'menu_slug'     => 'main-site',
		'capability'    => 'edit_posts',
		'icon_url'		=> 'dashicons-admin-generic',
		'redirect'      => false
	));


}
add_filter( 'wpcf7_validate_configuration', '__return_false' );



/*	Подстраница
---------------------------------------*/
if( ! function_exists( 'is_subpage' ) ) {
    /**
     * Функция проверяет текущий объект, является ли он подстраницей
     * @param integer $post_parent_id ИД родительской страницы, если необходимо
     *     boolean Или false, если данный атрибут необходимо пропустить
     * @param WP_Post $post Объект записи, если необходимо
     * null Или null, если необходимо опустить параметр
     * @return boolean Возвращает результат проверки
     * integer Или ИД родителя, если $post_parent_id = false
     */
    function is_subpage( $post_parent_id = false, $post = null ) {
        if( is_null( $post ) ) global $post;
        if( ! is_page() ) return false;

        if( $post->post_parent ) {
            if( $post_parent_id ) {
                if( $post->post_parent != $post_parent_id && $post->post_parent > 0 ) {
                    return is_subpage( $post_parent_id, get_post( $post->post_parent ) );
                } else return true;
            } else return $post->post_parent;
        } else {
            return false;
        }
    }
}



/**
 * Перевод из HEX в RGB
 *
 * @param [string] $color
 * @return array
 */
function hex_to_rgb( $color ){
	// проверяем наличие # в начале, если есть, то отрезаем ее
	if ( $color[0] == '#' ) {
		$color = substr( $color, 1 );
	}

	// разбираем строку на массив
	if ( strlen($color) == 6 ) {
		// если hex цвет в полной форме - 6 символов
		list( $red, $green, $blue ) = array(
			$color[0] . $color[1],
			$color[2] . $color[3],
			$color[4] . $color[5],
		);
	}
	elseif ( strlen($cvet) == 3 ) {
		// если hex цвет в сокращенной форме - 3 символа
		list( $red, $green, $blue ) = array(
			$color[0]. $color[0],
			$color[1]. $color[1],
			$color[2]. $color[2],
		);
	}
	else {
		return false;
	}

	// переводим шестнадцатеричные числа в десятичные
	$red   = hexdec( $red );
	$green = hexdec( $green );
	$blue  = hexdec( $blue );

	return array(
		'red'   => $red,
		'green' => $green,
		'blue'  => $blue,
	);
}

/************** КОММЕНТАРИИ **************/

if( ! function_exists( 'jb_insert_comment' ) ) {
	/**
	 * Функция добавляет новый ajax обработчик запросов
	 * @since 1.1
	 * @return void
	 */
	function jb_insert_comment() {
		if( trim( $_POST['name'] ) &&  trim( $_POST['comment'] ) && wp_verify_nonce( $_POST['ps_extend_comment_write'], 'ps_extend_comment_write' ) ) {
		 
			$commentdata = array(
				'comment_approved' => '0',
				'comment_author' => trim( $_POST['name'] ),
				'comment_content' => trim( $_POST['comment'] ),
				'comment_post_ID' => 1165,
			);

			var_dump( wp_insert_comment( $commentdata ) );
		} else var_dump( 'error' );

		wp_die();
	}
}

if( ! function_exists( 'ps_extend_comment_add_meta_box' ) ) {
	/**
	 * Функция объявляет новый metabox на страницу редактирования комментариев
	 * @return void
	 */
	function ps_extend_comment_add_meta_box() {
		add_meta_box( 'title', __( 'Дополнительные поля' ), 'ps_extend_comment_meta_box', 'comment', 'normal', 'high' );
	}
}

if( ! function_exists( 'ps_extend_comment_meta_box_media' ) ) {
	/**
	 * Функция подключает возможность загрузки файлов на страницу редактирования комментария
	 * @return void
	 */
	function ps_extend_comment_meta_box_media() {
		if ( ! did_action( 'wp_enqueue_media' ) && get_current_screen()->base == "comment" ) wp_enqueue_media();
	}
}

if( ! function_exists( 'ps_extend_comment_meta_box' ) ) {
	/**
	 * Функция выводит содержание метабокса "Дополнительные поля"
	 * @param  WP_Comment $comment Объект комментария
	 * @return void
	 */
	function ps_extend_comment_meta_box( $comment ) {
		wp_nonce_field( 'ps_extend_comment_update', 'ps_extend_comment_update', false );

		$field_description = get_comment_meta( $comment->comment_ID, 'review_description', true );
		$field_image = get_comment_meta( $comment->comment_ID, 'review_image', true );
		$output = "";

		if( $field_image ) {
			$image_attributes = wp_get_attachment_image_src( $field_image );
			$field_image_src = $image_attributes[0];
		} else {
			$field_image_src = get_avatar_url( array( 'size' => 117, 'force_default' => true ) );
		}

		print "<table class='form-table editcomment'>";
			print "<tbody>";

				// Description field
				print "<tr>";
					printf("<td class='first'><label for='review_description'>%s:</label></td>", __( 'Подпись' ) );
					printf("<td><input name='review_description' size='30' value='%s' id='review_description' placeholder='%s' type='text'></td>", $field_description, __( 'пример: Директор' ) );
				print "</tr>";

				print "<tr>";
					printf("<td class='first'><label for='review_image'>%s:</label></td>", __( 'Изображение' ) );
					print "<td>";
						print "<script>jQuery(function(a){a(\".ps__attachment__upload\").click(function(){var b=wp.media.editor.send.attachment,c=a(this);wp.media.editor.send.attachment=function(e,d){a(c).parent().prev().attr(\"src\",d.url);a(c).prev().val(d.id);wp.media.editor.send.attachment=b};wp.media.editor.open(c);return!1});a(\".ps__attachment__remove\").click(function(){if(1==confirm(\"Уверены?\")){var b=a(this).parent().prev().attr(\"data-src\");a(this).parent().prev().attr(\"src\",b);a(this).prev().prev().val(\"\")}return!1})});</script>";
						printf( "<img data-src='' src='%s' width='%dpx' height='%dpx' />", $field_image_src, 117, 117 );
						print "<div>";
							printf( "<input type='hidden' name='review_image' id='review_image' value='%s' />", $field_image );
							printf( "<button type='submit' class='ps__attachment__upload button'>Загрузить</button>", __( 'Загрузить' ) );
							print "<button type='submit' class='ps__attachment__remove button'>&times;</button>";
						print "</div>";
					print "</td>";
				print "</tr>";

			print "</tbody>";
		print "</table>";
	}
}

if( ! function_exists( 'ps_extend_comment_update_data' ) ) {
	/**
	 * Функция сохраняет введенные значения в полях метабокса "Дополнительные поля"
	 * @param  [type] $comment_id [description]
	 * @return [type]             [description]
	 */
	function ps_extend_comment_update_data( $comment_id ) {
		if( ! isset( $_POST['ps_extend_comment_update'] ) || ! wp_verify_nonce( $_POST['ps_extend_comment_update'], 'ps_extend_comment_update' ) ) return;

		if ( ( isset( $_POST['review_description'] ) ) && ( $_POST['review_description'] != '') ) :
			$review_description = wp_filter_nohtml_kses($_POST['review_description']);
			update_comment_meta( $comment_id, 'review_description', $review_description );
		else :
			delete_comment_meta( $comment_id, 'review_description');
		endif;

		if ( ( isset( $_POST['review_image'] ) ) && ( $_POST['review_image'] != '') ):
			$review_image = wp_filter_nohtml_kses($_POST['review_image']);
			update_comment_meta( $comment_id, 'review_image', $review_image );
		else :
			delete_comment_meta( $comment_id, 'review_image');
		endif;

	}
}

if( ! function_exists( 'ps_custom_avatar_filter' ) ) {
	/**
	 * Функция заменяет дефолтный аватар на прикрепленной изображение
	 * @since  2.0.1
	 * @see    https://wp-kama.ru/hook/get_avatar
	 * @return string               [description]
	 */
	function ps_custom_avatar_filter( $avatar, $id_or_email, $args_size, $args_default, $args_alt, $args ) {
		if( ! is_admin() || ! ( $id_or_email instanceof WP_Comment ) ) return $avatar;
		$get_attachment_id = intval( get_comment_meta( $id_or_email->comment_ID, 'review_image', true ) );
		$class = array( 'avatar', 'avatar-' . (int) $args['size'], 'photo' );

		if( 0 === $get_attachment_id ) {
			$url = $args['url'];
		} else {
			$avatar_data = image_get_intermediate_size( $get_attachment_id, array( (int) $args['height'], (int) $args['width'] ) );
			$url = $avatar_data['url'];
		}

		$avatar = sprintf(
		"<img alt='%s' src='%s' class='%s' height='%d' width='%d' %s/>",
			esc_attr( $args['alt'] ),
			esc_url( $url ),
			esc_attr( join( ' ', $class ) ),
			(int) $args['height'],
			(int) $args['width'],
			$args['extra_attr']
		);

		return $avatar;
	}
}

if( ! function_exists( 'ps_custom_author_name' ) ) {
	/**
	 * Функция изменяет вывод имени автора в панели администратора
	 * @since  2.0.1
	 * @param  string  $author     Оригинальный текст имени атвора
	 * @param  integer $comment_ID ИД комментария
	 * @return string              Измененный HTML-код
	 */
	function ps_custom_author_name( $author, $comment_ID ) {
		if( ! is_admin() ) return $author;
		$get_description = get_comment_meta( $comment_ID, 'review_description', true );
		if( '' !== $get_description ) {
			$author = $author . '</strong><br><i>' . $get_description . '</i><strong>';
		}
		return $author;
	}
}

if( ! function_exists( 'ps_custom_admin_remove_reply_link' ) ) {
	/**
	 * Функция удаляет ссылку для ответа на комментарий из панели администратора
	 * @param  array $actions Массив ссылок
	 * @return array          Измененный массив ссылок
	 */
	function ps_custom_admin_remove_reply_link( $actions ) {
		unset( $actions['reply'] );
		return $actions;
	}
}

add_action( 'wp_ajax_nopriv_jb_insert_comment', 'jb_insert_comment' );
add_action( 'wp_ajax_jb_insert_comment', 'jb_insert_comment' );
add_action( 'add_meta_boxes_comment', 'ps_extend_comment_add_meta_box' );
add_action( 'admin_enqueue_scripts', 'ps_extend_comment_meta_box_media' );
add_action( 'edit_comment', 'ps_extend_comment_update_data' );
add_filter( 'get_avatar', 'ps_custom_avatar_filter', 10, 6 );
add_filter( 'comment_author', 'ps_custom_author_name', 10, 2 );
add_filter( 'comment_row_actions', 'ps_custom_admin_remove_reply_link' );

add_theme_support('root-relative-urls');    // Enable relative URLs
add_theme_support('rewrites');              // Enable URL rewrites
