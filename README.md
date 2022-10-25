# Chromatic Softwares MVC-BACK-BONE
-This mvc oop php template will help you to build webapplications in 
incredible speed it components and widgets that will help you design
and add securities to your app, this mvc also supports api and make it secure
by adding security layers, your app will run fast compare to other framework because
it has a low overhead this mvc framework is super light-weight.

# How to install.
-use XAMPP or other apache servers.

1. On xampp go to xampp\apache\conf\extra and open httpd-vhosts.conf
2. Create your virtual host.
   <VirtualHost *:80>
        ServerAdmin webmaster@dummy-host2.example.com
        DocumentRoot "PATH_TO_XAMPP\xampp\htdocs\foldername"
        ServerName dev.chromaticmvc
    </VirtualHost>
3. I named my servername to dev.chromaticmvc, instead of putting localhost/foldername we will use dev.chromaticmvc
4. Add the servername to host file in your in C:\Windows\System32\drivers\etc open hosts
    then add 127.0.0.1	dev.chromaticmvc
5. got you your xampp/foldername/app/config open the setup_loader.php and setup.php
    on setup.php change the mode to local, on setupload_loader.php put dev.chromaticmvc to URL constant and add your database info
    if you have any.git
5. Reset your xampp apache then open your browser and dev.chromaticmvc/
6. Enjoy development.

