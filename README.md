## About Project

In this project, a REST API to handle students information is created using the Laravel Framework with VS Code. Users would be able to
perform operations such as viewing, searching, adding, editing students information, as well as exporting and importing students data in the form of an excel file with the usage of this API. Furthermore, to protect the API from unauthorized access, Laravel Passport is also used to provide authentication service so that other than login and register, the other routes in this API requires users to be authenticated to access.

## Prerequisites

Users are expected to have the softwares below installed:
- PHP 
- DBMS (Ex: MySQL)
- IDE (Ex: Visual Studio Code)
- API Platform (Ex: Postman)

## Get Started

After downloading the zip file from GitHub, several steps would still be required to be performed by the user before using the API.
1. Run 'composer install' to install all required dependencies
2. Rename '.env.example' to '.env'
3. Create a database
4. Change the value of 'DB_DATABASE' in the .env file to the name of the database created in the previous step
5. Run 'php artisan migrate' to create the tables in database
6. Run 'php artisan db:seed' to create dummy data in the database using seeders
7. Run 'php artisan serve' to start the server
8. Run 'php artisan key:generate' to generate app key
9. Run 'php artisan passport:keys' to generate passport's encrypton key
10. Run 'php artisan passport:client --personal' to create personal client access

## API Demonstration
After completing the processes above, the API would then be ready to be used. It is recommended to run the API using Postman and below is a video demonstrating the usage of the API using Postman and the Postman Link.

***Postman Collection Link: https://api.postman.com/collections/26563914-bc98350d-dab7-4286-8946-aa65b8867335?access_key=PMAT-01GWM125XGC1X5FN3SF51YSACR***


