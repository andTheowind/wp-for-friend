<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_base' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mysql' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;
}

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M6F9 _4t}E#jevcz|6E)#MsU,%lng3fii>u `arJA@<&cv=5bJS.+9h^jFQB={)N' );
define( 'SECURE_AUTH_KEY',  '@]=FO]+}N9^>{0g[%$F9Kzs![<[J]lWdZ9%zKv6@+*J:S&HzzsV7ekBdwQs-E8Uy' );
define( 'LOGGED_IN_KEY',    ',v[P)Q I)U)CW1?LAJRL<a1O6Ag#>YZjm&aN+qvbE$32{PlP@^.($!TM>diuVo(U' );
define( 'NONCE_KEY',        'L;vihybJrp|&1Z;A;U>`5aW9JJs%Pf]:dyhN8@VgFOeg*u1n:-rX6;a`j&etABW/' );
define( 'AUTH_SALT',        'ae6SF!X0Lfd8~KFXaGB`y$XcGWcr577qP`2dH,^gUm.S!qr`NYoSj)1mPSm_@v<Q' );
define( 'SECURE_AUTH_SALT', 'Z1SH=If*o!].yK?YdP2%>Sx)^%Q+i*ay&jXiKO0m&L/8hCxt2HWNzf++<hKTIEyq' );
define( 'LOGGED_IN_SALT',   's]rhrP&7<^uw]M_bgR?+c{8IsN#*AbSs(x&&3@e#M>IMkP &?vT-?3QI0wLzkoPF' );
define( 'NONCE_SALT',       ']R`YI=[6p%H*dx_(V,a[zuz;SYipBVD ]z#;Z;J*2H826!kmn<jx=<T/q(gr:Ud0' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */
// define('FORCE_SSL_LOGIN', true);
// define('FORCE_SSL_ADMIN', true);
// define( 'WP_HOME','http://'.$_SERVER['SERVER_NAME'].'8080' );
// define( 'WP_SITEURL','http://'.$_SERVER['SERVER_NAME'].'8080' );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
