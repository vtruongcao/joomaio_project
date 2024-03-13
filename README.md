# bash script setup joomaio


__Contents:__

- [1. Starter on Fedora](#starter-on-fedora)
- [2. Starter on CentOs](#starter-on-centos)

## 1. Starter on Fedora
### Prerequisites
OS: Fedora 39\
git: ^2.41.0\
nginx: ^1.24.0\
php: ^8.2.16\
php libs: php-cli, php-fpm, php-mysqli, php-pdo, php-xml,... \
composer: ^2.7.1

### Getting started
#### php-fpm config
Modify file ```/etc/php-fpm.d/www.conf```:
```
...
user=nginx
group=nginx
...
```
#### nginx config
Create a ```joomaio.conf``` file in ```/etc/nginx/conf.d/```
```
server {
    listen 9900 default;
    ...
    root /var/www/html/starter/public;
    index index.php;
    ...
    location ~ \.php$ {
        fastcgi_pass unix:/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        ...
    }
}
```
Add port 9900 into segange port
```
sudo semanage port -a -t http_port_t  -p tcp 9900
```
#### bash setup
Clone bash script
```
cd a_folder
git clone https://github.com/joomaio/starter.git
cd starter && git checkout to bash_script
```

Or download zip bash script from https://github.com/joomaio/starter/tree/bash_script

### Run bash script
```
sudo bash setup.sh -user user-name -document_root document_root_path
```
with\
user-name: permission for starter work, ex: www-data\
document_root_path: absolute path to app.The default will be the starter folder contained in the bash run folder.

When run bash script, you must enter database info:
```
Enter database host: 
Enter database username:
Enter database password:
Enter database name:
Enter database prefix:
```

starter info:
```
Enter access key (default is random string): 
Enter username starter (default is starter): 
Enter password starter (default is random string): 
```

Access the link https://127.0.0.1:9900/starter?access_key={access_key}


## 2. Starter on CentOs
### Prerequisites
OS: CentOS Stream 9\
git: ^2.43.0\
nginx: ^1.22.1\
php: ^8.2.17\
php libs: php-cli, php-fpm, php-mysqli, php-pdo, php-xml,... \
composer: ^2.7.2

### Getting started
#### php-fpm config
Modify file ```/etc/opt/remi/php82/php-fpm.d/www.conf```:
```
...
user=nginx
group=nginx
...
```

Change owner of ```www.sock``` to nginx:
```
sudo chown nginx:nginx /var/opt/remi/php82/run/php-fpm/www.sock

```
#### nginx config
Create a ```joomaio.conf``` file in ```/etc/nginx/conf.d/```
```
server {
    listen 9901 default;
    ...
    root /var/www/html/starter/public;
    index index.php;
    ...
    location ~ \.php$ {
        fastcgi_pass unix:/var/opt/remi/php82/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        ...
    }
}
```
Add port 9901 into segange port
```
sudo semanage port -a -t http_port_t  -p tcp 9901
```

Allow httpd to can network connect db
```
sudo setsebool -P httpd_can_network_connect_db 1
```
#### bash setup
Clone bash script
```
cd a_folder
git clone https://github.com/joomaio/starter.git
cd starter && git checkout to bash_script
```

Or download zip bash script from https://github.com/joomaio/starter/tree/bash_script

### Run bash script
```
sudo bash setup.sh -user user-name -document_root document_root_path
```
with\
user-name: permission for starter work, ex: www-data\
document_root_path: absolute path to app.The default will be the starter folder contained in the bash run folder.

When run bash script, you must enter database info:
```
Enter database host: 
Enter database username:
Enter database password:
Enter database name:
Enter database prefix:
```

starter info:
```
Enter access key (default is random string): 
Enter username starter (default is starter): 
Enter password starter (default is random string): 
```

Access the link https://127.0.0.1:9900/starter?access_key={access_key}
