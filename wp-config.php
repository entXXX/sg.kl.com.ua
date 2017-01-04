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
define('DB_NAME', 'playthis');

/** Имя пользователя MySQL */
define('DB_USER', 'adboy');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 't<$V+P|&B_Dg');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.zzz.com.ua');

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
define('AUTH_KEY',         'aKN-cGAk={Fw),`|*SnVegPTBLT[Y]^#v^,Fk`=&Pr@~[`}+?*&hF!SWbh/J~daR');
define('SECURE_AUTH_KEY',  '#SyIv634w?:u;g^RAjbqWfrrJ}#hmA?>M+Lp9i8,VU.,vQUYO[]`W!#{ECOpFzct');
define('LOGGED_IN_KEY',    'VYO:|x 5m3I>me#7BV+37PN(y[BSL82RHZnf@,n,VDB1n4|@KQ^cD1><0%>pb_bu');
define('NONCE_KEY',        'v%!{tDf5Sq|Q(5EuHgPA;1w`RBy?=kEn=R]B4_Yr:UhD<)r&otf#i+KA;{=?v#=s');
define('AUTH_SALT',        'L6S]rqs6ap+d9`[j8<BTLXwntYrb%Je3F1;z~(b=N_SI(WaQ_(t&L!H>Ul3p5?$Y');
define('SECURE_AUTH_SALT', 'eclw#1)nQ%tgf!iLjcnH~9j,:;=D_]xH;Q6[A<+NiUN-RRb]r6b3D?1Wv3,L/=Cd');
define('LOGGED_IN_SALT',   'C;~ /;pr$>Et_Xi&{Fw)FPgM%~s?evHg.+;k3~!h`3xPf8Ac4}Z~M{TsMyaojZ5&');
define('NONCE_SALT',       'p;/BMA]jN[Ft$YYjoeo-Q5beY[x~IYO;l9/Wdaf^%SItz+n>NB|rXL.ln&hRP6%j');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

define('FS_METHOD', 'direct');
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
