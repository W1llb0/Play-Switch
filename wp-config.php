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
define( 'DB_NAME', 'Play-switch__wp' );

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
define( 'AUTH_KEY',         'obB8rh6W$%=:rH`wdz|@8A>*QO>T)HsKkZ7c#G`uR@kXbPvS?5iq_c7^t3-`Gr+{' );
define( 'SECURE_AUTH_KEY',  'eCv)0jAb`-fJMbPT4#&#QypU2B-=SH?:Po?l!ekU|e[Yb(/v[i}?/_q*.O!n0~<}' );
define( 'LOGGED_IN_KEY',    '>])/b_4&L4Qov{qsz5Wwzb</M=I4.$tN&E@_l_Fu#++ly3Uh=l=`|||Bo&:}e]eg' );
define( 'NONCE_KEY',        ',UB1]}Jlt@o;A`-bq1F.!Z]8DaA]4VToZ{@;AuA0z4U.G80S;]nn_5<l}=X:UI<X' );
define( 'AUTH_SALT',        'ms!0Qc.+J563;G!d7GMeXN(NZDX}4f{rNa{Q]ZUa#so^H:Z(iLrMTlE_jP6/!_sx' );
define( 'SECURE_AUTH_SALT', 'cE$Zp*ie:UdBK[IY6wT7gWz(M,0&nEFHn8or=rFR.Qa/vU|4TrHp<M5Upj+ZL.Hh' );
define( 'LOGGED_IN_SALT',   '<)Nnaty2IN._r`!oRw1PMf}MJHXlkaJv}v{GMaCaJmJkD8@AKy+PKmeyWQc[H.3l' );
define( 'NONCE_SALT',       'ps #d0Ahik+Zu%aotCN3h!>L=(]v`&c646,4GL}E:&W`Fnd6G<.%-F4Dz=~u69/x' );

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
