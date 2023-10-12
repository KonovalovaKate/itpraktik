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
define( 'DB_NAME', 'itpraktik' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z3$)&EQh*?Ay/`JxYrK(*uTVs:Ji%?(#DKo>5,$4Ow#1ATy7EQJnF#^v&=f/:F`B' );
define( 'SECURE_AUTH_KEY',  'urFxVz9GTtcl@=zwg@G@>a*s?!8!F6>b{kS;}1H]&Kq5McFM B*P[q y#eioJG3l' );
define( 'LOGGED_IN_KEY',    'H/&,xO4aW8BUs{=R5_xI3r-bFQ;OF Q9s`MN$ pNTr$_gb6dZ-(DC|z{.L1u^zG#' );
define( 'NONCE_KEY',        'q=/{9[nc<DpIGtjIg~/]-kh_pI1HZtIu*MhQ5 ;j)DgF]Sl^w1GbK=D/,7z.&A]?' );
define( 'AUTH_SALT',        '&oBAhoAf-@q&A;FNMB662(L#4R$~]@I3g )l6UJ ~<Quhix3VeS<<.}6$3n8/thl' );
define( 'SECURE_AUTH_SALT', 'xC[W1-vPdhD%DA|xm^v]wEPu-hOS-ZkuV#^3[uKpw02mZT2FbZ/oU* rCZx4#ZHW' );
define( 'LOGGED_IN_SALT',   'Z1qQNSHVyJS{#v9:c.|>h@EP!o~M+iGY:<E$9|];dlHNr`5|_|X%}q7 ~<ST6NfW' );
define( 'NONCE_SALT',       '*c<V(|al79  $Z@<}YfPYg{}:ZC,B&&t9e#H[YQ; D0Xtn^-QDpvMIj*GRe>r]^%' );

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
