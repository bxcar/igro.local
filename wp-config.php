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
define('DB_NAME', 'igrodetki');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-)zgb:sA[N]`cDwaduRe<>Bg.pAK*v?a71%S&Dl/gLF 2rlS/S/ax+P*{6b)a79z');
define('SECURE_AUTH_KEY',  '~n95Q5L%<*{5*1-`P2U?C~Q;]BOTKHGW[aR`rq~`_>`Sf<Fmk[(P,c;JaJ@Y5ggm');
define('LOGGED_IN_KEY',    '[hv3;7F9F{;7dtv)e-<x|dshA!lM{S&kjLcO^FVa3 ^*]&b,*(4lvIy`;y,&|g^D');
define('NONCE_KEY',        'j?[/@t*rOGG:1A0Wopt`q;T{r5v}Tt/5u@QVMjR:vJJi-`=/9yt0g/XJhdCG!X{g');
define('AUTH_SALT',        'F1ctk,Yh_4!P[qV)e7%iL|300Pl.Hw?BVQhrQi;|,Ba/W[H]cWty&OGP S,b3$9J');
define('SECURE_AUTH_SALT', 'CC8iGQ5/;CUC8iT4d?&IB4Icm]&AYnK[Y~6->,0-5:cK#O/+=ed*D-u9X0bn@U8t');
define('LOGGED_IN_SALT',   'TCNMV8}.@Xv(`ar!$y27.i))^+Cz-XI-l8c1qRhpg[0:+pJ@1br3*T&D)c:5.38l');
define('NONCE_SALT',       'hEuBF#sOaQ2)^<tD2$WOGG_&@opfuBR<iE-</z13Wh !3x8w=J/==IDw20mii96S');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
