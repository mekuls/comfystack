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


##Some Notes:

**Why did I use docker rather than just mapping a directory into the VM?**

On my workstation I use a plugin called *vagrant-notify-forwarder* to propogate file changes into the VM, for the most part it works but I find that file changes within docker just work. I guess it also forces me to think about services in a more distributed way and with greater depth. 
