<?php
/**
*
* acp_common [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Администратори',
	'ACP_ADMIN_LOGS'			=> 'Админ запис',
	'ACP_ADMIN_ROLES'			=> 'Админ роле',
	'ACP_ATTACHMENTS'			=> 'Прилози',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Поставке прилога',
	'ACP_AUTH_SETTINGS'			=> 'Потврда',
	'ACP_AUTOMATION'			=> 'Аутоматизација',
	'ACP_AVATAR_SETTINGS'		=> 'Поставке грба',

	'ACP_BACKUP'				=> 'Резервна копија',
	'ACP_BAN'					=> 'Забрана',
	'ACP_BAN_EMAILS'			=> 'Забрана e-mails',
	'ACP_BAN_IPS'				=> 'Забрана IP адреса',
	'ACP_BAN_USERNAMES'			=> 'Забрана корисничких имена',
	'ACP_BBCODES'				=> 'ББКодови',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфигурација форума',
	'ACP_BOARD_FEATURES'		=> 'Могућности форума',
	'ACP_BOARD_MANAGEMENT'		=> 'Управљање форумом',
	'ACP_BOARD_SETTINGS'		=> 'Поставке форума',
	'ACP_BOTS'					=> 'Пауци/Роботи',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'База података',
	'ACP_CAT_DOT_MODS'			=> '.Модови',
	'ACP_CAT_FORUMS'			=> 'Форуми',
	'ACP_CAT_GENERAL'			=> 'Уопште',
	'ACP_CAT_MAINTENANCE'		=> 'Одржавање',
	'ACP_CAT_PERMISSIONS'		=> 'Дозволе',
	'ACP_CAT_POSTING'			=> 'Писање',
	'ACP_CAT_STYLES'			=> 'Стилови',
	'ACP_CAT_SYSTEM'			=> 'Систем',
	'ACP_CAT_USERGROUP'			=> 'Корисници и групе',
	'ACP_CAT_USERS'				=> 'Корисници',
	'ACP_CLIENT_COMMUNICATION'	=> 'Комуникација са клијентима',
	'ACP_COOKIE_SETTINGS'		=> 'Поставке колачића',
	'ACP_CRITICAL_LOGS'			=> 'Запис грешака',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Властита поља профила',

	'ACP_DATABASE'				=> 'Управљање базом',
	'ACP_DISALLOW'				=> 'Недозволи',
	'ACP_DISALLOW_USERNAMES'	=> 'Недозволи корисничка имена',

	'ACP_EMAIL_SETTINGS'		=> 'E-mail поставке',
	'ACP_EXTENSION_GROUPS'		=> 'Управљање групама екстензија',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Дозволе основане на форумима',
	'ACP_FORUM_LOGS'				=> 'Записи форума',
	'ACP_FORUM_MANAGEMENT'			=> 'Управљање форумом',
	'ACP_FORUM_MODERATORS'			=> 'Уредници форума',
	'ACP_FORUM_PERMISSIONS'			=> 'Дозволе форума',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Копирај дозволе форума',
	'ACP_FORUM_ROLES'				=> 'Роле форума',

	'ACP_GENERAL_CONFIGURATION'		=> 'Општа конфигурација',
	'ACP_GENERAL_TASKS'				=> 'Општи задаци',
	'ACP_GLOBAL_MODERATORS'			=> 'Општи уредници',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Опште дозволе',
	'ACP_GROUPS'					=> 'Групе',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Дозволе форума за групе',
	'ACP_GROUPS_MANAGE'				=> 'Управљање групама',
	'ACP_GROUPS_MANAGEMENT'			=> 'Управљање групама',
	'ACP_GROUPS_PERMISSIONS'		=> 'Групне дозволе',

	'ACP_ICONS'					=> 'Иконице тема',
	'ACP_ICONS_SMILIES'			=> 'Иконице тема/смајлићи',
	'ACP_IMAGESETS'				=> 'Комплети слика',
	'ACP_INACTIVE_USERS'		=> 'Неактивни корисници',
	'ACP_INDEX'					=> 'АКП почетна',

	'ACP_JABBER_SETTINGS'		=> 'Jabber Поставке',

	'ACP_LANGUAGE'				=> 'Управљање језиком',
	'ACP_LANGUAGE_PACKS'		=> 'Језички пакети',
	'ACP_LOAD_SETTINGS'			=> 'Учитај поставке',
	'ACP_LOGGING'				=> 'Записи',

	'ACP_MAIN'					=> 'АКП почетна',
	'ACP_MANAGE_EXTENSIONS'		=> 'Управљање екстензијама',
	'ACP_MANAGE_FORUMS'			=> 'Управљање форумима',
	'ACP_MANAGE_RANKS'			=> 'Управљање чиновима',
	'ACP_MANAGE_REASONS'		=> 'Управљање пријављеним/одбијеним разлозима',
	'ACP_MANAGE_USERS'			=> 'Управљање корисницима',
	'ACP_MASS_EMAIL'			=> 'Масовни e-mail',
	'ACP_MESSAGES'				=> 'Поруке',
	'ACP_MESSAGE_SETTINGS'		=> 'Поставке приватних порука',
	'ACP_MODULE_MANAGEMENT'		=> 'Управљање модулима',
	'ACP_MOD_LOGS'				=> 'Записи уредника',
	'ACP_MOD_ROLES'				=> 'Роле уредника',

	'ACP_NO_ITEMS'				=> 'Још увек нема ставки.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Неповезани прилози',

	'ACP_PERMISSIONS'			=> 'Дозволе',
	'ACP_PERMISSION_MASKS'		=> 'Маске дозвола',
	'ACP_PERMISSION_ROLES'		=> 'Роле дозвола',
	'ACP_PERMISSION_TRACE'		=> 'Праћење дозвола',
	'ACP_PHP_INFO'				=> 'PHP подаци',
	'ACP_POST_SETTINGS'			=> 'Поставке порука',
	'ACP_PRUNE_FORUMS'			=> 'Поткресивање форума',
	'ACP_PRUNE_USERS'			=> 'Поткресивање корисника',
	'ACP_PRUNING'				=> 'Поткресивање',

	'ACP_QUICK_ACCESS'			=> 'Брзи приступ',

	'ACP_RANKS'					=> 'Чинови',
	'ACP_REASONS'				=> 'Пријављени/одбијени разлози',
	'ACP_REGISTER_SETTINGS'		=> 'Поставке регистрације корисника',

	'ACP_RESTORE'				=> 'Поново успостави',

	'ACP_FEED'					=> 'Feed управљање',
	'ACP_FEED_SETTINGS'			=> 'Feed поставке',

	'ACP_SEARCH'				=> 'Подешавање претраге',
	'ACP_SEARCH_INDEX'			=> 'Индекс претраге',
	'ACP_SEARCH_SETTINGS'		=> 'Поставке претраге',

	'ACP_SECURITY_SETTINGS'		=> 'Поставке безбедности',
	'ACP_SEND_STATISTICS'		=> 'Слање статистичких података',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфигурација сервера',
	'ACP_SERVER_SETTINGS'		=> 'Поставке сервера',
	'ACP_SIGNATURE_SETTINGS'	=> 'Поставке потписа',
	'ACP_SMILIES'				=> 'Смајлићи',
	'ACP_STYLE_COMPONENTS'		=> 'Састојци стилова',
	'ACP_STYLE_MANAGEMENT'		=> 'Управљање стиловима',
	'ACP_STYLES'				=> 'Стилови',

	'ACP_SUBMIT_CHANGES'		=> 'Прихвати измене',

	'ACP_TEMPLATES'				=> 'Предлошци',
	'ACP_THEMES'				=> 'Теме',

	'ACP_UPDATE'					=> 'Ажурирање',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Корисничке дозволе форума',
	'ACP_USERS_LOGS'				=> 'Записи корисника',
	'ACP_USERS_PERMISSIONS'			=> 'Дозволе корисника',
	'ACP_USER_ATTACH'				=> 'Прилози',
	'ACP_USER_AVATAR'				=> 'Грб',
	'ACP_USER_FEEDBACK'				=> 'Повратни одговор',
	'ACP_USER_GROUPS'				=> 'Групе',
	'ACP_USER_MANAGEMENT'			=> 'Управљање корисницима',
	'ACP_USER_OVERVIEW'				=> 'Преглед',
	'ACP_USER_PERM'					=> 'Дозволе',
	'ACP_USER_PREFS'				=> 'Поставке',
	'ACP_USER_PROFILE'				=> 'Профил',
	'ACP_USER_RANK'					=> 'Чин',
	'ACP_USER_ROLES'				=> 'Роле корисника',
	'ACP_USER_SECURITY'				=> 'Безбедност корисника',
	'ACP_USER_SIG'					=> 'Потпис',
	'ACP_USER_WARNINGS'				=> 'Опомене',

	'ACP_VC_SETTINGS'					=> 'CAPTCHA модул поставке',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA преглед слике',
	'ACP_VERSION_CHECK'					=> 'Провери за надоградњу',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Преглед административних дозвола',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Преглед дозвола за уређивање форума',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Преглед форум-основаних дозвола',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Преглед општих дозвола за уређивање',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Преглед корисник-основаних дозвола',

	'ACP_WORDS'					=> 'Пречистач речи',

	'ACTION'				=> 'Поступак',
	'ACTIONS'				=> 'Поступци',
	'ACTIVATE'				=> 'Активирај',
	'ADD'					=> 'Додај',
	'ADMIN'					=> 'Администрација',
	'ADMIN_INDEX'			=> 'Админ почетна',
	'ADMIN_PANEL'			=> 'Админ Контролна Плоча',

	'ADM_LOGOUT'			=> 'АКП&nbsp;Одјава',
	'ADM_LOGGED_OUT'		=> 'Успешно сте се одјавили из Админ Контролне Плоче',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Веб-безбедна палета боја',
	'CONFIG_UPDATED'		=> 'Конфигурација је успешно ажурирана.',

	'DEACTIVATE'				=> 'Деактивирај',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Унета путања “%s” не постоји.',
	'DIRECTORY_NOT_DIR'			=> 'Унета путања “%s” није фасцикла.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Унета путања “%s” није уписљива.',
	'DISABLE'					=> 'Онемогући',
	'DOWNLOAD'					=> 'Преузми',
	'DOWNLOAD_AS'				=> 'Преузми као',
	'DOWNLOAD_STORE'			=> 'Преузми или сачувај датотеку',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Можете непосредно преузети датотеку или је сачувати у Вашој <samp>store/</samp> фасцикли.',

	'EDIT'					=> 'Учитај',
	'ENABLE'				=> 'Омогући',
	'EXPORT_DOWNLOAD'		=> 'Преузми',
	'EXPORT_STORE'			=> 'Сачувај',

	'GENERAL_OPTIONS'		=> 'Опште поставке',
	'GENERAL_SETTINGS'		=> 'Опште поставке',
	'GLOBAL_MASK'			=> 'Општа маска дозвола',

	'INSTALL'				=> 'Инсталирај',
	'IP'					=> 'Корисничка IP адреса',
	'IP_HOSTNAME'			=> 'IP адресе или сервери',

	'LOGGED_IN_AS'			=> 'Пријављени сте као:',
	'LOGIN_ADMIN'			=> 'Да бисте могли да администрирате форум морате бити пријављени корисник.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Да бисте могли да администрирате форум морате се поново-пријавити.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Успешно сте се пријавили и бићете преусмерени на Админ Контролну Плочу.',
	'LOOK_UP_FORUM'			=> 'Изаберите форум',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Можете изабрати више од једног форума.',

	'MANAGE'				=> 'Уреди',
	'MENU_TOGGLE'			=> 'Сакриј или прикажи бочни мени',
	'MORE'					=> 'Још',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Још података »',
	'MOVE_DOWN'				=> 'Помери доле',
	'MOVE_UP'				=> 'Помери горе',

	'NOTIFY'				=> 'Обавештење',
	'NO_ADMIN'				=> 'Нисте пријављени да администрирате овај форум.',
	'NO_EMAILS_DEFINED'		=> 'Није пронађена исправна e-mail адреса.',
	'NO_PASSWORD_SUPPLIED'	=> 'Треба да унесете Вашу лозинку за приступ Админ Контролној Плочи.',

	'OFF'					=> 'Искључено',
	'ON'					=> 'Укључено',

	'PARSE_BBCODE'						=> 'Проследи ББКод',
	'PARSE_SMILIES'						=> 'Проследи смајлиће',
	'PARSE_URLS'						=> 'Проследи везе',
	'PERMISSIONS_TRANSFERRED'			=> 'Дозволе су пребачене',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Тренутно имате дозволе из %1$s. Можете да прегледате форум са овим корисничким дозволама, али не можете приступити Админ Контролној Плочи пошто дозволе админа нису пребачене. Можете <a href="%2$s"><strong>се вратити на Ваш комплет дозвола</strong></a> у било које време.',
	'PROCEED_TO_ACP'					=> '%sПродужи до АКП%s',

	'REMIND'							=> 'Подсети',
	'RESYNC'							=> 'Поново усклади',
	'RETURN_TO'							=> 'Повратак на…',

	'SELECT_ANONYMOUS'		=> 'Изабери анонимног корисника',
	'SELECT_OPTION'			=> 'Изабери поставку',

	'SETTING_TOO_LOW'		=> 'Унета вредност за поставку “%1$s” је премала. Најмања дозвољена вредност је %2$d.',
	'SETTING_TOO_BIG'		=> 'Унета вредност за поставку “%1$s” је превелика. Највећа дозвољена вредност је %2$d.',
	'SETTING_TOO_LONG'		=> 'Унета вредност за поставку “%1$s” је предугачка. Највећа дозвољена дужина је %2$d.',
	'SETTING_TOO_SHORT'		=> 'Унета вредност за поставку “%1$s” није довољно дугачка. Најмања дозвољена дужина је %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Прикажи све поступке',

	'UCP'					=> 'Корисничка Контролна Плоча',
	'USERNAMES_EXPLAIN'		=> 'Поставите свако корисничко име у одвојен ред.',
	'USER_CONTROL_PANEL'	=> 'Корисничка Контролна Плоча',

	'WARNING'				=> 'Опомена',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ова страница приказује податак о верзији PHP инсталираној на серверу. Укључује појединости о учитаним модулима, доступним променљивама и задатим поставкама. Овај податак може бити користан при дијагностици сметњи. Молимо знајте да ће неке хостинг компаније ограничити који подаци ће бити приказани овде због сигурносних разлога. Препоручујемо Вам да не дајете никакве појединачне податке са ове странице осим када су затражени од <a href="http://www.phpbb.com/about/team/">званичних чланова тима</a> на форумима подршке.',

	'NO_PHPINFO_AVAILABLE'	=> 'Подаци о Вашој PHP конфигурацији не могу да буду утврђени. Phpinfo() је онемогућен из сигурносних разлога.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ово је списак свих поступака обављених од администратора форума. Можете их поређати по корисничком имену, датуму, IP адреси или поступку. Уколико имате одговарајуће дозволе можете такође обрисати личне поступке или запис у целини.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ово је списак поступака обављених од самог форума. Овај запис пружа податак који можете да користите за решавање одређених сметњи, на пример за не-испоруку e-mails. Можете их поређати по корисничком имену, датуму, IP адреси или поступку. Уколико имате одговарајуће дозволе можете такође обрисати личне поступке или запис у целини.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ово је списак свих поступака урађених на форумима, темама и порукама као и поступака обављених на корисницима од уредника, укључујући забране. Можете их поређати по корисничком имену, датуму, IP адреси или поступку. Уколико имате одговарајуће дозволе можете такође обрисати личне поступке или запис у целини.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ово је списак свих поступака обављених од корисника или над корисницима (извештаји, опомене и корисничке белешке).',
	'ALL_ENTRIES'				=> 'Сви записи',

	'DISPLAY_LOG'	=> 'Прикажи записе од претходних',

	'NO_ENTRIES'	=> 'Нема записа за овај период.',

	'SORT_IP'		=> 'IP адресе',
	'SORT_DATE'		=> 'Датум',
	'SORT_ACTION'	=> 'Запис поступака',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Хвала што сте изабрали phpBB као решење за ваш форум. Овај екран ће Вам дати брз преглед свих статистика Вашег форума. Везе на страни леве руке Вам омогућују да контролишете сваку појаву на форуму. Свака страница ће имати упутство како да користите алате.',
	'ADMIN_LOG'					=> 'Запис поступака администратора',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ово Вам даје преглед задњих пет поступака обављених од администратора форума. Пуна копија записа може бити виђена из одговарајуће ставке менија или следећи везу испод.',
	'AVATAR_DIR_SIZE'			=> 'Величина фасцикле грбова',

	'BOARD_STARTED'		=> 'Форум почео са радом',
	'BOARD_VERSION'		=> 'Верзија форума',

	'DATABASE_SERVER_INFO'	=> 'Сервер базе',
	'DATABASE_SIZE'			=> 'Величина базе',

	'FILES_PER_DAY'		=> 'Прилога дневно',
	'FORUM_STATS'		=> 'Статистика форума',

	'GZIP_COMPRESSION'	=> 'GZip сабијање',

	'NOT_AVAILABLE'		=> 'Није доступна',
	'NUMBER_FILES'		=> 'Број прилога',
	'NUMBER_POSTS'		=> 'Број порука',
	'NUMBER_TOPICS'		=> 'Број тема',
	'NUMBER_USERS'		=> 'Број корисника',
	'NUMBER_ORPHAN'		=> 'Неповезани прилози',

	'PHP_VERSION_OLD'	=> 'Верзија PHP на овом серверу више неће бити подржана од будућих верзија phpBB. %sПојединости%s',

	'POSTS_PER_DAY'		=> 'Порука дневно',

	'PURGE_CACHE'			=> 'Поткреши кеш',
	'PURGE_CACHE_CONFIRM'	=> 'Да ли сигурно желите да обришете кеш?',
	'PURGE_CACHE_EXPLAIN'	=> 'Брисање свих кешираних ставки, ово укључује и кеширане датотеке предложака или упите.',

	'PURGE_SESSIONS'			=> 'Поткресивање свих сесија',
	'PURGE_SESSIONS_CONFIRM'	=> 'Да ли сте сигурни да желите да поткрешете све сесије? Ово ће одјавити све кориснике.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Поткресивање свих сесија. Ово ће одјавити све кориснике.',

	'RESET_DATE'					=> 'Поново подеси датум када је форум почео са радом',
	'RESET_DATE_CONFIRM'			=> 'Да ли сигурно желите да поново подесите датум када је форум почео са радом?',
	'RESET_ONLINE'					=> 'Поново подеси када је било највише корисника На вези',
	'RESET_ONLINE_CONFIRM'			=> 'Да ли сигурно желите да поново подесите када је било највише корисника На вези?',
	'RESYNC_POSTCOUNTS'				=> 'Поново усклади број порука',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Само ће постојеће поруке бити узете у разматрање. Поткресане поруке неће бити бројане.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Да ли сигурно желите да поново ускладите број порука?',
	'RESYNC_POST_MARKING'			=> 'Поново усклади тачкасте теме',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Да ли сигурно желите да поново ускладите тачкасте теме?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Прво одзначите све теме и онда исправно означите теме које имају било какву активност у последњих шест месеци.',
	'RESYNC_STATS'					=> 'Поново усклади статистику',
	'RESYNC_STATS_CONFIRM'			=> 'Да ли сигурно желите да поново ускладите статистику?',
	'RESYNC_STATS_EXPLAIN'			=> 'Прерачунава укупан број порука, тема, корисника и датотека.',
	'RUN'							=> 'Покрени сада',

	'STATISTIC'					=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Поново усклади или поново подеси статистику',

	'TOPICS_PER_DAY'	=> 'Тема дневно',

	'UPLOAD_DIR_SIZE'	=> 'Величина послатих прилога',
	'USERS_PER_DAY'		=> 'Корисника дневно',

	'VALUE'						=> 'Вредност',
	'VERSIONCHECK_FAIL'			=> 'Неуспешно добијање података о најновијој верзији.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Поновна-Провера верзије',
	'VIEW_ADMIN_LOG'			=> 'Преглед записа администратора',
	'VIEW_INACTIVE_USERS'		=> 'Преглед неактивних корисника',

	'WELCOME_PHPBB'			=> 'Добро дошли на phpBB',
	'WRITABLE_CONFIG'		=> 'Ваша конфигурациона датотека (config.php) је тренутно уписљива од-света. Веома Вас подстичемо да промените дозволе у 640 или бар у 644 (на пример: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Датум неактивности',
	'INACTIVE_REASON'				=> 'Разлог',
	'INACTIVE_REASON_MANUAL'		=> 'Налог је деактивиран од администратора',
	'INACTIVE_REASON_PROFILE'		=> 'Појединости профила су промењене',
	'INACTIVE_REASON_REGISTER'		=> 'Новорегистровани налог',
	'INACTIVE_REASON_REMIND'		=> 'Форсирана поновна активација налога корисника',
	'INACTIVE_REASON_UNKNOWN'		=> 'Непознат',
	'INACTIVE_USERS'				=> 'Неактивни корисници',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ово је списак корисника који су се регистровали али чији су налози неактивни. Можете активирати, обрисати или подсетити (слањем e-mail) ове кориснике уколико желите.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ово је списак последњих 10 регистрованих корисника који имају неактивне налоге. Пуни списак је доступан преко одговарајуће ставке менија или следећи везу испод одакле можете да активирате, обришете или подсетите (слањем e-mail) ове кориснике уколико желите.',

	'NO_INACTIVE_USERS'	=> 'Нема неактивних корисника',

	'SORT_INACTIVE'		=> 'Датуму неактивности',
	'SORT_LAST_VISIT'	=> 'Последњој посети',
	'SORT_REASON'		=> 'Разлогу',
	'SORT_REG_DATE'		=> 'Датуму регистрације',
	'SORT_LAST_REMINDER'=> 'Задњем подсећању',
	'SORT_REMINDER'		=> 'Послатом подсећању',

	'USER_IS_INACTIVE'		=> 'Корисник је неактиван',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Молимо пошаљите податке о Вашем серверу и конфигурацији форума phpBB за статистичку анализу. Сви подаци који могу да препознају Вас или Вашу веб страницу су уклоњени - подаци су <strong>анонимни</strong>. На овим подацима заснивамо одлуке о будућим phpBB верзијама. Направљене статистике су јавно доступне. Такође делимо ове податке са PHP пројектом, програмским језиком којим је направљен phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Using the button below you can preview all variables that will be transmitted.',
	'DONT_SEND_STATISTICS'		=> 'Вратите се на АКП уколико не желите да пошаљете статистичке податке phpBB.',
	'GO_ACP_MAIN'				=> 'Иди на АКП почетну страну',
	'HIDE_STATISTICS'			=> 'Сакриј појединости',
	'SEND_STATISTICS'			=> 'Пошаљи статистичке податке',
	'SHOW_STATISTICS'			=> 'Прикажи појединости',
	'THANKS_SEND_STATISTICS'	=> 'Хвала Вам за слање Ваших података.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Додате или учитане корисничке дозволе корисника</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Додате или учитане групне корисничке дозволе</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Додате или учитане корисничке дозволе општих уредника</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Додате или учитане групне дозволе општих уредника</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Додате или учитане корисничке дозволе администратора</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Додате или учитане групне дозволе администратора</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Додати или учитани Администратори</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Додати или учитани Општи уредници</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Додате или учитане дозволе приступа форуму корисницима</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Додате или учитане дозволе приступа форуму уредницима</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Додате или учитане групне дозволе приступа форуму</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Додате или учитане групне дозволе приступа форуму уредницима</strong> из %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Додати или учитани Уредници</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Додате или учитане дозволе форума</strong> из %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Уклоњени Администратори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Уклоњени Општи уредници</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Уклоњени Уредници</strong> из %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Уклоњене дозволе Корисника/Групе</strong> из %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Дозволе су пребачене из</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Сопствене дозволе су поново враћене након коришћења дозвола из</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Неуспешан покушај пријаве администратора</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успешна пријава администратора</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Уклоњени прилози корисника</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Додате или учитане екстензије прилога</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Уклоњена екстензија прилога</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Ажурирана екстензија прилога</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Додата група екстензија</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Учитана група екстензија</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Уклоњена група екстензија</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Неповезана датотека додата поруци</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Неповезане датотеке су обрисане</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Искључен корисник из забране</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Искључена IP адреса из забране</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Искључен e-mail из забране</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Забрањен корисник</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Забрањена IP адреса</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Забрањен e-mail</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Уклоњена забрана за корисника</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Уклоњена забрана за IP адресу</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Уклоњена забрана за e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Додат нови ББКод</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Учитан ББКод</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Обрисан ББКод</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Додат нови робот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Обрисан робот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Постојећи робот ажуриран</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Обрисан админ запис</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Обрисан запис грешака</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Обрисан запис уредника</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Обрисан запис корисника</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Обрисани записи корисника</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Промењене поставке прилога</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Промењене поставке потврде</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Промењене поставке грба</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Промењене поставке колачића</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Промењене e-mail поставке</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Промењене поставке форума</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Промењене поставке учитавања</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Промењене поставке приватних порука</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Промењене поставке порука</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Промењене поставке регистрације корисника</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Промењене syndication feeds поставке</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Промењене поставке претраге</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Промењене поставке безбедности</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Промењене поставке сервера</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Промењене поставке форума</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Промењене поставке потписа</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Промењене антибот поставке</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Одобрена тема</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Тема погурана од корисника</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Обрисана порука “%1$s” написана од</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Обрисана притајена тема</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Обрисана тема “%1$s” написана од</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Копирана тема</strong><br />» из %s',
	'LOG_LOCK'					=> '<strong>Закључана тема</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Закључана порука</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Спојене поруке</strong> у тему<br />» %s',
	'LOG_MOVE'					=> '<strong>Померена тема</strong><br />» из %1$s у %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Затворена пријава приватне поруке</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Обрисана пријава приватне поруке</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Одобрена порука</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Неодобрена порука “%1$s” са следећим разлогом</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Учитана порука “%1$s” написана од</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Затворена пријава</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Обрисана пријава</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Померене раздвојене поруке</strong><br />» у %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Раздвојене поруке</strong><br />» из %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Одобрена тема</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Неодобрена тема “%1$s” са следећим разлогом</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Поново усклађени бројачи тема</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Промењен тип теме</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Откључана тема</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Откључана порука</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Додато недозвољено корисничко име</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Обрисано недозвољено корисничко име</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Резервна копија базе</strong>',
	'LOG_DB_DELETE'			=> '<strong>Обрисана резервна копија базе</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Поново успостављена резервна копија базе</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Искључена IP адреса/сервер из списка преузимања</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Додата IP адреса/сервер у списак преузимања</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Уклоњена IP адреса/сервер из списка преузимања</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber грешка</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail грешка</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Направљен нови форум</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Копиране дозволе форума</strong> са %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Обрисан форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Обрисан форум и његови подфоруми</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Обрисан форум и померени подфоруми</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Обрисан форум и померене поруке </strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Обрисан форум и његови подфоруми, померене поруке</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Обрисан форум, померене поруке</strong> у %1$s <strong>и подфоруми</strong> у %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Обрисан форум и његове поруке</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Обрисан форум, његове поруке и подфоруми</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Обрисан форум и његове поруке, померени подфоруми</strong> у %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Учитане појединости форума</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Померен форум</strong> %1$s <strong>испод</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Померен форум</strong> %1$s <strong>изнад</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Поново-усклађен форум</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Појавила се општа грешка</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Направљена нова корисничка група</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Група “%1$s” је постављена као задата за чланове</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Обрисана корисничка група</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Расчињене вође у корисничкој групи</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Чланови унапређени у вође у групи корисника</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Чланови уклоњени из корисничке групе</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Ажуриране појединости корисничке групе</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Додате нове вође у корисничку групу</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Додати нови чланови у корисничку групу</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Потврђени корисници у корисничкој групи</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Корисници који траже приступ групи “%1$s” и треба да буду потврђени</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Грешка приликом прављења слике</strong><br />» Грешка у %1$s на линији %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Додат нови комплет слика у базу</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Додат нови комплет слика у систем датотека</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Обрисан комплет слика</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Учитане појединости комплета слика</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Учитан комплет слика</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Извезен комплет слика</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Комплети слика промашили “%2$s” место</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Освежено “%2$s” место комплета слика</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Освежен комплет слика</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активирани неактивни корисници</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Обрисани неактивни корисници</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Послат e-mail подсетник неактивним корисницима</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Пребачено из %1$s у phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Инсталиран phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Провера сесије IP/прегледача/X_FORWARDED_FOR неуспешна</strong><br />»Корисничка IP “<em>%1$s</em>” упоређена са сесијом IP “<em>%2$s</em>”, корисников прегледач ознака “<em>%3$s</em>” упоређен са сесијом прегледача ознака “<em>%4$s</em>” и корисничка X_FORWARDED_FOR ознака “<em>%5$s</em>” упоређена са сесијом X_FORWARDED_FOR ознака “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber налог промењен</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber лозинка промењена</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber налог регистрован</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber поставке промењене</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Обрисан језички пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Инсталиран језички пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Ажуриране појединости језичког пакета</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Замењена језичка датотека</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Послата језичка датотека и смештена у store фасциклу</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Послат масовни e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Промењен пошиљалац у теми “%1$s”</strong><br />» из %2$s у %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Модул онемогућен</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Модул укључен</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Модул померен доле</strong><br />» %1$s испод %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Модул померен горе</strong><br />» %1$s изнад %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Модул уклоњен</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Модул додат</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Модул учитан</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Админ рола додата</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Админ рола учитана</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Админ рола уклоњена</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Рола форума додата</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Рола форума учитана</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Рола форума уклоњена</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Рола уредника додата</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Рола уредника учитана</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Рола уредника уклоњена</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Рола корисника додата</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Рола корисника учитана</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Рола корисника уклоњена</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Поље профила активирано</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Поље профила додато</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Поље профила деактивирано</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Поље профила промењено</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Поље профила уклоњено</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Поткресани форуми</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Аутоматски-поткресани форуми</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Деактивирани корисници</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Поткресани корисници и обрисане поруке</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Поткресани корисници и поруке задржане</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Поткресан кеш</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Поткресане сесије</strong>',


	'LOG_RANK_ADDED'		=> '<strong>Додат нови чин</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Уклоњен чин</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Ажуриран чин</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Додат пријављени/одбијени разлог</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Уклоњен пријављени/одбијени разлог </strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Ажуриран пријављени/одбијени разлог</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Потврда препоручиоца неуспешна</strong><br />»Препоручилац је био “<em>%1$s</em>”. Захтев је одбијен а сесија завршена.',
	'LOG_RESET_DATE'			=> '<strong>Поново подешен датум када је форум почео са радом</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Поново подешено највише корисника На вези</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Поново усклађен број порука корисника</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Поново усклађене тачкасте теме</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Порука, тема и статистика корисника поново усклађена</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Направљен индекс претраге за</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Уклоњен индекс претраге за</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Додат нови стил</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Обрисан стил</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Учитан стил</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Извезен стил</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Додат нови комплет предложака у базу</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Додат нови комплет предложака у систем датотека</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Обрисане кеширане верзије датотека предложака у комплету предложака <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Обрисан комплет предложака</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Учитан комплет предложака <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Учитане појединости предлошка</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Извезен комплет предложака</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Освежен комплет предложака</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Додата нова тема у базу</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Додата нова тема у систем датотека</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Обрисана тема</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Учитане појединости теме</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Учитана тема <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Учитана тема <em>%1$s</em></strong><br />» Измењена датотека <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Извезена тема</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Освежена тема</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Ажурирана база из верзије %1$s у верзију %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Ажуриран phpBB из верзије %1$s у верзију %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Корисник активиран</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Забрањен корисник преко Управљања корисницима</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Забрањена IP адреса преко Управљања корисницима</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Забрањен e-mail преко Управљања корисницима</strong> због “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Обрисан корисник</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Уклоњени сви прилози од корисника</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Уклоњен грб корисника</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Испражњено корисниково За слање</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Уклоњене све поруке од корисника</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Уклоњен потпис корисника</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Деактивиран корисник</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Померене поруке корисника</strong><br />» поруке од “%1$s” у форум “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Промењена лозинка корисника</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Форсирана поновна активација корисника</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Уклоњена новорегистрована застава са корисника</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Корисник “%1$s” је променио e-mail</strong><br />» из “%2$s” у “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Промењено корисничко име</strong><br />» из “%1$s” у “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Ажуриране појединости корисника</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Кориснички налог активиран</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Уклоњен грб корисника</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Уклоњен потпис корисника</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Додат повратни одговор корисника</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Додат унос:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Кориснички налог де-активиран</strong>',
	'LOG_USER_LOCK'				=> '<strong>Корисник закључао сопствену тему</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Померене све поруке у форум</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Форсирана поновна активација корисника</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Корисник откључао сопствену тему</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Додата опомена кориснику</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Следећа опомена је додељена овом кориснику</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Корисник је променио задату групу</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Корисник је расчињен као вођа корисничке групе</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Корисник се прикључио групи</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Корисник се прикључио групи и треба да буде одобрен</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Корисник се повукао из чланства у групи</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Обрисана опомена корисника</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Обрисане %2$s опомене корисника</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Обрисане све опомене корисника</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Додат пречистач речи</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Обрисан пречистач речи</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Учитан пречистач речи</strong><br />» %s',
));

?>