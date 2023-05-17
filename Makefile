start:
	php artisan serve --host 0.0.0.0:8000

start-frontend:
	npm run dev

setup:
	composer install
	cp -n .env.example .env
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed
	npm ci
	npm run build
	make ide-helper

watch:
	npm run watch

migrate:
	php artisan migrate

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

lint:
	composer exec phpcs -- --standard=PSR12 app routes tests

lint-fix:
	composer exec phpcbf -- --standard=PSR12 app routes tests

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n

sail-migrate-refresh-seed:
	./vendor/bin/sail artisan migrate:refresh --seed

sail-migrate-drop-database-fresh-seed:
	./vendor/bin/sail artisan migrate:fresh --seed

compose-start:
	docker-compose up -d

compose-build:
	docker-compose build

compose-setup: compose-build
	docker-compose run laravel.test make setup

rm-dockerfile-for-deploy:
	rm Dockerfile

compose-db-bash:
	docker-compose exec db bash
