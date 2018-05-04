# url-shortner-in-php-by-swapnil

PART 1: THE APPLICATION 

• We should be able to put a URL into the home page and get back a url of the shortest possible length. 
• We should be redirected to the full URL when we enter the short URL

How to use this example

1) Just clone the repository to you local directory or git clone it.

2) Set the local host in host file 

127.0.0.1 url-shortner-in-php-by-swapnil


3) Also set the virtual host for you directory where you clone the repository 

For ex: here i have clone it on my D:/projects/url-shortner-in-php-by-swapnil

<VirtualHost *:81>
	ServerName url-shortner-in-php-by-swapnil
	DocumentRoot "D:/projects/url-shortner-in-php-by-swapnil/public"
	<Directory "D:/projects/url-shortner-in-php-by-swapnil/public">
		Options FollowSymLinks
		AllowOverride All
		Order allow,deny
		Allow from all
		Require all granted
	</Directory>
</VirtualHost> 

4) Create the table that is in database folder 

5) restart the apache server and run the local host url like 

http://url-shortner-in-php-by-swapnil:81/

