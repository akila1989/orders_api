# Orders API
## _Created With use of Yii2_

Orders is a simple restfull API,

Technologies 

- Yii2
- MySql/Elastic Search
- Dockers

## Features

- Query Orders in a DB

## Usage

This API Requires [php](https://www.php.net/downloads.php) v7.4+ to run.

Install the dependencies and devDependencies and start the server.

Get all orders 
```sh
https://localhost:8443/orders/web/my-sql-orders 
```

Get order by ID

```sh
## https://localhost:8443/orders/web/my-sql-orders/view?id=<ORDER_ID>
ex:
https://localhost:8443/orders/web/my-sql-orders/view?id=10121
```

Get data by fields

```sh
## https://localhost:8443/orders/web/my-sql-orders?fields=<FIELD1,FIELDS2>
ex:
https://localhost:8443/orders/web/my-sql-orders?fields=orderNumber,status
```
Getting By Page

```sh
## https://localhost:8443/orders/web/my-sql-orders?fields=<PAGE>
ex:
https://localhost:8443/orders/web/my-sql-orders?page=5
```
## Unit Tests
```sh
cd /your/app/path
vendor/bin/codecept run tests/unit/Orders/CheckTest.php
```
## License

GPL

