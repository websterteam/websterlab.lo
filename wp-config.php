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
define( 'DB_NAME', 'websterlab' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'xservers' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('FS_CHMOD_FILE',0777);
define('FS_CHMOD_DIR',0777);
define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PFRs,K&UVB.K7AN)X:-NP;6)h38qP|mUa~3z)GxQA5AvrQ*l7jGkFs<y{F=pK,g|' );
define( 'SECURE_AUTH_KEY',  'JM/O}Sh5@.NLiFnaZbT7xxKS]Fhy_:fG+F,WPGq8Mc)%F_/*8vj%!_9D}k@W#@^K' );
define( 'LOGGED_IN_KEY',    'c+/p8Oba:n8:|mK%&-yRjW<M=U3lG;N%zd<HbELZ`%ifvQhB#~dlZ:tHU}Xw~<!Y' );
define( 'NONCE_KEY',        '?:w.uF%|VfAvIq:F[!2Q|YL]yX`=mPKN5lXIaE7^{o&f=},mudlsW:oZKN%upK6(' );
define( 'AUTH_SALT',        'ofB,lDq-=4*q4+NIkgf:Ku,7KH8kW:sl}R9.0@3?=QP1 3i@3:,oG<dAw<FE&JQZ' );
define( 'SECURE_AUTH_SALT', 'Y*`[, X=@l|@[~5LJiDW0@(Fe>Yg0r.mz(8ys0M5S>>y Qs9iT8B57 Cl}nSx]q@' );
define( 'LOGGED_IN_SALT',   '`O+`8e+A=I4cB)l;517F6`l3YKw%nn,l)^[f<&R#>KP8`23mT3k3{VcPG.9WDEM5' );
define( 'NONCE_SALT',       'Du@d2MBV}$#1q9Xpoun|22D PKEJ]dvxFcj- omw^ANf(e5YdB91_pnLHtaI{syF' );

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
