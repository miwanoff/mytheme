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
define('DB_NAME', 'mytheme');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '5rh12sG3v!:nCcifM aIK?GA0Z%Le C-R$,L7jwiO3lXiJ_t9|%hFd<D@Tsd<XJ$');
define('SECURE_AUTH_KEY', 'm*Em.#gF*4^wPx. c]wtdrR+3u_My`yQYC-aFx.j@3_B#|OB$*V9DZ^C-`+kII0+');
define('LOGGED_IN_KEY', '<i^:Fq( yd_|)=<c^d5_Dics+-/f;MEM0eVc/QmgMubX}).TxHl?K.$l4B6><.f8');
define('NONCE_KEY', '0zU^?gNG!p0Kl@]bDDzEFvn RTH_^QPdU_L.?$R-rzWueX|V O^9$1xuVZc:)X -');
define('AUTH_SALT', 'od_[gmT7c+Z1G0#C QKdz1ay$RTATj3AH6Xx45i15=mN-riIdE)%!]]Csr5H2sy.');
define('SECURE_AUTH_SALT', 'N21w-~OuW+U p?YFKPr1WLcDg?8eO5CJVVqzcC?[#J-e[Xu[@R*GM4jR<{^~zY}-');
define('LOGGED_IN_SALT', 'T&fAEUPdSV<`#O);!Cv[`#@~k+i&<k66wdjQ5y4x--x0F8ehr^,>.|]+>JM%<I8#');
define('NONCE_SALT', 'u5|9Fkg0Yi$|6&h8l$k^#PtDN8CQ2+i:$ZC454B.Rl<E=8tKm&vtxBf~;bE)4?1W');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';