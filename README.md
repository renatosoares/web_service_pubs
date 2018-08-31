# Web Service Pubs
Experiments with base proposal in database programming, web service access.

1. Run for init in folder `src/`
```bash
composer install
```

2. Create database
```bash
psql --host=127.0.0.1 --port=5432 --username=postgres --password --echo-all --command="CREATE DATABASE pubs"
```

3. Run to copy dot env in folder `src/`
```bash
composer run-script post-root-package-install
```
4. config dot env `src/.env`

5. Run migration in folder `src/`
```bash
php artisan migrate
```

6. Run persist store procedure, in folder `src/`
```bash
psql --host=127.0.0.1 --port=5432 --username=postgres --password --echo-all --dbname=pubs --file=database/scripts/store_procedure/sp_publishers_insert.sql
psql --host=127.0.0.1 --port=5432 --username=postgres --password --echo-all --dbname=pubs --file=database/scripts/store_procedure/sp_publishers_select.sql
psql --host=127.0.0.1 --port=5432 --username=postgres --password --echo-all --dbname=pubs --file=database/scripts/store_procedure/sp_publishers_update.sql
psql --host=127.0.0.1 --port=5432 --username=postgres --password --echo-all --dbname=pubs --file=database/scripts/store_procedure/sp_publishers_delete.sql
```

#### End points

|Verb       |   URI                         |   Action      |
| --------- | ----------------------------- | ------------- |
|GET        |   /publishers?name={value}    |   index       |
|POST       |   /publishers                 |   store       |
|PUT/PATCH  |   /publishers/{id}            |   update      |
|DELETE     |   /publishers/{id}            |   destroy     |

Application content for academic purposes

#### :mortar_board:
#### Programação e Administração de Banco de Dados
##### Tecnologia em Análise e Desenvolvimento de Sistemas
###### Instituto Federal de Educação, Ciência e Tecnologia
