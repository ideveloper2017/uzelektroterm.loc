<?php

return [
    'name' => 'Резервное копирование',
    'backup_description' => 'Резервное копирование базы данных и папки для загрузки.',
    'create_backup_success' => 'Резервное копирование создано успешно!',
    'delete_backup_success' => 'Удаление резервной копии прошло успешно!',
    'restore_backup_success' => 'Восстановление резервной копии прошло успешно!',
    'generate_btn' => 'Создайте резервную копию',
    'create' => 'Создайте резервную копию',
    'restore' => 'Восстановление резервной копии',
    'create_btn' => 'Создать',
    'restore_btn' => 'Восстановить',
    'restore_confirm_msg' => 'Вы действительно хотите восстановить эту ревизию?',
    'download_uploads_folder' => 'Загрузить резервную копию папки загрузок',
    'download_database' => 'Загрузить резервную копию базы данных',
    'restore_tooltip' => 'Восстановите эту резервную копию',
    'demo_alert' => 'Привет, гость, если вы видите, что демо-сайт уничтожен, пожалуйста, помогите мне.<a href=":link">go here</a> и восстановите демо-сайт до последней версии! Большое спасибо!',
    'menu_name' => 'Резервные копии',
    'size' => 'Размер',
    'no_backups' => 'Резервной копии сейчас нет!',
    'proc_open_disabled_error' => 'Функция <strong>proc_open()</strong> была отключена, поэтому система не может создавать резервные копии базы данных. Пожалуйста, свяжитесь с вашим хостинг-провайдером, чтобы включить эту функцию.',
    'database_backup_not_existed' => 'Резервная база данных не существует!',
    'uploads_folder_backup_not_existed' => 'Папка Backup Uploads не существует!',
    'important_message1' => 'Это простая функция резервного копирования, это решение для вас, если ваш сайт имеет < 1 ГБ данных и может быть использовано для быстрого резервного копирования вашего сайта.',
    'important_message2' => 'Если в локальном хранилище находится более 1 Гб изображений/файлов, следует воспользоваться функцией резервного копирования на хостинге или VPS.',
    'important_message3' => 'Чтобы создать резервную копию базы данных, выполните функцию <strong>proc_open()</strong> либо <strong>system()</strong> должна быть включена. Обратитесь к своему хостинг-провайдеру, чтобы включить его, если он отключен.',
    'important_message4' => 'Это не полное резервное копирование, это просто резервное копирование загруженных файлов и базы данных.',
    'cannot_restore_database' => 'Невозможно восстановить базу данных. Резервная копия базы данных отсутствует!',
];
