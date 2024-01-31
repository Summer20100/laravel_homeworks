# Задание 2. Установка composer

## INFO from `composer.json`


```

{
    "name": "human/summer",
    "description": "Домашнее задание по Composer",
    "autoload": {
        "psr-4": {
            "Human\\Summer\\": "src/"
        }
    },
    "authors": [
        {
            "name": "summer"
        }
    ],
    "require-dev": {
        "psr/log": "^3.0"
    }
}

```

## Ответы на вопросы

1. В чем разница между файлами `composer.json` и `composer.lock` ?

`composer.json` - файл в формате JSON, в котором описано какие пакеты должны быть установлены и с какими версиями.
После запускается `composer install` и всё готово.

`composer.lock` - файл, в который сохраняется текущий список непосредственно теx версиq, которые были установлены и под которые велась разработка и тестирование, чтобы в дальнейшем можно было их переустановить. Это означает, что если в `composer.json` указана версия 1.*, а коллега запустил `composer update`, которая установила 1.2.4 и закоммитил файл `composer.lock`, то запустив `composer install`, получим ту же 1.2.4, даже если 1.3.0 уже вышла. 
Это позволяет быть уверенным, что каждый, кто работает над вашим проектом будет иметь абсолютно одинаковые версии пакетов.

2. В чем разница между директивами `require-dev` и `require` внутри файла `composer.json`?

В секции `require` указываются пакеты, которые необходимы для работы проекта (сайта или пакета). Это могут быть комментарии, админка, функции для работы с датами и т.п. 
В секции `require-dev` указывают пакеты, необходимые только для разработки и не влияющие на работу самого проекта.

3. В чем разница между запуском команды `composer install` и `composer update`?

**composer install** - проводит установку, в соответствии с инструкциями файла composer.json, при этом актуальные версии пакетов берутся из файла composer.lock.
**composer update** - в соответствии с опциями файла composer.lock ищет в сети наиболее новые версии пакетов, обновит локальные копии пакетов и поправит composer.lock.


# Задание 3. Установка Laravel

## Ответы на вопросы

1. Перечислите список composer-пакетов, которые использует фреймворк Laravel после установки.

```
"require": {
    "php": "^7.3|^8.0",
    "fruitcake/laravel-cors": "^2.0",
    "guzzlehttp/guzzle": "^7.0.1",
    "laravel/framework": "^8.75",
    "laravel/sanctum": "^2.11",
    "laravel/tinker": "^2.5"
},
"require-dev": {
    "facade/ignition": "^2.5",
    "fakerphp/faker": "^1.9.1",
    "laravel/sail": "^1.0.1",
    "mockery/mockery": "^1.4.4",
    "nunomaduro/collision": "^5.10",
    "phpunit/phpunit": "^9.5.10"
},

```

2. Изучите директорию `config` и опишите какие файлы хранятся в этой директории.

В директории `config` хранятся файлы, которые формируют конфигурации приложения.

Содержит следуюшие файлы:
- `app.php`: 
- `auth.php`: 
- `broadcasting.php`: 
- `cache.php`: 
- `cors.php`: 
- `database.php`: 
- `filesystems.php`: 
- `hashing.php`: 
- `logging.php`: 
- `mail.php`: 
- `queue.php`: 
- `sanctum.php`: 
- `services.php`: 
- `session.php`: 
- `view.php`: 

Например, база данных приложения может быть настроена в файле config / database.php. Можно установить параметры конфигурации, которые будут использоваться различными базами данных. Также можно использовать настройки по умолчанию.


3. В какой директории хранятся основные файлы (классы) с бизнес-логикой приложения?

В директории `App\Actions` хранятся основные файлы (классы) с бизнес-логикой приложения





