# Define variables
COMPOSER = docker compose exec laravel.test composer

help: ## Доступные команды
	@printf "\033[33m%s:\033[0m\n" 'Available commands'
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[32m%-18s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

prepare: ## Подготовка проекта
	make configuration
	docker run --rm -u "$(shell id -u):$(shell id -g)" -v "$(shell pwd):/var/www/html" -w /var/www/html laravelsail/php83-composer:latest composer install --ignore-platform-reqs

setup: ## Настройка и запуск
	make configuration
	make up
	./vendor/bin/sail artisan key:generate
	sleep 10 && make migrate
	make npm-install

configuration: ## Создание .env
	cp --update=none .env.example .env

migrate: ## Миграции и сидирование
	./vendor/bin/sail artisan migrate

up: ## docker compose up
	./vendor/bin/sail up -d

npm-install: ## npm install
	./vendor/bin/sail npm install

vite-dev: ## Запуск vite в дев режиме
	./vendor/bin/sail npm run dev

queue-work: ## Запуск воркера очередей
	./vendor/bin/sail artisan queue:work

stop: ## Остановка контейнеров
	./vendor/bin/sail stop

down: ## Остановка и демонтирование контейнеров
	./vendor/bin/sail down

style-fixer: ## Запуск php-cs-fixer
	./vendor/bin/sail php ./vendor/bin/php-cs-fixer fix

tests: ## Запуск тестов
	./vendor/bin/sail artisan test

swagger: ## Генерация документации swagger
	./vendor/bin/sail artisan l5-swagger:generate
