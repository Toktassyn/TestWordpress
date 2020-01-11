<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'testWordpress_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/4y,#*/<^:TfH&G/,=JZdVjbBB2,Quv/$UuIE;h)dRSQ:O(Y-ztgBU_jp%WC=4+8' );
define( 'SECURE_AUTH_KEY',  'eXb[&NP/(VU!t6su`TRFPvZu=<kPllxdGK_#oft!?JllU@np>90dCaw:bP7)sdG^' );
define( 'LOGGED_IN_KEY',    'btp7[a7~itUG/N?jM{!Hn&Yy^Mc.w_t@84mt2X(Gja;xpS0CB!Y_4NZ*]AxB*z8.' );
define( 'NONCE_KEY',        'Yo@hnHW~ehBK#tS}/fM3cVaX-5C}#ZHRE8jiM<A)}PoFed=Ht.K+-}Q$b@wPLXZ4' );
define( 'AUTH_SALT',        '^hf,e9`1obHU2I@1<~OtWfL,bTv43<vJ.hk:s)FUf~ro4jw@O+~jmcd?D>S1Q/MC' );
define( 'SECURE_AUTH_SALT', '@]:/ydb.+5tpY(*O}nS4uy{vs`N|`5fWcJTIorzZ!8p8l8EBdw3}bjJc7Q^cs_c4' );
define( 'LOGGED_IN_SALT',   'j$w@jE>x+J#b(e(9lftuC,Rie@BszSIXzrnK[%m(D$h8J|J-x[~ilqUFbJe~%{Jl' );
define( 'NONCE_SALT',       '>wzq4MXuUU;q`]HZZ_ Nq7O,PZxQ8_oBA-u90t>GO;`,j4itYwtY*T8k;fKf-SZ!' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
