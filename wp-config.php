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
define( 'DB_NAME', 'homewitch' );

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
define( 'AUTH_KEY',         'NrmE_rpJ b/Hi):?IC1B_kol!Bcz%vZ! WztZK!y&fw@fe%Lv3+aN!T8[IMc>G;h' );
define( 'SECURE_AUTH_KEY',  'a B5ARltlJ_xvw&O_|5r~qZXT0fPn<oDHKo9>:EfB/SAlUn-4 6UR2u],9C03PDU' );
define( 'LOGGED_IN_KEY',    'wk uXX!-I{@[6}z/k37H5MH`b#S}yg.$dM|A5^<?A!q,%axX$i>2M&m(*]<pG29x' );
define( 'NONCE_KEY',        '^F]]qBB5D%Xs/TYs<lsSWb$+GO5T=::PmNsAb7~Z;|5`;(:0%}a1<w[y[z/LJ3=6' );
define( 'AUTH_SALT',        'xzM6xF4Fi W2=-^u5S_V0szR:om?CMBwgJ}zXt{Hn~9>H,29X%tPy>Qz<1z|+{,@' );
define( 'SECURE_AUTH_SALT', 'F#WrxIqq-qv%(){a@lx-e}0v1y,[MVcI/r_eWGP)(&f/:olYU{,ic+:LXfw}U>Y&' );
define( 'LOGGED_IN_SALT',   '&fq`UdZ3k+mY{8PluCAz-0R$vIs*mB&6;b]d1%^QCgoY<)QylzBsOhC5pZ,8LvK9' );
define( 'NONCE_SALT',       'SGSu.}sp6z+uoy<$/?7@$!wt9,-4hd|0rqj6p(etOn`P]ii>M8cythy|$`U2cc6i' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
