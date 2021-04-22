# TIMETRACKER_praksa


## Authors:
- Gregor Bračko	   (backend)
- Samo Farič	     (backend)
- Patrick Kačič    (frontend)
- Tomas Kovačič    (frontend)

### Mentors:
- David Šket
- Tanis Kodrun

#### Installation
1. Clone repository timetracker_praksa (https://github.com/BrackoGregor/timetracker_praksa.git)
2. Create a new database called with any name (e.g. timetracker)
3. Run command prompt -> cd timetracker_praksa\api
4. Run command "composer install"
5. Copy file .env.example and rename to .env 
6. Open file .env and set DB_DATABASE=your_database_name (e.g. timetracker)
7. Run command "php artisan migrate"
8. Run command "php artisan passport:install"
9. Run command "php artisan key:generate"
10. Run command "php artisan serve"