# prestashop-docker
This repository provides a mechanism to spin up an existing PrestShop site locally in docker for staging or development. It uses a maildev container to simulate email functionality (without sending any external emails) and modifies the standard php.ini file to log any PHP errors in the syslog, making PHP errors available along with the database and web server logs with the command:

    docker compose logs

Email activity for the store can be viewed on the page:

    http://localhost:1232

phpMyAdmin is available on:

    http://localhost:1231

It is intended as an example and should be modified to suit your own development environment. You could, for example, add an init script to automatically copy the files from a cpanel backup to populate the database and persist /var/www/html to copy the actual store files from the backup to your staging/test environment. 

It is recommended that you proxy your containers with Nginx Proxy Manager which allows you to have multiple sites active on different ports. It can be run as a docker image and provides additional access control for sites connected to the public network. This allows you to easily switch between multiple versions which can run in parallel, and also selectively provide external access to the staging/development site.

## Configuration

* Place the .sql export of your database in the database-import directory (optional)
* Create the following text files in the <secrets> subdirectory:
    1. <db_name.txt> : Should contain the name of the database to match the source environment (remember to modify the databse prefix to also match).
    2. <db-root-pw.txt> : Set a new root password for mariadb. This should be random and unguessable.
    3. <db-user.txt> and <db-user-pw.txt> : Set the name of a database user to use and a database password.
    4. <domain-development.txt> : Specify a domain name for your local test environment.
    5. <admin_email_development.txt> and <admin_pw_development.txt> : Optionally set an administrator account email and password.
* Modify docker-compose.yml and uncomment/modify any additional environment variables and/or volumes, as required.
* Modify the mapped ports for the store, phpmyadmin and maildev. Defaults are 1230, 1231 & 1232 respectively.
* Optionally disable logging of PHP errors by setting E_DEVELOPMENT = 0
* Optionally disable maildev email testing by setting E_SMTP_SERVER = 0

## User and Employee Authentication

In order to properly authenticate users yo uwill need to copy over the specific crypto keys required in /app/config/parameters.php. The /app/config directory is persisted in a volume for this purpose.

## Running
Once configuration is complete you will be able to spin up your site using:

    docker compose up 

Optionally you may want to run docker detached using:

    docker compose up -d

Enjoy!