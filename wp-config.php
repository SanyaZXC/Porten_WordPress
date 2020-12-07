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
define( 'DB_NAME', 'porten' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '4]7gl7YUapecz-[-!|@M>`bcNhHxTFFASD/?gF_(P#f=peYTN5[<cef8,R<S;u[!' );
define( 'SECURE_AUTH_KEY',  'DUfTR{by|E]R>X@{vjiY7rliX7nlMCN)8*FSU^&,yJS{`x?.mQ?rM=PNS?A)2t*q' );
define( 'LOGGED_IN_KEY',    'yuDSVu5Yd2{%68v!>|dKK#QmL]TS6jx#heY^+.}d4ots!|eKPY7Eq}5KG(T-L|O;' );
define( 'NONCE_KEY',        '<iyL=ut%U5h6l/fsNHtZXln#&#DD*euvi9$+I@0ya_Y~/#;,hh:U$lcz`5|T*OI*' );
define( 'AUTH_SALT',        '`C{W9)*qET[E(Ck7#ESG+9a!rms1%H*oo8=dfebMg/f+&]r;Ew|d@as`h<jD/UCJ' );
define( 'SECURE_AUTH_SALT', ',/Lkv`FctTL/,TN;<UZ~;7v/2,L9WotL|H:f)rI jm_(?Z6uH/lg0m.a%[UR5+}5' );
define( 'LOGGED_IN_SALT',   '$#.;>w,`;lP4R>5?gto=5N %ebrW4hKy*mxxX*N`(ScW2@DWB^F]ns^5G%{F*_F~' );
define( 'NONCE_SALT',       '58[kRYFopHjDR$9cnsuI47ZE)5B88bkpHjZTtcfX=K5_IE&+?t= j(]~r*.Xup||' );

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
