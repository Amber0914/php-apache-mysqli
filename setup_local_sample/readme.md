## Ready AP
1. run ap
```
docker run --name phpApache -d -p 8080:80 -v YOUR_PATH:/var/www/html YourPhpImage
```

2. run db
```
docker run --name Mariadb -e MYSQL_ROOT_PASSWORD=root -d -p 3307:3306 -d  mariadb
docker ps -a
docker exec -it d559d4a1f5e2 bash  
```

3. Put index.php to YOUR_PATH

4. http://localhost:8080/ and will see connected!!