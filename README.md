# Test Task

Assumptions: A basic page resembling social media
- registration
- login
- wall
- adding posts

## Requirments
- docker

## Instalation 
```
$ git clone https://github.com/polapani/testtask.git
$ cd testtask
$ docker-compose up -d
$ docker exec -it app bash -c "/var/www/init.sh"
```

## Launch

http://localhost/

You can log by a seed user:
- login: test@test.pl
- password: test
