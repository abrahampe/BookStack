<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Настройки',
    'settings_save' => 'Сохранить настройки',
    'settings_save_success' => 'Настройки сохранены',

    // App Settings
    'app_customization' => 'Настройки',
    'app_features_security' => 'Функционал и безопасность',
    'app_name' => 'Название приложения',
    'app_name_desc' => 'Название отображается в заголовках и сообщениях электронной почты отправленных системой.',
    'app_name_header' => 'Отображать название приложения в заголовке',
    'app_public_access' => 'Публичный доступ',
    'app_public_access_desc' => 'Включение этой опции позволит неавторизованным посетителям получить доступ к содержимому вашего BookStack.',
    'app_public_access_desc_guest' => 'Публичный доступ контролируется через настройки пользователя "Guest"',
    'app_public_access_toggle' => 'Разрешить публичный доступ',
    'app_public_viewing' => 'Разрешить публичный просмотр?',
    'app_secure_images' => 'Загрузка изображений с высоким уровнем безопасности',
    'app_secure_images_toggle' => 'Включить загрузку изображений с высоким уровнем безопасности',
    'app_secure_images_desc' => 'Для высокой производительности все изображения являются общедоступными. Этот параметр добавляет случайную строку перед URL изображения. Убедитесь, что индексация каталогов отключена, для предотвращения легкого доступа.',
    'app_editor' => 'Редактор страниц',
    'app_editor_desc' => 'Выберите, какой редактор будет использоваться всеми пользователями для редактирования страниц.',
    'app_custom_html' => 'Пользовательский контент заголовка HTML',
    'app_custom_html_desc' => 'Любой контент, добавленный здесь, будет вставлен в нижнюю часть раздела <head> каждой страницы. Это удобно для переопределения стилей или добавления кода аналитики.',
    'app_custom_html_disabled_notice' => 'Пользовательский контент заголовка HTML отключен на этой странице, чтобы гарантировать отмену любых критических изменений',
    'app_logo' => 'Логотип приложения',
    'app_logo_desc' => 'Это изображение должно быть 43px в высоту. <br>Большое изображение будет уменьшено.',
    'app_primary_color' => 'Основной цвет приложения',
    'app_primary_color_desc' => 'Значение должно быть указано в hex-формате. <br>Оставьте пустым чтобы использовать цвет по умолчанию.',
    'app_homepage' => 'Стартовая страница приложения',
    'app_homepage_desc' => 'Выберите страницу, которая будет отображаться на главной странице вместо стандартной. Права на страницы игнорируются для выбранных страниц.',
    'app_homepage_select' => 'Выберите страницу',
    'app_disable_comments' => 'Отключение комментариев',
    'app_disable_comments_toggle' => 'Отключить комментарии',
    'app_disable_comments_desc' => 'Отключение комментариев на всех страницах. Существующие комментарии будут скрыты.',

    // Color settings
    'content_colors' => 'Цвета элементов иерархии',
    'content_colors_desc' => 'Задает цвета для всех элементов организационной иерархии страницы. Для удобства чтения рекомендуется выбирать цвета, яркость которых близка к цветам по умолчанию.',
    'bookshelf_color' => 'Цвет полки',
    'book_color' => 'Цвет книги',
    'chapter_color' => 'Цвет главы',
    'page_color' => 'Цвет страницы',
    'page_draft_color' => 'Цвет черновика страницы',

    // Registration Settings
    'reg_settings' => 'Настройки регистрации',
    'reg_enable' => 'Разрешить регистрацию',
    'reg_enable_toggle' => 'Разрешить регистрацию',
    'reg_enable_desc' => 'Если регистрация разрешена, пользователь сможет зарегистрироваться в системе самостоятельно. При регистрации назначается роль пользователя по умолчанию.',
    'reg_default_role' => 'Роль пользователя по умолчанию после регистрации',
    'reg_enable_external_warning' => 'Вышеуказанный параметр игнорируется, пока активна внешняя аутентификация LDAP или SAML. Учетные записи для несуществующих пользователей будут создаваться автоматически при условии успешной аутентификации на внешнем сервере.',
    'reg_email_confirmation' => 'Подтверждение электронной почты',
    'reg_email_confirmation_toggle' => 'Требовать подтверждение по электронной почте',
    'reg_confirm_email_desc' => 'При использовании ограничения по домену - подтверждение обязательно, этот пункт игнорируется.',
    'reg_confirm_restrict_domain' => 'Ограничить регистрацию по домену',
    'reg_confirm_restrict_domain_desc' => 'Введите список доменов почты через запятую, для которых разрешена регистрация. Пользователям будет отправлено письмо для подтверждения адреса перед входом в приложение. <br> Обратите внимание, что пользователи смогут изменить свой адрес после регистрации.',
    'reg_confirm_restrict_domain_placeholder' => 'Без ограничений',

    // Maintenance settings
    'maint' => 'Обслуживание',
    'maint_image_cleanup' => 'Очистка изображений',
    'maint_image_cleanup_desc' => "Сканирует содержимое страниц и предыдущих версий и определяет изображения, которые не используются. Убедитесь, что у вас есть резервная копия базы данных и папки изображений перед запуском этой функции.",
    'maint_delete_images_only_in_revisions' => 'Также удалять изображения, которые существуют только в старой версии страницы',
    'maint_image_cleanup_run' => 'Выполнить очистку',
    'maint_image_cleanup_warning' => 'Найдено :count возможно бесполезных изображений. Вы уверены, что хотите удалить эти изображения?',
    'maint_image_cleanup_success' => ':count возможно бесполезных изображений было найдено и удалено!',
    'maint_image_cleanup_nothing_found' => 'Не найдено ни одного бесполезного изображения!',
    'maint_send_test_email' => 'Отправить тестовое письмо',
    'maint_send_test_email_desc' => 'Отправить тестовое письмо на адрес электронной почты, указанный в профиле.',
    'maint_send_test_email_run' => 'Отправить проверочное письмо',
    'maint_send_test_email_success' => 'На адрес :address отравлено письмо',
    'maint_send_test_email_mail_subject' => 'Проверка электронной почты',
    'maint_send_test_email_mail_greeting' => 'Доставка электронной почты работает!',
    'maint_send_test_email_mail_text' => 'Поздравляем! Поскольку вы получили это письмо, электронная почта настроена правильно.',
    'maint_recycle_bin_desc' => 'Удаленные полки, книги, главы и страницы отправляются в корзину, чтобы они могли быть восстановлены или удалены навсегда. Более старые элементы в корзине могут быть автоматически удалены через некоторое время в зависимости от системной конфигурации.',
    'maint_recycle_bin_open' => 'Открыть корзину',

    // Recycle Bin
    'recycle_bin' => 'Корзина',
    'recycle_bin_desc' => 'Здесь вы можете восстановить удаленные элементы или навсегда удалить их из системы. Этот список не отфильтрован в отличие от аналогичных списков действий в системе, где применяются фильтры.',
    'recycle_bin_deleted_item' => 'Удаленный элемент',
    'recycle_bin_deleted_by' => 'Удалён',
    'recycle_bin_deleted_at' => 'Время удаления',
    'recycle_bin_permanently_delete' => 'Удалить навсегда',
    'recycle_bin_restore' => 'Восстановить',
    'recycle_bin_contents_empty' => 'На данный момент корзина пуста',
    'recycle_bin_empty' => 'Очистить корзину',
    'recycle_bin_empty_confirm' => 'Это действие навсегда уничтожит все элементы в корзине, включая содержимое, содержащееся в каждом элементе. Вы уверены, что хотите очистить корзину?',
    'recycle_bin_destroy_confirm' => 'Это действие удалит этот элемент навсегда вместе с любыми дочерними элементами, перечисленными ниже, и вы не сможете восстановить этот контент. Вы уверены, что хотите навсегда удалить этот элемент?',
    'recycle_bin_destroy_list' => 'Элементы для удаления',
    'recycle_bin_restore_list' => 'Элементы для восстановления',
    'recycle_bin_restore_confirm' => 'Это действие восстановит удаленный элемент, включая дочерние, в исходное место. Если исходное место было удалено и теперь находится в корзине, родительский элемент также необходимо будет восстановить.',
    'recycle_bin_restore_deleted_parent' => 'Родитель этого элемента также был удален. Элементы будут удалены до тех пор, пока этот родитель не будет восстановлен.',
    'recycle_bin_destroy_notification' => 'Удалено :count элементов из корзины.',
    'recycle_bin_restore_notification' => 'Восстановлено :count элементов из корзины',

    // Audit Log
    'audit' => 'Журнал аудита',
    'audit_desc' => 'Этот журнал аудита отображает список действий, отслеживаемых в системе. Этот список не отфильтрован в отличие от аналогичных списков действий в системе, где применяются фильтры.',
    'audit_event_filter' => 'Фильтр событий',
    'audit_event_filter_no_filter' => 'Без фильтра',
    'audit_deleted_item' => 'Удаленный элемент',
    'audit_deleted_item_name' => 'Имя: :name',
    'audit_table_user' => 'Пользователь',
    'audit_table_event' => 'Событие',
    'audit_table_related' => 'Связанный элемент',
    'audit_table_date' => 'Дата действия',
    'audit_date_from' => 'Диапазон даты от',
    'audit_date_to' => 'Диапазон даты до',

    // Role Settings
    'roles' => 'Роли',
    'role_user_roles' => 'Роли пользователя',
    'role_create' => 'Добавить роль',
    'role_create_success' => 'Роль успешно добавлена',
    'role_delete' => 'Удалить роль',
    'role_delete_confirm' => 'Это удалит роль с именем \':roleName\'.',
    'role_delete_users_assigned' => 'Эта роль назначена :userCount пользователям. Если вы хотите перенести их, выберите новую роль ниже.',
    'role_delete_no_migration' => "Не переносить пользователей",
    'role_delete_sure' => 'Вы уверены что хотите удалить данную роль?',
    'role_delete_success' => 'Роль успешно удалена',
    'role_edit' => 'Редактировать роль',
    'role_details' => 'Детали роли',
    'role_name' => 'Название роли',
    'role_desc' => 'Краткое описание роли',
    'role_external_auth_id' => 'Внешние ID авторизации',
    'role_system' => 'Системные разрешения',
    'role_manage_users' => 'Управление пользователями',
    'role_manage_roles' => 'Управление ролями и правами на роли',
    'role_manage_entity_permissions' => 'Управление правами на все книги, главы и страницы',
    'role_manage_own_entity_permissions' => 'Управление разрешениями для собственных книг, глав и страниц',
    'role_manage_page_templates' => 'Управление шаблонами страниц',
    'role_access_api' => 'Доступ к системному API',
    'role_manage_settings' => 'Управление настройками приложения',
    'role_asset' => 'Права доступа к материалам',
    'roles_system_warning' => 'Имейте в виду, что доступ к любому из указанных выше трех разрешений может позволить пользователю изменить свои собственные привилегии или привилегии других пользователей системы. Назначить роли с этими правами только доверенным пользователям.',
    'role_asset_desc' => 'Эти разрешения контролируют доступ по умолчанию к параметрам внутри системы. Разрешения на книги, главы и страницы перезапишут эти разрешения.',
    'role_asset_admins' => 'Администраторы автоматически получают доступ ко всему контенту, но эти опции могут отображать или скрывать параметры пользовательского интерфейса.',
    'role_all' => 'Все',
    'role_own' => 'Владелец',
    'role_controlled_by_asset' => 'Контролируется активом, в который они загружены',
    'role_save' => 'Сохранить роль',
    'role_update_success' => 'Роль успешно обновлена',
    'role_users' => 'Пользователи с данной ролью',
    'role_users_none' => 'Нет пользователей с данной ролью',

    // Users
    'users' => 'Пользователи',
    'user_profile' => 'Профиль пользователя',
    'users_add_new' => 'Добавить пользователя',
    'users_search' => 'Поиск пользователей',
    'users_latest_activity' => 'Последние действия',
    'users_details' => 'Данные пользователя',
    'users_details_desc' => 'Укажите имя и адрес электронной почты для этого пользователя. Адрес электронной почты будет использоваться для входа в приложение.',
    'users_details_desc_no_email' => 'Задайте имя для этого пользователя, чтобы другие могли его узнать.',
    'users_role' => 'Роли пользователя',
    'users_role_desc' => 'Назначьте роли пользователю. Если назначено несколько ролей, разрешения будут суммироваться и пользователь получит все права назначенных ролей.',
    'users_password' => 'Пароль пользователя',
    'users_password_desc' => 'Установите пароль для входа в приложение. Длина пароля должна быть не менее 6 символов.',
    'users_send_invite_text' => 'Вы можете отправить этому пользователю письмо с приглашением, которое позволит ему установить пароль самостоятельно или задайте пароль сами.',
    'users_send_invite_option' => 'Отправить пользователю письмо с приглашением',
    'users_external_auth_id' => 'Внешний ID аутентификации',
    'users_external_auth_id_desc' => 'Этот ID используется для связи с вашей внешней системой аутентификации.',
    'users_password_warning' => 'Заполните поля ниже только если вы хотите изменить пароль.',
    'users_system_public' => 'Этот пользователь представляет любых гостевых пользователей, которые посещают ваше приложение. Он не может использоваться для входа в систему и назначается автоматически.',
    'users_delete' => 'Удалить пользователя',
    'users_delete_named' => 'Удалить пользователя :userName',
    'users_delete_warning' => 'Это полностью удалит пользователя \':userName\' из системы.',
    'users_delete_confirm' => 'Вы уверены что хотите удалить этого пользователя?',
    'users_migrate_ownership' => 'Наследник контента',
    'users_migrate_ownership_desc' => 'Выберите пользователя, если вы хотите, чтобы он стал владельцем всех элементов, в настоящее время принадлежащих удаляемому пользователю.',
    'users_none_selected' => 'Пользователь не выбран',
    'users_delete_success' => 'Пользователь успешно удален',
    'users_edit' => 'Редактировать пользователя',
    'users_edit_profile' => 'Редактировать профиль',
    'users_edit_success' => 'Пользователь успешно обновлен',
    'users_avatar' => 'Аватар пользователя',
    'users_avatar_desc' => 'Выберите изображение. Изображение должно быть квадратным, размером около 256px.',
    'users_preferred_language' => 'Предпочитаемый язык',
    'users_preferred_language_desc' => 'Этот параметр изменит язык интерфейса приложения. Это не влияет на созданный пользователем контент.',
    'users_social_accounts' => 'Аккаунты социальных сетей',
    'users_social_accounts_info' => 'Здесь вы можете подключить другие учетные записи для более быстрого и легкого входа в систему. Отключение учетной записи здесь не возможно. Отмените доступ к настройкам вашего профиля в подключенном социальном аккаунте.',
    'users_social_connect' => 'Подключить аккаунт',
    'users_social_disconnect' => 'Отключить аккаунт',
    'users_social_connected' => ':socialAccount аккаунт успешно подключен к вашему профилю.',
    'users_social_disconnected' => ':socialAccount аккаунт успешно отключен от вашего профиля.',
    'users_api_tokens' => 'API токены',
    'users_api_tokens_none' => 'Для этого пользователя не создано API токенов',
    'users_api_tokens_create' => 'Создать токен',
    'users_api_tokens_expires' => 'Истекает',
    'users_api_tokens_docs' => 'Документация',

    // API Tokens
    'user_api_token_create' => 'Создать токен',
    'user_api_token_name' => 'Имя',
    'user_api_token_name_desc' => 'Присвойте вашему токену читаемое имя, в качестве напоминания о его назначении в будущем.',
    'user_api_token_expiry' => 'Истекает',
    'user_api_token_expiry_desc' => 'Установите дату истечения срока действия этого токена. После этой даты запросы, сделанные с использованием этого токена, больше не будут работать. Если оставить это поле пустым, срок действия истечет через 100 лет.',
    'user_api_token_create_secret_message' => 'Сразу после создания этого токена будут сгенерированы и отображены идентификатор токена и секретный ключ. Секретный ключ будет показан только один раз, поэтому перед продолжением обязательно скопируйте значение в безопасное и надежное место.',
    'user_api_token_create_success' => 'API токен успешно создан',
    'user_api_token_update_success' => 'API токен успешно обновлен',
    'user_api_token' => 'API токен',
    'user_api_token_id' => 'Идентификатор токена',
    'user_api_token_id_desc' => 'Это нередактируемый системный идентификатор для этого токена, который необходимо указывать в запросах API.',
    'user_api_token_secret' => 'Секретный ключ',
    'user_api_token_secret_desc' => 'Это сгенерированный системой секретный ключ для этого токена, который необходимо будет указывать в запросах API. Он будет показан только один раз, поэтому скопируйте это значение в безопасное и надежное место.',
    'user_api_token_created' => 'Токен создан :timeAgo',
    'user_api_token_updated' => 'Токен обновлён :timeAgo',
    'user_api_token_delete' => 'Удалить токен',
    'user_api_token_delete_warning' => 'Это полностью удалит API токен с именем \':tokenName\' из системы.',
    'user_api_token_delete_confirm' => 'Вы уверены, что хотите удалить этот API токен?',
    'user_api_token_delete_success' => 'API токен успешно удален',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
