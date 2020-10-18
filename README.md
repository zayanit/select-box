# Installation

## 1- Create a `.env` file

## 2- Create new DB for the application and add the values in `.env` file
```
database.default.hostname = localhost
database.default.database = your-DB-name
database.default.username = your-DB-username
database.default.password = your-DB-password
```

## 2- Migrate the DB by running this command
```
php spark migrate
```

## 3- Run the seeder using this command
```
php spark db:seed MainSeeder
```
