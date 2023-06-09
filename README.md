# Сайт:

Тестовое задание для Backend Developer в It Solutions Group
[описание](https://github.com/itsolgrp/tests-tasks/blob/master/test-task-for-backend-developer/README.md)

### Tests, linter, Deploy status:

[![Maintainability](https://api.codeclimate.com/v1/badges/1074b5b2d00a262ca07f/maintainability)](https://codeclimate.com/github/AslanAV/itsolgrp-test/maintainability)

[![Test Coverage](https://api.codeclimate.com/v1/badges/1074b5b2d00a262ca07f/test_coverage)](https://codeclimate.com/github/AslanAV/itsolgrp-test/test_coverage)

[![Tests & Lint & Deploy to Railway](https://github.com/AslanAV/itsolgrp-test/actions/workflows/phpci.yaml/badge.svg)](https://github.com/AslanAV/itsolgrp-test/actions/workflows/phpci.yaml)


DEMO: https://itsolgrp-test-production.up.railway.app/

## Requirements:


- PHP ^8.1
- Node.js & npm
- Sqlite for local

## Project setup local

```shell
git clone https://github.com/AslanAV/itsolgrp-test.git
cd itsolgrp-test
make setup
```

## Project start local

```shell
make start
```

## Доступ к сайту 
```text
http://0.0.0.0:8000/
```

___
## Project setup with docker

```shell
git clone https://github.com/AslanAV/itsolgrp-test.git
cd itsolgrp-test
```

Установить значения в `.env.example`
```text
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=db_password
```
Если запущен локальный `MySQL`, 
требуется остановить службу для 
корректной работы контейнера `db` на порту `3306`

```shell
sudo service mysql stop
```

```shell
make compose-build
make compose-start
make compose-db-bash
```

в контейнере `db` выполнить команды

```shell
mysql -u root -p
password: root
GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY 'db_password';
FLUSH PRIVILEGES;
EXIT;
exit
```

```shell
make compose-setup
make compose-restart
```

## Доступ к сайту
```text
http://0.0.0.0:80/
```
