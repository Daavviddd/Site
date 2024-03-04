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
define( 'DB_NAME', '1273-22_99154' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1273-22_99154' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'dde2e118f8a45e17bce2' );

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
define( 'AUTH_KEY',         'v@{ ,=@|2Xuy?A,@JdulXt4!w|FbhQ$.mDR+-%@)yi^,A`9/;s]-AWB>:nLop> U' );
define( 'SECURE_AUTH_KEY',  'QoO&T@{H]QNpv3a2k`kehoDWbSXN!7i$!FL{KcBERYGW];xi0iFMz8o@#RzfT{4@' );
define( 'LOGGED_IN_KEY',    '+x=|@Xb-sh7P{@m{k|6nr_X`!r-S%k8~MviC=?ApO8W:*a?Y&P-ts5aa0 _>XGT7' );
define( 'NONCE_KEY',        'tAoLH{x>R%sEAiT1vRl}4DKAs!l+ue!3^.,bk@8uE^wRRiL])nk@q)y.vYAzBfEz' );
define( 'AUTH_SALT',        'AbxmGqB* h!G@Z36kJda:hsq>lKA*63u.D,,A2vcDr7/52YAHsK+::|8sQ3R<e;]' );
define( 'SECURE_AUTH_SALT', ')t[.&2{)SzrpUgTr.7~j`L4^ZC9N{S8lR$bcuZ{[R;FoeBbnhNy)EDIeoz]6U?3e' );
define( 'LOGGED_IN_SALT',   'c>~^Pw:4|]=exc}$m-MH I+Bj4a&QH1vw=BcfMG!$xR5p1KdwrMh-BF^(d{yn&!Q' );
define( 'NONCE_SALT',       '}0R=lX_;,.Jh{qkSX]m-h#ib124i+ qnP4HdPT6[g3zxN2rdQbJr6o%SAgaY8B@4' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Knh3t_';


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