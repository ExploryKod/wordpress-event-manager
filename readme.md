
<code>
	define ROOT "C:/laragon/www/mysite"
	define SITE local.mysite
	<VirtualHost *:80>
	    DocumentRoot "${ROOT}"
	    ServerName ${SITE}
	    ServerAlias *.${SITE}
	    <Directory "${ROOT}">
	        AllowOverride All
	        Require all granted
	    </Directory>
	</VirtualHost>
	<VirtualHost *:443>
	    DocumentRoot "${ROOT}"
	    ServerName ${SITE}
	    ServerAlias *.${SITE}
	    <Directory "${ROOT}">
	        AllowOverride All
	        Require all granted
	    </Directory>
	    SSLEngine on
	    SSLCertificateFile      C:/laragon/etc/ssl/laragon.crt
	    SSLCertificateKeyFile   C:/laragon/etc/ssl/laragon.key
	</VirtualHost>
</code>
