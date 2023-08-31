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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KC!S|Pgzlg>Kd)=K_X6XU%veqr3dtNqvPH_JR;/-iH]--ddVEvkd{W|Iw@TU;Is^' );
define( 'SECURE_AUTH_KEY',  'X4](-Um/RlfsH]LN96fuc3:3bHeObUl{0e[?}5GZO01&U[Zg{5Mg2;@oe}!qr[-m' );
define( 'LOGGED_IN_KEY',    'G.rBTn=9u6F#wtQ_JAe&Td6#QVX<iVv03[K?.zS(t).h%r4&TH1vQG?%3AR-I//r' );
define( 'NONCE_KEY',        ',ezikDUI=9p:eh<k/BV+t$U-2Z9vq#j</{KG/d9qQ>hV6aSWxP1U{7UaqjdgAfEi' );
define( 'AUTH_SALT',        'Nkxwy&tqRnf_JX{N.HqhcXnd4D_C[KBs%?Wa(O)>eP]C`+~p?Q//QiOK$Pu[!^:m' );
define( 'SECURE_AUTH_SALT', 'Of>[=QZXFYu@a#k7k{lhHtogts:>u{(uv(Jt`;]jY*aYt9Yc]Fl7BkZjn5<<5Q%x' );
define( 'LOGGED_IN_SALT',   '0XE^]m[8i;1Tv>DDv/y:PRv,<RI`0=LKC$p&mm;=,KP.+G6!xg3Y/2L0S?KhPeS)' );
define( 'NONCE_SALT',       '@_&./6#d5whfU4.4?zJo0(?/03Pplo|./(dMLL4LjfmU8t}?3Ic[&P1;W7a>KbSa' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
