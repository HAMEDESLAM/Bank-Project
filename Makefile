.PHONY: up down build logs shell mongo-shell

up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose build

logs:
	docker-compose logs -f

shell:
	docker-compose exec php bash

mongo-shell:
	docker-compose exec mongodb mongo 