.PHONY: setup build run-setup up down restart logs shell artisan migrate fresh tinker

setup: build run-setup up
	@echo ""
	@echo "Ambiente pronto!"
	@echo "Acesse: http://localhost:8080"
	@echo "Execute: make migrate"

build:
	docker compose build --no-cache

run-setup:
	docker compose run --rm app bash /var/www/docker/setup.sh

up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose restart

logs:
	docker compose logs -f

shell:
	docker compose exec app bash

artisan:
	docker compose exec app php artisan $(filter-out $@,$(MAKECMDGOALS))

migrate:
	docker compose exec app php artisan migrate

fresh:
	docker compose exec app php artisan migrate:fresh --seed

tinker:
	docker compose exec app php artisan tinker

%:
	@:
