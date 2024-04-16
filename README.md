## Coalize

API development test requested by the company Coalize

## 🚀 Starting

These instructions will allow you to get a copy of the project running on your local machine for testing purposes.

### 📋 Prerequisites

Taking into account that you have already installed the following tools on your machine:

```
Git, Docker e Docker Compose
```

### 🔧 Installation

A series of step-by-step examples that show you what you should do to get a development environment up and running.

Clone the repository using GIT

```sh
https://github.com/EzequielDhonatan/Coalize
```

Access the project folder

```sh
cd coalize
```

Create the .env file
```sh
cp .env.example .env
```

Update the .env file environment variables
```dosini
APP_NAME="Ezequiel Dhonatan - EZEDHO (Coalize)"
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=coalize
DB_USERNAME=ezequieldhonatan
DB_PASSWORD=ezequieldhonatan

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Upload containers
```sh
docker-compose up -d
```

Access the container
```sh
docker-compose exec coalize bash
```

Install dependencies
```sh
composer install
```

Generate the Laravel key
```sh
php artisan key:generate
```



## ⚙️ See it working
Access: [http://localhost:8080](http://localhost:8080)



## 🛠️ Construído com

Technologies and tools used

* [Git](https://git-scm.com/doc) - Version control

* [Git Flow](https://www.atlassian.com/br/git/tutorials/comparing-workflows/gitflow-workflow) - Workflow

* [Docker](https://docs.docker.com/) - Virtualization

* [NGINX](https://docs.nginx.com/) - Server

* [MySQL](https://dev.mysql.com/doc/) - Database (RDBMS)

* [Laravel](https://laravel.com/docs/11.x) - Framewor PHP (Laravel 11.x)

* [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum) - Authentication



## ✒️ Author

Developed by

* **Developer** - [Ezequiel Dhonatan](https://github.com/EequielDhonatan)
* **Company** - [EZEDHO](https://github.com/EZEDHO)
