##Development Environment

The development environment is a simple docker-compose configuration which consists of 

1. nginx container 
2. php-5 fpm container 

To spin up the development environment

```
vagrant up
docker-compose up
```

To spin down the development environment

```
vagrant destroy --force
docker-compose down
```
