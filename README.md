# Xor project

You can run this project with docker.
Please make sure that you have docker and docker-compose installed on your machine


#### Docker commands (Please run them from docker folder)

Start application

    docker-compose -p xor up -d

Stop application
    
    docker-compose -p xor stop
    
Remove containers
    
    docker-compose -p xor rm -f

Import mysql

    docker-compose -p xor run --rm db /bin/bash -c "mysql -h db -u xor -p xor < /tmp/db/baza.sql"
