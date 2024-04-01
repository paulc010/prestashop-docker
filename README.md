# prestashop-docker
This repository provides a mechanism to spin up an existing PrestShop site in docker for staging or development.
## Configuration

* Place the .sql export of your database in the database-import directory
* Modify the text files in secrets
    1. <db_name.txt> should contain the name of the database to match the source environment
    2. Set a new root password for the database. This should be random and unguessable <db-root-pw.txt>
    3. Set the name of a database user to use and a database password <db-user.txt> and <db-user-pw.txt>
    4. Specify a domain name for you local test environment <domain-development.txt>
    5. Optionally set an administrator account email and password <admin_email_development> and <admin_pw_development>
* Modify docker-compose.yml and uncomment any environment varaibles and/or volumes as required
* 
